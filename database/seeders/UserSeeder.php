<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'name' => 'Admin Ikhwan',
            'email' => 'kajimu.jogja@gmail.com',
            'password' => Hash::make('rahasia')
        ]);
        $user1->roles()->attach(2);

        $user2 = User::create([
            'name' => 'Root',
            'email' => 'admin@kajimu.org',
            'password' => Hash::make('_kalam*haqiqi_')
        ]);
        $user2->roles()->attach(3);

    }
}
