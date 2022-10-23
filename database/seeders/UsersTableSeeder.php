<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $users = [];
        $createdAt = $faker -> dateTimeBetween('-6 months', '-5 months');
        $emailVerifiedAt = $faker->dateTimeBetween('- 4 months', '-2 months');
        $userName = 'Admin';
        $users[] = [
            'name' => $userName,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => $emailVerifiedAt,
            'role' => 1,
            'created_at' => $createdAt,
            'updated_at' => $createdAt
        ];

        for ($i = 1; $i <= 10; $i++) {
            $createdAt = $faker -> dateTimeBetween('-6 months', '-5 months');
            $emailVerifiedAt = $faker->dateTimeBetween('- 4 months', '-2 months');
            $users[] = [
                'name'=> Str::random(10),
                'email'=>Str::random(5).'@gmail.com',
                'password'=>Hash::make('password'),
                'email_verified_at' => $emailVerifiedAt,
                'role' => 3,
                'created_at' => $createdAt,
                'updated_at' => $createdAt
            ];
        }

        DB::table('users')->insert($users);
    }
}
