<?php

namespace Database\Seeders;

use App\Models\pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        for ($i = 0; $i < 4; $i++) {
            pemain::create([
                'nama_pemain' => fake()->name(),
                'nomor_punggung' => fake()->numberBetween(1, 99),
                'posisi' => fake()->realTextBetween('ST', 'CB', 'RB', 'LB', 'CM', 'RW', 'LW'),
            ]);
        }
    }
}
