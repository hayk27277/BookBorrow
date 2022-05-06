<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        User::insert([
            [
                'name' => "Jon",
                'email' => 'reader@brs.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'is_librarian' => false,
                'remember_token' => Str::random(10),
            ],
            [
                'name' => "Angel",
                'email' => 'librarian@brs.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'is_librarian' => true,
                'remember_token' => Str::random(10),
            ]
        ]);
    }
}
