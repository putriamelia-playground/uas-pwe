<?php

namespace Database\Seeders;

use App\Models\ExpenseCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExpenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExpenseCategory::insert([
            [
                'nama_jenis' => 'Makan dan Minum',
            ],
            [
                'nama_jenis' => 'Listrik',
            ],
            [
                'nama_jenis' => 'Air',
            ],
            [
                'nama_jenis' => 'Internet',
            ],
            [
                'nama_jenis' => 'Sewa',
            ],
            [
                'nama_jenis' => 'Transportasi',
            ],
            [
                'nama_jenis' => 'Perlengkapan Kantor',
            ],
        ]);
    }
}
