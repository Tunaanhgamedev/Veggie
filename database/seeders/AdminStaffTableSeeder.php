<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'name'         => 'Admin User',
            'email'        => 'admin@example.com',
            'password'     => bcrypt('123456'),
            'phone_number' => '0199999999',
            'status'       => 'active',
            'avatar'       => '',
            'address'      => 'Da Nang, Viet Nam',
            'role_id'      => 1,
            'created_at'   =>now(),
            'updated_at'   =>now(),
        ]);

        User::updateOrCreate([
            'name'         => 'Staff User',
            'email'        => 'staff@example.com',
            'password'     => bcrypt('123456'),
            'phone_number' => '0188888888',
            'status'       => 'active',
            'avatar'       => '',
            'address'      => 'Quang Binh, Viet Nam',
            'role_id'      => 2,
            'created_at'   =>now(),
            'updated_at'   =>now(),
        ]);
    }
}