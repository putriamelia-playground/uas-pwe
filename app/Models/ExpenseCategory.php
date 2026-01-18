<?php

namespace App\Models;

use App\Models\ExpenseTransaction;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class ExpenseCategory extends Model
{
    public $table = 'expense_categories';

    protected $fillable = [
        'nama_jenis',
    ];

    public function expenseTransactions(): HasMany
    {
        return $this->hasMany(
            ExpenseTransaction::class,
            'expense_category_id',
        );
    }
}
