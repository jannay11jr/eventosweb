<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = new Usuario();
        $usuario->nombre = 'Jannay';
        $usuario->dni = '48990987R';
        $usuario->email = 'jannay@gmail.com';
        $usuario->password = bcrypt('12345678.a');
        $usuario->rol_id = 1;
        $usuario->save();


        $usuario = new Usuario();
        $usuario->nombre = 'Juan';
        $usuario->dni = '47778908B';
        $usuario->email = 'juan@gmail.com';
        $usuario->password = bcrypt('kijuhnjy.1a');
        $usuario->rol_id = 2;
        $usuario->save();

    }
}
