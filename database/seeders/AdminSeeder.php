<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itemData = [
            'email' => 'admin@gmail.com',
            'name' => 'admin',
            'password' => Hash::make('123456'),
        ];
        Admin::create($itemData);

    }
}
