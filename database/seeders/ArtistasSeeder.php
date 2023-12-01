<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Artista;


class ArtistasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $artista = new Artista();
        $artista ->nombre = "Hardwell";
        $artista ->img = ('/img/artistas/hardwell.jpg');
        $artista->generos_id = 4;
        $artista->save();

        $artista = new Artista();
        $artista ->nombre = "David Guetta";
        $artista ->img = ('/img/artistas/david_guetta.jpg');
        $artista->generos_id = 4;
        $artista->save();

        $artista = new Artista();
        $artista ->nombre = "Boris Brechja";
        $artista ->img = ('/img/artistas/boris_brechja.png');
        $artista->generos_id = 4;
        $artista->save();

        $artista = new Artista();
        $artista ->nombre = "Amelie Lens";
        $artista ->img = ('/img/artistas/amelie.jpg');
        $artista->generos_id = 4;
        $artista->save();

        $artista = new Artista();
        $artista ->nombre = "Maria Becerra";
        $artista ->img = ('/img/artistas/maria_becerra.jpg');
        $artista->generos_id = 3;
        $artista->save();

        $artista = new Artista();
        $artista ->nombre = "Lola Indigo";
        $artista ->img = ('/img/artistas/lola_indigo.jpg');
        $artista->generos_id = 3;

        $artista->save();


        $artista = new Artista();
        $artista ->nombre = "Milo J";
        $artista ->img = ('/img/artistas/milo.jpg');
        $artista->generos_id = 3;
        $artista->save();

        $artista = new Artista();
        $artista ->nombre = "Ozuna";
        $artista ->img = ('/img/artistas/ozuna.jpg');
        $artista->generos_id = 5;
        $artista->save();

        $artista = new Artista();
        $artista ->nombre = "Myke Towers";
        $artista ->img = ('/img/artistas/myke_towers.jpg');
        $artista->generos_id = 5;
        $artista->save();

        $artista = new Artista();
        $artista ->nombre = "Marshmello";
        $artista ->img = ('/img/artistas/marshmello.jpg');
        $artista->generos_id = 4;
        $artista->save();


        $artista = new Artista();
        $artista ->nombre = "Quevedo";
        $artista ->img = ('/img/artistas/quevedo.jpg');
        $artista->generos_id = 3;
        $artista->save();


        $artista = new Artista();
        $artista ->nombre = "Andres Campo";
        $artista ->img = ('/img/artistas/andres_campo.jpg');
        $artista->generos_id = 4;
        $artista->save();


    }
}
