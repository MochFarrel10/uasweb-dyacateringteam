<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name'=> 'dyacateringteam',
            'email'=> 'dyacatering@gmail.com',
            'password'=> bcrypt('dyacatering123'),
            'remember_token'=>Str::random(60)
        ]);
    }
}
