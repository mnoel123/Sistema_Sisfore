<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;




class SuperAdminSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'nom_usuario' => 'SuperAdm', // Asegúrate de que este campo coincida con el nombre de columna en tu base de datos
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('tu_contraseña'),
        ]);
    }
}

