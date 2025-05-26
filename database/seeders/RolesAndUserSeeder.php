<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesAndUserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('role_user')->insert([
            [
                'role_id' => 2,
                'user_id' => 1,
                'user_type' => 'App\Models\User',
            ],
        ]);
    }
}