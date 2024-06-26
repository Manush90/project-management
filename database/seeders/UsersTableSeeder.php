<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Mario Rossi',
            'email' => 'Mariuccio@mail.com',
            'password' => Hash::make('password'),
        ]);

        // Aggiungi altri utenti se necessario
    }
}
