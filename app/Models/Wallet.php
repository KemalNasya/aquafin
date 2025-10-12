<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wallet extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'balance', 'currency_id', 'is_active'];

    protected $casts = [
        'balance' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($wallet) {
            // Sync balance with computed total_saldo only if active
            if ($wallet->is_active) {
                $wallet->balance = $wallet->getTotalSaldoAttribute();
            } else {
                $wallet->balance = 0; // Inactive wallets have 0 balance
            }
        });
    }

    public function getTotalSaldoAttribute()
    {
        if (!$this->is_active) {
            return 0;
        }

        $incomes = $this->transactions()->where('type', 'income')->sum('amount');
        $expenses = $this->transactions()->where('type', 'expense')->sum('amount');

        return $incomes - $expenses;
    }

    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
