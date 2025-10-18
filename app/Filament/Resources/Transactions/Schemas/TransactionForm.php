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
                Select::make('transaction_category_id')
                    ->label('Kategori')
                    ->options(function () {
                        $incomeCategories = \App\Models\TransactionCategory::where('type', 'income')->pluck('name', 'id');
                        $expenseCategories = \App\Models\TransactionCategory::where('type', 'expense')->pluck('name', 'id');

                        $options = [];

                        if ($incomeCategories->isNotEmpty()) {
                            $options['Pemasukan'] = $incomeCategories->toArray();
                        }

                        if ($expenseCategories->isNotEmpty()) {
                            $options['Pengeluaran'] = $expenseCategories->toArray();
                        }

                        return $options;
                    })
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($set, $state) {
                        if ($state) {
                            $category = \App\Models\TransactionCategory::find($state);
                            if ($category) {
                                $set('type', $category->type);
                                $set('color', $category->type === 'income' ? 'green' : 'red');
                            }
                        } else {
                            // Reset jika kategori dihapus
                            $set('type', null);
                            $set('color', null);
                        }
                    }),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('amount')
                    ->label('Jumlah')
                    ->required()
                    ->numeric()
                    ->integer() // Tidak boleh desimal
                    ->minValue(100)
                    ->maxValue(999999999999)
                    ->rules([
                        'required',
                        'integer', // Validasi integer di backend
                        'min:1',
                        'max:999999999999'
                    ])
                    ->validationMessages([
                        'required' => 'Jumlah transaksi wajib diisi',
                        'integer' => 'Jumlah harus berupa angka bulat tanpa titik atau koma',
                        'min' => 'Jumlah minimal adalah 100',
                        'max' => 'Jumlah terlalu besar. Maksimal 999.999.999.999',
                    ])
                    ->helperText('Masukkan jumlah transaksi (angka bulat tanpa titik/koma)'),

                // Menampilkan tipe dengan info kategori
                \Filament\Forms\Components\Placeholder::make('type_display')
                    ->label('Tipe')
                    ->content(function ($get) {
                        $categoryId = $get('transaction_category_id');
                        $type = $get('type');

                        if ($categoryId && $type) {
                            $category = \App\Models\TransactionCategory::find($categoryId);
                            $categoryName = $category ? $category->name : 'Kategori dipilih';

                            if ($type === 'income') {
                                return "Kategori '{$categoryName}' memiliki tipe Pemasukan (hijau 🟢)";
                            } else {
                                return "Kategori '{$categoryName}' memiliki tipe Pengeluaran (merah 🔴)";
                            }
                        }
                        return 'Tipe akan otomatis terisi ketika memilih kategori';
                    })
                    ->extraAttributes(['class' => 'text-sm']),

                // Field type yang asli (hidden dan required)
                \Filament\Forms\Components\Hidden::make('type')
                    ->required(),

                DatePicker::make('transaction_date')
                    ->label('Tanggal Transaksi')
                    ->required()
                    ->displayFormat('d/m/Y')
                    ->format('Y-m-d') // PASTIKAN format Y-m-d
                    ->default(now())
                    ->maxDate(now()) // Frontend validation
                    ->rules([
                        'required',
                        'date',
                        'before_or_equal:today' // Backend validation
                    ])
                    ->validationMessages([
                        'required' => 'Tanggal transaksi wajib diisi',
                        'date' => 'Format tanggal tidak valid',
                        'before_or_equal' => 'Tanggal tidak boleh melebihi hari ini',
                    ])
                    ->helperText('Pilih tanggal (maksimal hari ini)'),

                \Filament\Forms\Components\Hidden::make('color'),

                Select::make('wallet_id')
                    ->label('Dompet')
                    ->relationship('wallet', 'name', function ($query) {
                        return $query->where('is_active', true);
                    })
                    ->required(),

                Select::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->required(),
            ]);
    }
}