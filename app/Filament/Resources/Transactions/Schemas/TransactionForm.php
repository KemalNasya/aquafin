<?php

namespace App\Filament\Resources\Transactions\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('amount')
                ->label('Jumlah')
                    ->required()
                    ->numeric(),
                Select::make('type')
                ->label('Tipe')
                    ->options(['income' => 'Pemasukan', 'expense' => 'Pengeluaran'])
                    ->required(),
                Textarea::make('description')
                ->label('Deskripsi')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('transaction_date')
                ->label('Tanggal Transaksi')
                    ->required(),
                Select::make('transaction_category_id')
                ->label('Kategori')
                    ->relationship('category', 'name')
                    ->required(),
                Select::make('wallet_id')
                    ->relationship('wallet', 'name')
                    ->required(),
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
            ]);
    }
}
