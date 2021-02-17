<?php

use App\Model\User\User;
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
                'login' => 'admin',
                'first_name' => 'Василий',
                'last_name' => 'Петров',
                'email' => 'a@a.a',
                'password' => Hash::make('qw123456'),
                'email_verified_at' => date('Y-m-d H:m:s'),
                'active' => true,
                'role' => User::ROLE['admin']
            ],
        ];

        DB::table('users')
            ->insert($users);
    }
}
