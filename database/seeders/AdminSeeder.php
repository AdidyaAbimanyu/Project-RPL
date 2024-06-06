<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminData = [
            'name' => 'ProjekRPL123',
            'password' => 'ProjekRPL123'
        ];

        $adminData['password'] = bcrypt($adminData['password']);

        admin::create($adminData);
    }
}
