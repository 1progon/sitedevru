<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
                'name' => 'admin',
                'first_name' => 'Василий',
                'last_name' => 'Петров',
                'email' => 'asbo@mail.ru',
                'password' => Hash::make('123'),
                'email_verified_at' => date('Y-m-d H:m:s'),
                'active' => true,
            ],
        ];

        DB::table('users')
            ->insert($users);
    }
}