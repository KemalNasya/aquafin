<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TransactionCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type', 
        'color',
        'description' // Opsional
    ];

    // Const untuk warna yang allowed
    const COLOR_RED = 'red';
    const COLOR_GREEN = 'green';

    // Method untuk mendapatkan pilihan warna
    public static function getColorOptions(): array
    {
        return [
            self::COLOR_RED => 'Merah',
            self::COLOR_GREEN => 'Hijau',
        ];
    }

    // Accessor untuk color display
    public function getColorDisplayAttribute()
    {
        return $this->color === 'red' ? '🔴' : '🟢';
    }

    // Relationship dengan transactions
    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class, 'transaction_category_id');
    }

    // Scope untuk filtering
    public function scopeIncome($query)
    {
        return $query->where('type', 'income');
    }

    public function scopeExpense($query)
    {
        return $query->where('type', 'expense');
    }
}