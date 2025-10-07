<?php

namespace App\Filament\Resources\TransactionCategories\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TransactionCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Kategori')
                    ->required()
                    ->maxLength(255)
                    ->unique('transaction_categories', 'name', ignoreRecord: true),

                Select::make('type')
                    ->label('Tipe')
                    ->options([
                        'income' => 'Pemasukan',
                        'expense' => 'Pengeluaran'
                    ])
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($set, $state) {
                        // Auto-set color berdasarkan type
                        $set('color', $state === 'income' ? 'green' : 'red');
                    }),

                // Color hidden, auto-set berdasarkan type
                \Filament\Forms\Components\Hidden::make('color'),

                // Tampilkan info warna (readonly)
                \Filament\Forms\Components\Placeholder::make('color_info')
                    ->content(function ($get) {
                        $type = $get('type');
                        if ($type === 'income') {
                            return 'Warna: Hijau 🟢 (Otomatis untuk Pemasukan)';
                        } else if ($type === 'expense') {
                            return 'Warna: Merah 🔴 (Otomatis untuk Pengeluaran)';
                        }
                        return 'Pilih tipe terlebih dahulu';
                    }),

            ]);
    }
}
