<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$KNCdLSo459rF3nbCYrizcuLW90QF.OFHNV9vPfZQ0kZ97CQoqhGV2',
                'remember_token' => null,
            ],
        ];

        User::insert($users);

    }
}
