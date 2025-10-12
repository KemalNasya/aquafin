<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'type',
        'description',
        'transaction_date',
        'transaction_category_id',
        'wallet_id',
        'user_id'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'transaction_date' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($transaction) {
            $transaction->updateWalletBalance();
        });

        static::updated(function ($transaction) {
            $transaction->updateWalletBalance();
        });

        static::deleted(function ($transaction) {
            $transaction->updateWalletBalance(true); // Reverse on delete
        });
    }

    protected function updateWalletBalance($isDelete = false)
    {
        $wallet = $this->wallet;
        if (!$wallet || !$wallet->is_active) {
            return; // Only update active wallets
        }

        $amount = $this->amount;
        if ($isDelete) {
            // Reverse the effect
            $amount = -$amount;
        }

        if ($this->type === 'income') {
            $wallet->increment('balance', $amount);
        } elseif ($this->type === 'expense') {
            $wallet->decrement('balance', $amount);
        }
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(TransactionCategory::class, 'transaction_category_id');
    }

    public function wallet(): BelongsTo
    {
        return $this->belongsTo(Wallet::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
