<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itemData = [
            'email' => 'user@gmail.com',
            'name' => 'user',
            'password' => Hash::make('123456'),
        ];
        User::create($itemData);

    }
}
