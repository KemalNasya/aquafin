<?php

namespace App\Filament\Pages;

use App\Models\Transaction;
use BackedEnum;
use Filament\Forms\Components\DatePicker;
use Filament\Pages\Page;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use UnitEnum;

class Report extends Page implements HasTable
{
    use InteractsWithTable;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar';

    protected string $view = 'filament.pages.report';

    protected static ?string $title = 'Reports';

    protected static ?string $navigationLabel = 'Reports';

    protected static ?int $navigationSort = 4;

    protected static string|UnitEnum|null $navigationGroup = 'Finance';

    public static function canAccess(): bool
    {
        $user = Auth::user();
        return $user && in_array($user->role, ['admin', 'owner']);
    }

    protected function getTableQuery(): Builder
    {
        return Transaction::query();
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                TextColumn::make('id')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('amount')
                    ->money('USD')
                    ->sortable(),
                IconColumn::make('type')
                    ->boolean()
                    ->trueIcon('heroicon-o-trending-up')
                    ->falseIcon('heroicon-o-trending-down'),
                TextColumn::make('transactionCategory.name')
                    ->label('Category')
                    ->sortable(),
                TextColumn::make('wallet.name')
                    ->label('Wallet')
                    ->sortable(),
                TextColumn::make('user.name')
                    ->label('User')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options([
                        1 => 'Income',
                        0 => 'Expense',
                    ]),
                SelectFilter::make('transaction_category_id')
                    ->relationship('transactionCategory', 'name')
                    ->multiple(),
                Filter::make('created_from')
                    ->form([
                        DatePicker::make('created_from'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            );
                    }),
                Filter::make('created_until')
                    ->form([
                        DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    }),
            ])
            ->actions([])
            ->bulkActions([]);
    }
}
