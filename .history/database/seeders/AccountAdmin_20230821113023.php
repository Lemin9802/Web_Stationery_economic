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
            'email' => "admin02@gmail.com",
            'phone' => "868797979",
            'address' => "20 Cong Hoa, q.Tan Binh",
            'password' => Hash::make('admin02@gmail.com'),
            'role' => 0
        ];
        DB::table('users')->insert($data);
    }
}
