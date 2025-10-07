<?php

namespace App\Filament\Resources\Transactions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class TransactionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('amount')
                    ->label('Jumlah')
                    ->money('IDR')
                    ->sortable()
                    ->color(fn ($record) => $record->type === 'income' ? 'success' : 'danger'),
                    
                TextColumn::make('type')
                    ->label('Tipe')
                    ->badge()
                    ->colors([
                        'success' => 'income',
                        'danger' => 'expense',
                    ])
                    ->formatStateUsing(fn ($state) => 
                        $state === 'income' ? 'Pemasukan' : 'Pengeluaran'
                    ),
                    
                TextColumn::make('transaction_date')
                    ->label('Tanggal Transaksi')
                    ->date('d M Y')
                    ->sortable(),
                    
                TextColumn::make('category.name')
                    ->label('Kategori')
                    ->searchable()
                    ->sortable()
                    ->color(fn ($record) => $record->category->color === 'red' ? 'danger' : 'success'),
                    
                TextColumn::make('wallet.name')
                    ->label('Wallet'),
                    
                TextColumn::make('user.name')
                    ->label('Pengguna'),
                    
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(30),
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
            ])
            ->defaultSort('transaction_date', 'desc');
    }
}