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
        $evento->descripcion = "Zevra Festival es un festival de música de varios géneros músicales que se celebra cada año en la playa de Cullera, municipio de Valencia, Comunidad Valenciana. Hay diferentes estilos como el pop, el rock, el indie, el reggae, el hip hop y sobre todo predomina lo urbano con un ambiente muy joven.";
        $evento->imagen = ('/img/eventos/zevra.jpg');
        $evento->fecha = '2024-06-30';
        $evento->media_publico = 30000;
        $evento->precio = 40;
        $evento->save();

        $evento = new Evento();
        $evento->nombre = "Medusa Festival";
        $evento->localizacion = "Cullera";
        $evento->descripcion = "Medusa Festival es un festival de música electrónica que se celebra cada año en la playa de Cullera, municipio de Valencia, Comunidad Valenciana. La primera edición se celebró en 2014 y, desde entonces, se ha convertido en uno de los festivales de música electrónica más importantes de España.

        El festival cuenta con una amplia programación de artistas de todo el mundo, que abarcan diferentes estilos de música electrónica, como el house, techno, trance, drum & bass, hardcore, etc.";
        $evento->imagen = ('/img/eventos/medusa.jpg');
        $evento->fecha = '2024-10-12';
        $evento->media_publico = 80000;
        $evento->precio = 60;
        $evento->save();

        $evento = new Evento();
        $evento->nombre = "A Summer Story";
        $evento->localizacion = "Madrid";
        $evento->descripcion = "A Summer Story es un festival de música electrónica que se celebra en Madrid, España. Es uno de los festivales de música electrónica más populares de España y Europa. El festival es conocido por sus grandes y entusiastas multitudes, su diversa programación musical y su producción espectacular. A Summer Story es un evento imprescindible para cualquier fan de la música electrónica.";
        $evento->imagen = ('/img/eventos/summer_story.jpg');
        $evento->fecha = '2024-06-15';
        $evento->media_publico = 20000;
        $evento->precio = 30;
        $evento->save();

        $evento = new Evento();
        $evento->nombre = "Boombastic Festival";
        $evento->localizacion = "Asturias";
        $evento->descripcion = "Boombastic Festival es un festival de música urbana que se celebra en diferentes lugares de España, como Madrid, Asturias, Canarias y Costa de Sol. El festival se caracteriza por su ambiente festivo, su amplia programación de artistas de diferentes estilos de música y su cartel lleno de artistas nacionales e internacionales en los que predomina la música pop y urbana.";
        $evento->imagen = ('/img/eventos/boombastic.jpg');
        $evento->fecha = '2024-9-22';
        $evento->media_publico = 40000;
        $evento->precio = 20;
        $evento->save();
    }
}
