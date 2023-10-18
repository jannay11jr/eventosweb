<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cancion;

class CancionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cancion = new Cancion();
        $cancion->nombre ="Spaceman";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 1;
        $cancion->save();


        $cancion = new Cancion();
        $cancion->nombre ="Bad";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 2;
        $cancion->save();


        $cancion = new Cancion();
        $cancion->nombre ="Gravity";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 3;
        $cancion->save();


        $cancion = new Cancion();
        $cancion->nombre ="Drift";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 4;
        $cancion->save();


        $cancion = new Cancion();
        $cancion->nombre ="Corazón vacio";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 5;
        $cancion->save();


        $cancion = new Cancion();
        $cancion->nombre ="Discoteka";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 6;
        $cancion->save();


        $cancion = new Cancion();
        $cancion->nombre ="Rara vez";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 7;
        $cancion->save();


        $cancion = new Cancion();
        $cancion->nombre ="Farsante";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 8;
        $cancion->save();


        $cancion = new Cancion();
        $cancion->nombre ="Lala";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 9;
        $cancion->save();


        $cancion = new Cancion();
        $cancion->nombre ="Happier";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 10;
        $cancion->save();


        $cancion = new Cancion();
        $cancion->nombre ="Quedate";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 11;
        $cancion->save();

        $cancion = new Cancion();
        $cancion->nombre ="Los perros";
        $cancion->url = "jklasdlks";
        $cancion->artista_id = 12;
        $cancion->save();


    }
}
