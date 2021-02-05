<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin= User::create([
            'name'=>'admin1',
            'email'=>'admin1@gmail.com',
            'password'=>Hash::make('1234'),
            'fullacces'=>'yes',
            'estado'=>0,
        ]);
    }
}
