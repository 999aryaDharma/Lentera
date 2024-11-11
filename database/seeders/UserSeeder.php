<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'role'  => 'admin',
            'name'  => 'Ngurah',
            'email'  => 'ngurah@gmail.com',
            'password'  => Hash::make('123'),
            'alamat'  => 'Gianyar',
            'telepon'  => '0812345678',
        ]);
    }
}
