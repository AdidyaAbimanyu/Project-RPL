<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tikets')->insert([
            [
                'nama_tiket' => 'Dewasa',
                'harga' => 10000,
                'ketersediaan' => 500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_tiket' => 'Anak - anak',
                'harga' => 5000,
                'ketersediaan' => 500,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
