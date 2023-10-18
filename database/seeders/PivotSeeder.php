<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\pivot_eventos_artistas;

class PivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 2;
        $pivot->artista_id = 1;
        $pivot->save();

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 2;
        $pivot->artista_id = 2;
        $pivot->save();

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 3;
        $pivot->artista_id = 3;
        $pivot->save();

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 4;
        $pivot->artista_id = 4;
        $pivot->save();

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 4;
        $pivot->artista_id = 5;
        $pivot->save();

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 4;
        $pivot->artista_id = 6;
        $pivot->save();

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 1;
        $pivot->artista_id = 7;
        $pivot->save();

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 1;
        $pivot->artista_id = 8;
        $pivot->save();

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 3;
        $pivot->artista_id = 9;
        $pivot->save();

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 3;
        $pivot->artista_id = 10;
        $pivot->save();

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 2;
        $pivot->artista_id =11;
        $pivot->save();

        $pivot = new pivot_eventos_artistas();
        $pivot->evento_id = 4;
        $pivot->artista_id = 12;
        $pivot->save();
    }
}
