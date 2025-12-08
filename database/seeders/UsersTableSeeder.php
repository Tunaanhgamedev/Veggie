<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'         => 'Nguyen Tuan Anh',
            'email'        => 'nguyentuananh@example.com',
            'password'     => bcrypt('123456'),
            'phone_number' => '0163214214',
            'status'       => 'pending',
            'avatar'       => '',
            'address'      => 'Da Nang, Viet Nam',
            'role_id'      => 3,
            'created_at'   =>now(),
            'updated_at'   =>now(),
        ]);

        User::create([
            'name'         => 'Nguyen Tuan',
            'email'        => 'nguyentuan@example.com',
            'password'     => bcrypt('123456'),
            'phone_number' => '0178742141',
            'status'       => 'pending',
            'avatar'       => '',
            'address'      => 'Quang Binh, Viet Nam',
            'role_id'      => 2,
            'created_at'   =>now(),
            'updated_at'   =>now(),
        ]);
    
        User::create([
            'name'         => 'Nguyen Tuan B',
            'email'        => 'nguyentuanb@example.com',
            'password'     => bcrypt('123456'),
            'phone_number' => '0123943851',
            'status'       => 'pending',
            'avatar'       => '',
            'address'      => 'Da Nang, Viet Nam',
            'role_id'      => 3,
            'created_at'   =>now(),
            'updated_at'   =>now(),
        ]);
    }
}