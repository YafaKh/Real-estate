<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users=[
                [
                    'name' => 'Yafa',
                    'username' => 'yafa.kh',
                    'email' => 'yafa@gmail.com',
                    'password' => Hash::make('12345'),
                    'role' => 'admin',
                ],
                [
                    'name' => 'Yara',
                    'username' => 'yara.kh',
                    'email' => 'yara@gmail.com',
                    'password' => Hash::make('12345'),
                ],
                [
                    'name' => 'Huda',
                    'username' => 'huda.kh',
                    'email' => 'huda@gmail.com',
                    'password' => Hash::make('12345'),
                    'role' => 'agent',
                ] 
            ];

        foreach ($users as $key => $value) {
            User::create($value);
        } 
    }
}
