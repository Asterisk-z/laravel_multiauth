<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itemData = [
            'email' => 'staff@gmail.com',
            'name' => 'staff',
            'password' => Hash::make('123456'),
        ];
        Staff::create($itemData);

    }
}
