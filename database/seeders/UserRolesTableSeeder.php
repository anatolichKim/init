<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['id'=>1, 'title'=>'Админ'],
            ['id'=>2, 'title'=>'Редактор'],
            ['id'=>3, 'title'=>'Пользователь'],
        ];

        \DB::table('user_roles')->insert($roles);
    }
}
