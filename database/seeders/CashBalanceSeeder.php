<?php

namespace Database\Seeders;

use App\Models\CashBalance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CashBalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CashBalance::insert([
            [
                'nominal' => 150000000,
            ],
        ]);
    }
}
