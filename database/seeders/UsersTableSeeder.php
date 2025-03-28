<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'nombres' => 'Admin',
            'apellidos' => 'Principal',
            'telefono' => '9999999999',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'rol_id' => 1,
            'foto' => null,
        ]);

        //Consultores
        User::factory()->count(3)->create([
            'rol_id' => 2,
        ]);

        //Usuarios comunes
        User::factory()->count(10)->create([
            'rol_id' => 3,
        ]);
    }
}
