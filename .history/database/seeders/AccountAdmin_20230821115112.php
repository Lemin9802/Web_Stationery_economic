<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccountAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => "admin",
            'email' => "admin03@gmail.com",
            'phone' => "868686868",
            'address' => "22 Cong Hoa, q.Tan Binh",
            'password' => Hash::make('admin03@gmail.com'),
            'role' => 0
        ];
        DB::table('users')->insert($data);
    }
}
