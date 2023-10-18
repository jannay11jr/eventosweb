<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Evento;

class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $evento = new Evento();
        $evento->nombre = "Zevra Festival";
        $evento->localizacion = "Cullera";
        $evento->descripcion = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas, las cuales contenian pasajes de Lorem Ipsum ";
        $evento->imagen = ('/img/eventos/zevra.jpg');
        $evento->fecha = '2024-06-30';
        $evento->media_publico = 30000;
        $evento->save();

        $evento = new Evento();
        $evento->nombre = "Medusa Festival";
        $evento->localizacion = "Cullera";
        $evento->descripcion = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas, las cuales contenian pasajes de Lorem Ipsum ";
        $evento->imagen = ('/img/eventos/medusa.jpg');
        $evento->fecha = '2024-10-12';
        $evento->media_publico = 80000;
        $evento->save();

        $evento = new Evento();
        $evento->nombre = "A Summer Story";
        $evento->localizacion = "Madrid";
        $evento->descripcion = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas, las cuales contenian pasajes de Lorem Ipsum ";
        $evento->imagen = ('/img/eventos/summer_story.jpg');
        $evento->fecha = '2024-06-15';
        $evento->media_publico = 20000;
        $evento->save();

        $evento = new Evento();
        $evento->nombre = "Boombastic Festival";
        $evento->localizacion = "Asturias";
        $evento->descripcion = "Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas, las cuales contenian pasajes de Lorem Ipsum ";
        $evento->imagen = ('/img/eventos/boombastic.jpg');
        $evento->fecha = '2024-9-22';
        $evento->media_publico = 40000;
        $evento->save();
    }
}
