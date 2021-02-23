<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Establishment;
use Illuminate\Support\Facades\DB;

class EstablishmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Establishment::truncate();


        //////////////////////////////////////////// Bares

        DB::table('establishments')->insert([
            'name' => 'Bar Barro',
            'description' => 'Bar apartado del centro con mucha variedad de tapas.',
            'address' => 'Av. de Madrid, 1, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6386.924080054876!2d-2.4463177792258315!3d36.83140902008599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x97cb4a00499be431!2sBar%20Barro!5e0!3m2!1ses!2ses!4v1614079356443!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Jauja taberna',
            'description' => 'Bar de tapas con especialidad en tapas argentinas.',
            'address' => 'Calle Lentisco, 2, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d798.3315810964982!2d-2.446295951531389!3d36.834660050048626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9de4333f5561%3A0x8dca197cb9889215!2sJauja%20taberna!5e0!3m2!1ses!2ses!4v1614079602056!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Aladdin',
            'description' => 'Tetería-cafetería con buen menaje y decoración, con un té árabe muy
            bueno en conjunto con unas pastas.',
            'address' => 'Plaza José María Artero, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2258.0702148058767!2d-2.445934001742003!3d36.83305036728107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1341f431633ec1ec!2sAladdin!5e0!3m2!1ses!2ses!4v1614079672603!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        //////////////////////////////////////////// Hoteles

        DB::table('establishments')->insert([
            'name' => 'Hotel Embajador',
            'description' => 'Hotel sencillo, situado enfrente del museo de Almería, se encuentra a 6 minutos a pie de la estación de tren de Almería 
            y a 15 minutos a pie de la playa de la misma ciudad. Se trata de un hotel de 2 estrellas.',
            'address' => 'Calle Calz. de Castro, 4, 04006 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25547.215921721618!2d-2.4611697104970327!3d36.832847526801714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9dfc010ca52d%3A0xd16c0194d075f1e6!2sHotel%20Embajador!5e0!3m2!1ses!2ses!4v1613987614748!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

            DB::table('establishments')->insert([
            'name' => 'Hostal Estación',
            'description' => 'Este hostal, económico y sencillo, se encuentra a 5 minutos a pie del museo de Almería, 
            a 7 minutos a pie de la estación de tren y a 16 minutos a pie de la playa del Zapillo. Se trata de un hostal de 1 estrella.',
            'address' => 'Calle Calz. de Castro, 37, 04006 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25547.215921721618!2d-2.4611697104970327!3d36.832847526801714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9dfc868b6e17%3A0xb5b753229902252e!2sHostal%20Estaci%C3%B3n!5e0!3m2!1ses!2ses!4v1613987842133!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Albergue Inturjoven Almería',
            'description' => 'Sencillo albergue que se halla a 6 minutos a pie de la playa, a 3 km de la catedral de Almería y a 4 km de la Alcazaba. 
            Ideal para tus vacaciones de verano. Se trata de un albergue de 2 estrellas.',
            'address' => 'Calle Isla de Fuerteventura, S/N, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25547.215921721618!2d-2.4611697104970327!3d36.832847526801714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9deefe488459%3A0x8fe8885b26a148a2!2sAlbergue%20Inturjoven%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1613988001109!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Hostal Delfín Verde',
            'description' => 'Este discreto hostal está frente a la playa mediterránea de Almería, 
            a 13 minutos a pie de la estación de tren y a 3 km de la Alcazaba, una fortaleza situada en una colina. 
            Se trata de un hostal de 2 estrellas, totalmente económico.',
            'address' => 'Calle García Cañas, 2, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25547.170036757714!2d-2.461169710497031!3d36.832984922353674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9dec4fa71fa1%3A0x3fd3010c1f1d4a45!2sHostal%20Delf%C3%ADn%20Verde!5e0!3m2!1ses!2ses!4v1613988276587!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Torreluz Senior',
            'description' => 'Hotel que se encuentra en una calle peatonal estrecha con tiendas y restaurantes, 
            a 6 minutos a pie de la catedral gótica y renacentista de Almería, del siglo XVI, y a 2 km de la estación de tren. Es un hotel de 3 estrellas.',
            'address' => 'Calle Tenor Iribarne, 15, 04001 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25547.170036757714!2d-2.461169710497031!3d36.832984922353674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd707600c7ada381%3A0xb740f812aa582e00!2sTorreluz%20Senior!5e0!3m2!1ses!2ses!4v1613988408832!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'AIRE Hotel & Ancient Baths ALMERÍA',
            'description' => 'Situado en un edificio del siglo XIX, este elegante hotel boutique está a 4 minutos a pie de la catedral de Almería y 
            a 11 minutos de la Alcazaba de Almería. Se trata de un hotel de 4 estrellas.',
            'address' => 'Plaza de la Constitución, 4, 04003 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12772.663426100267!2d-2.4580809826448426!3d36.838503694744695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd707607058f451d%3A0x46bf0d76ce017ffc!2sAIRE%20Hotel%20%26%20Ancient%20Baths%20ALMER%C3%8DA!5e0!3m2!1ses!2ses!4v1613988489667!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Ohtels Gran Hotel Almería',
            'description' => 'Este sofisticado hotel, con vistas al puerto de Almería, 
            se encuentra a 11 minutos a pie de la estación de tren, a 14 de la playa del Zapillo y a 2 km de la Alcazaba. Es un hotel de 4 estrellas.',
            'address' => 'Calle Reina Regente, 8, 04001 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12772.74372917807!2d-2.4608704800203305!3d36.83802284392791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd707603080a2fcb%3A0xd132796f2610de99!2sOhtels%20Gran%20Hotel%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1613988563480!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'AC Hotel Almeria',
            'description' => 'Este hotel moderno, ubicado en el casco antiguo de la ciudad, 
            está a 15 minutos a pie de la Alcazaba de Almería y a 4,7 km del Puerto de Almería. Es un hotel de 4 estrellas.',
            'address' => 'Plaza De Las Flores, 5, 04001 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12772.74372917807!2d-2.4608704800203305!3d36.83802284392791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd707600cfb433b7%3A0x52850ec5d0f43ec3!2sAC%20Hotel%20Almeria!5e0!3m2!1ses!2ses!4v1613988616290!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Hostal Maribel',
            'description' => 'Este hostal, de estilo informal y regentado por una familia, está en una calle arbolada, 
            a 2 km de la estación de tren de Almería y a 3 de la playa más cercana de la Costa del Sol y del complejo monumental de la Alcazaba, 
            una fortaleza musulmana medieval. Se trata de un hostal de 1 estrella',
            'address' => 'Av. Federico García Lorca, 153, 04008 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12772.74372917807!2d-2.4608704800203305!3d36.83802284392791!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9e004ecb445b%3A0x3d08aadd25e2aa0d!2sHOSTAL%20MARIBEL!5e0!3m2!1ses!2ses!4v1613988711708!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Hotel Sevilla',
            'description' => 'Este hotel modesto está a 8 minutos a pie de la catedral de Almería, 
            a 12 minutos del Museo de Almería y a 15 minutos de la estación de tren de la misma ciudad. Es de 1 estrella.',
            'address' => 'Calle Granada, 25, 04003 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12772.533719226612!2d-2.4604520733568114!3d36.83928036164482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7076007f63f727%3A0xa4de73cfc482dda4!2sHotel%20Sevilla!5e0!3m2!1ses!2ses!4v1613988803665!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'B & BUTIK Almeria Centro',
            'description' => 'Este hotel está basado en el turismo, ocio y facilidad de desplazamiento, 
            gracias a que se encuentra cerca del centro de la ciudad. Cuenta con 4 estrellas.',
            'address' => 'Calle San Diego de Alcalá, 9, 04003 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10740.42116803531!2d-2.4648115006341134!3d36.83897167748799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7075fe6005aaab%3A0x141346536dc496c5!2sB%20%26%20BUTIK%20Almeria%20Centro!5e0!3m2!1ses!2ses!4v1613988900722!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        //////////////////////////////////////////// Museos

        DB::table('establishments')->insert([
            'name' => 'Museo de Almería',
            'description' => 'Moderno museo con una colección diversa de objetos, 
            armas y cerámica de la Prehistoria y el Neolítico.',
            'address' => 'Entrada por, Carretera de Ronda, Calle Hermanos Pinzón, 91, 04005 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12772.65118243391!2d-2.4643653631210096!3d36.83857700873357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf95c63b757bae759!2sMuseo%20de%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1614073892335!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '3'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Museo de Arte Doña Pakyta',
            'description' => 'Museo de arte almeriense de los siglos XIX y XX, 
            situado en un edificio de estilo vasco de los años 20.',
            'address' => 'Plaza de Emilio Pérez, 2, 04001 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12773.46566738391!2d-2.4667257070541146!3d36.83369967209405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x323c0c9614ebdbcc!2sMuseo%20de%20Arte%20Do%C3%B1a%20Pakyta!5e0!3m2!1ses!2ses!4v1614074029404!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '3'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Museo de Arte de Almería Espacio 2',
            'description' => 'Museo de arte almeriense de los siglos XIX y XX, 
            situado en un edificio de estilo vasco de los años 20.',
            'address' => 'C/ Jardín de Medina, Autovía del Aeropuerto, 04006 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12773.75818375218!2d-2.463335394859291!3d36.8319478766891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d77e660f3e17346!2sMuseo%20de%20Arte%20de%20Almer%C3%ADa%20Espacio%202!5e0!3m2!1ses!2ses!4v1614077431544!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '3'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Museo de la Guitarra',
            'description' => 'Museo sobre el arte y la historia de la guitarra 
            que alberga una sección dedicada al lutier Antonio de Torres.',
            'address' => 'Ronda del Beato Diego Ventaja, S/N, 04002 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.207411459381!2d-2.46957918558683!3d36.83750837329994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd70760683847261%3A0x9e072e2c087f1e32!2sMuseo%20de%20la%20Guitarra!5e0!3m2!1ses!2ses!4v1614077930790!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '3'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Casa del Cine',
            'description' => 'Vivienda del barrio de Villablanca y 
            conocida como Cortijo Romero o casa de Santa Isabel.',
            'address' => 'Camino Romero, 1, 04009 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12771.011602551824!2d-2.4484585112483!3d36.84839353688837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd049ed2c21fb20b6!2sCasa%20del%20Cine!5e0!3m2!1ses!2ses!4v1614078834654!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '3'
        ]
        );

        //////////////////////////////////////////// Turismo
        
        DB::table('establishments')->insert([
            'name' => 'Conjunto Monumental de la Alcazaba de Almería',
            'description' => 'es uno de los conjuntos monumentales y arqueológicos andalusíes más importantes de la península ibérica.
            Fue construido en la segunda mitad del siglo X al siglo XVI por Abderramán III.',
            'address' => 'Calle Almanzor, s/n, 04002 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25547.445345573782!2d-2.4592814353505483!3d36.83216054534007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdf577194575ccf6c!2sConjunto%20Monumental%20de%20la%20Alcazaba%20de%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1613990111179!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Anfiteatro de la Rambla',
            'description' => 'Anfiteatro al aire libre situado en el centro de la ciudad. 
            En él, se puede disfrutar de numerosos conciertos, actuaciones y representaciones teatrales.
            Fue construido entre los años 1994 y 2000, por Antonio Góngora.',
            'address' => 'Av. Federico García Lorca, s/n, 04008 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d408942.5963869925!2d-2.809920752104969!3d36.79781021522752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x88b826d6cc22ecef!2sAnfiteatro%20de%20la%20Rambla!5e0!3m2!1ses!2ses!4v1613990238941!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Parque de las Familias',
            'description' => 'Es un parque que se encuentra abierto al público desde el 14 de noviembre de 2014, siendo 
            el recinto destinado a uso exclusivamente infantil más grande de Andalucía.',
            'address' => 'Av. del Mediterráneo, 71, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.467885832382!2d-2.44779038470923!3d36.8312689799422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9def4f725e2d%3A0x2d4980b44bf9589!2sParque%20de%20las%20Familias!5e0!3m2!1ses!2ses!4v1613990529350!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Playa de San Miguel',
            'description' => 'Es un parque que se encuentra abierto al público desde el 14 de noviembre de 2014, siendo 
            el recinto destinado a uso exclusivamente infantil más grande de Andalucía.',
            'address' => 'El Zapillo, Almería.',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.566677950673!2d-2.4574723847092925!3d36.82890227994255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9df12c51b263%3A0x5893f6c75268cdfa!2sPlaya%20de%20San%20Miguel!5e0!3m2!1ses!2ses!4v1613990673277!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'El Cable Inglés',
            'description' => 'También conocido como muelle El Alquife, es un antiguo cargadero de mineral situado en Almería, España, 
            de la sociedad The Alquife Mines and Railway Company Limited, ejemplo de la arquitectura del hierro. 
            Su construcción concluyó en 1904, y unía la estación con el puerto.',
            'address' => '04007, Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.566677950673!2d-2.4574723847092925!3d36.82890227994255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9df12c51b263%3A0x5893f6c75268cdfa!2sPlaya%20de%20San%20Miguel!5e0!3m2!1ses!2ses!4v1613990673277!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Catedral de la Encarnación de Almería',
            'description' => 'Catedral católica de estilos gótico y renacentista, 
            que data del siglo XVI, con rasgos de fortaleza defensiva.',
            'address' => 'Plaza de la Catedral, 8, 04001 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.1796431875323!2d-2.4695794847090333!3d36.83817347994076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd70760693a75ad7%3A0x318a826205f1c4f1!2sCatedral%20de%20la%20Encarnaci%C3%B3n%20de%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1614072487742!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Monumento a Víctimas Almerienses de Mauthausen',
            'description' => 'Monumento dedicado a las víctimas almerienses del holocausto nazi. 
            Fue inaugurado en 1999 situado junto a El Cable Inglés.',
            'address' => 'Playa de las Almadrabillas, 10, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d798.35429177379!2d-2.463116364111697!3d36.83248396579306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd12e73087f4bb65!2sMonumento%20a%20V%C3%ADctimas%20Almerienses%20de%20Mauthausen!5e0!3m2!1ses!2ses!4v1614073170622!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Parque de las Almadrabillas',
            'description' => 'Monumento con columnas en amplio parque con zona verde que organiza exposiciones temporales.',
            'address' => 'Calle Matadero, 3, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1596.7111600828114!2d-2.462469951696422!3d36.83236052368041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe4e1e467936c3a8d!2sParque%20de%20las%20Almadrabillas!5e0!3m2!1ses!2ses!4v1614073251586!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Parque del Andarax',
            'description' => 'Parque, extenso, bonito y con un merendero perfecto para celebraciones.',
            'address' => 'Camino Jaúl Bajo, 230, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11380.267138510815!2d-2.4408291402766467!3d36.83099150424392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x991991e40626be8e!2sParque%20del%20Andarax!5e0!3m2!1ses!2ses!4v1614073448108!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Refugios de la Guerra Civil Española de Almería',
            'description' => 'Sistema subterráneo de refugios antiaéreos de hormigón 
            usado en la Guerra Civil española con visitas guiadas.',
            'address' => 'Plaza Manuel Pérez García, 1, 04003 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12772.221347389763!2d-2.4674776984039357!3d36.84115074352159!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7076004f36258f%3A0x5d4072df3145bbe5!2sRefugios%20de%20la%20Guerra%20Civil%20Espa%C3%B1ola%20de%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1614073533768!5m2!1ses!2ses"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Plaza Vieja',
            'description' => 'Plaza amplia para realizar todo tipo de actos y conciertos.',
            'address' => 'Plaza de la Administración Vieja, 8, 04003 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.0885706646545!2d-2.469469484709039!3d36.8403547799402!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd707606fcfc1349%3A0x99d0801d1c6b15c2!2sPlaza%20Vieja!5e0!3m2!1ses!2ses!4v1614073676373!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Pescaíto',
            'description' => 'Escultura de la Ballena, que espontáneamente, se ha convertido 
            en lugar de homenaje y recuerdo del niño Gabriel Cruz "Pescaíto", tristemente asesinado.',
            'address' => '04004 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6386.875999509878!2d-2.4639080358058383!3d36.83198491599197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa942ad4dcba8821a!2sPescaito!5e0!3m2!1ses!2ses!4v1614078279460!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Casa de las Mariposas',
            'description' => 'Emblemático edificio de cuatro plantas 
            de 1909 diseñado por el arquitecto español Trinidad Cuartara.',
            'address' => 'Puerta de Purchena, 6, 04003 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12773.403559657389!2d-2.4637792891413657!3d36.834071607991156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x92f3280597129be6!2sCasa%20de%20las%20Mariposas!5e0!3m2!1ses!2ses!4v1614078624036!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );
    }
}
