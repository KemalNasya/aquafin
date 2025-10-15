<?php

namespace App\Filament\Resources\Currencies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CurrencyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Mata Uang')
                    ->required()
                    ->validationMessages([
                        'required' => 'Nama mata uang harus diisi.',
                    ])
                    ->helperText('(contoh: Rupiah Indonesia)'),
                TextInput::make('code')
                    ->label('Kode Mata Uang')
                    ->required()
                    ->maxLength(3)
                    ->rules(['max:3'])
                    ->validationMessages([
                        'required' => 'Kode mata uang harus diisi.',
                        'max' => 'Kode mata uang maksimal 3 karakter.',
                    ])
                    ->helperText('contoh: IDR, USD, EUR)'),
                TextInput::make('symbol')
                    ->label('Simbol Mata Uang')
                    ->required()
                    ->maxLength(10)
                    ->rules(['max:10'])
                    ->validationMessages([
                        'required' => 'Simbol mata uang harus diisi.',
                        'max' => 'Simbol mata uang maksimal 10 karakter.',
                    ])
                    ->helperText('(contoh: Rp, $, €)'),
                TextInput::make('exchange_rate')
                    ->label('Kurs Tukar')
                    ->required()
                    ->numeric()
                    ->minValue(0)
                    ->maxValue(999999.9999)
                    ->default(1.0)
                    ->validationMessages([
                        'required' => 'Kurs tukar harus diisi.',
                        'numeric' => 'Kurs tukar harus berupa angka.',
                        'min' => 'Kurs tukar minimal 0.',
                        'max' => 'Kurs tukar maksimal 999999.9999.',
                    ]),
                Toggle::make('is_default')
                    ->label('Jadikan Default')
                    ->required()
                    ->validationMessages([
                        'required' => 'Status default harus dipilih.',
                    ]),
            ]);
    }
}
