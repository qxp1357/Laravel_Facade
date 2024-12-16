<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => '홍길동',
            'email' => 'hong@amuz.co.kr',
            'password' => bcrypt('password'),
            'team_id' => 1,
        ]);

        User::create([
            'name' => '김영희',
            'email' => 'kim@amuz.co.kr',
            'password' => bcrypt('password'),
            'team_id' => 2,
        ]);
    }
}
