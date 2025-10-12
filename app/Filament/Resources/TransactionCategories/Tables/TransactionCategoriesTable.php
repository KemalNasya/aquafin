<?php

namespace App\Filament\Resources\TransactionCategories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\ColorColumn;

class TransactionCategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Kategori')
                    ->searchable()
                    ->sortable()
                    ->weight('medium'),
                    
                TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->colors([
                        'income' => 'success',
                        'expense' => 'danger',
                    ])
                    ->formatStateUsing(fn ($state) => 
                        $state === 'income' ? 'Pemasukan' : 'Pengeluaran'
                    ),
                    
                // TextColumn dengan badge untuk warna yang lebih jelas
                TextColumn::make('color')
                    ->label('Warna')
                    ->badge()
                    ->color(fn ($state) => $state === 'red' ? 'danger' : 'success')
                    ->formatStateUsing(fn ($state) => 
                        $state === 'red' ? 'Merah 🔴' : 'Hijau 🟢'
                    )
                    ->sortable(),
                    
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}