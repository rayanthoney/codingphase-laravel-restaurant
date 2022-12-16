<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // CREATED USERS
        DB::table('roles')->insert([
            'title' => 'Admin',
        ]);
        
        DB::table('roles')->insert([
            'title' => 'Employee',
        ]);
        
        // ASSIGNED USER A ROLE
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
        
        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 2,
        ]);
    }
}
