<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usersData = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => bcrypt('password123'),
                'account_type' => 'Individual',
                'balance' => 100.00,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => bcrypt('password456'),
                'account_type' => 'Business.',
                'balance' => 50.00,
            ],
        ];
        foreach ($usersData as $userData) {
            User::create([
                'name' => $userData['name'],
                'email' =>$userData['email'],
                'password'=> $userData['password'],
                'account_type' => $userData['account_type'],
                'balance' =>$userData['balance'],
            ]);
        }
    }
}
