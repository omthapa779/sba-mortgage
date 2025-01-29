<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminKeySeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admin_keys')->insert([
            'key' => Hash::make('SbaMortgage2024'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}