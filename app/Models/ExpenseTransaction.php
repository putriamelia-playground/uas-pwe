<?php

namespace App\Models;

use App\Models\ExpenseCategory;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class ExpenseTransaction extends Model
{
    public $table = 'expense_transactions';

    protected $fillable = [
        'expense_category_id',
        'user_id',
        'tanggal',
        'nominal',
        'keterangan',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(ExpenseCategory::class, 'expense_category_id',
            'id');
    }
}
