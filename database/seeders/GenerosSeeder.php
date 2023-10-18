<?php

namespace Database\Seeders;

use App\Models\Genero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genero = new Genero();
        $genero ->nombre = "rock";
        $genero ->save();

        $genero = new Genero();
        $genero ->nombre = "pop";
        $genero ->save();

        $genero = new Genero();
        $genero ->nombre = "urbano";
        $genero ->save();

        $genero = new Genero();
        $genero ->nombre = "electronica";
        $genero ->save();

        $genero = new Genero();
        $genero ->nombre = "reggaeton";
        $genero ->save();
    }
}
