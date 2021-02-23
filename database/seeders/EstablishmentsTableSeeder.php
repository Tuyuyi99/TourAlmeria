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

        DB::table('establishments')->insert([
            'name' => 'La Ruta Cafe - Bar',
            'description' => 'Café-bar especializado sobretodo en tapas de pescado.',
            'address' => 'Calle Lentisco, 15, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.551094300848!2d-2.4481516578752163!3d36.83416234555108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x17df1d62f5dd3111!2sLa%20Ruta%20Cafe%20-%20Bar!5e0!3m2!1ses!2ses!4v1614090530175!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Terraza El Kinto',
            'description' => 'Terraza con buenas tapas y atención del personal.',
            'address' => 'Plaza de Alcalá, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.558191854377!2d-2.4482282107242836!3d36.83401937994945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe0fe73ab1c31df0a!2sTerraza%20El%20Kinto!5e0!3m2!1ses!2ses!4v1614090777704!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        
        DB::table('establishments')->insert([
            'name' => 'Bar La Barquilla',
            'description' => 'Bar económico y especializado en pescado, con variedad de cerveza.',
            'address' => 'Calle Retama, 3, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.558191854377!2d-2.4482282107242836!3d36.83401937994945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1cf5dde0e8a79d6c!2sBAR%20LA%20BARQUILLA!5e0!3m2!1ses!2ses!4v1614090610753!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        
        DB::table('establishments')->insert([
            'name' => 'Café Bar Hermoso',
            'description' => 'Cafetería con terraza y tapas.',
            'address' => 'Calle Úbeda, 73, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.8131899265013!2d-2.44739888819273!3d36.82888265286233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb0bd7145c9b87745!2sCaf%C3%A9%20Bar%20Hermoso!5e0!3m2!1ses!2ses!4v1614090857936!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Meson el Zagal',
            'description' => 'Mesón con variedad de tapas para todos los gustos.',
            'address' => 'Calle Mejorana, 2, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.5825262448093!2d-2.44779441124624!3d36.83352921014417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8a047e7c233f520d!2sMeson%20el%20Zagal!5e0!3m2!1ses!2ses!4v1614090943139!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'La Marquesina Terraza',
            'description' => 'Terraza con tapas bastante grandes y variadas.',
            'address' => 'Parque de las Familias, Calle Argentinita, s/n, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.94173624082!2d-2.447829904510456!3d36.82629295961001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1d7bb64aa7cb9f08!2sLa%20Marquesina%20Terraza!5e0!3m2!1ses!2ses!4v1614091035246!5m2!1ses!2ses"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'La Cabaña del Tío Tom',
            'description' => 'Tapas, raciones y platos tradicionales españoles en una bulliciosa y sobria taberna con terraza frente al mar.',
            'address' => 'Calle Joaquín Vázquez, 2, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.890230895605!2d-2.4514121953683716!3d36.827330604743395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9df0d227d347%3A0x3ccd219853e82132!2sLa%20Caba%C3%B1a%20del%20T%C3%ADo%20Tom!5e0!3m2!1ses!2ses!4v1614091199495!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Kebab Tiptop Pizzería',
            'description' => 'Comida de calidad con buen trato del personal.',
            'address' => 'Av. de Cabo de Gata, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1342.8033011369723!2d-2.4469414010570345!3d36.82469039052646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb20b8fe839a9a6d9!2sKebab%20Tiptop%20Pizzer%C3%ADa!5e0!3m2!1ses!2ses!4v1614091316219!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Charros',
            'description' => 'Sitio histórico imprescindible.',
            'address' => 'Av. de Cabo de Gata, 385, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.3628875423396!2d-2.4377996015730043!3d36.81780735285224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9dbeb1452923%3A0xc0a0e58b9e4b5f91!2sCharros!5e0!3m2!1ses!2ses!4v1614091396051!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Buono',
            'description' => 'Pizzería con agradable ambiente cerca del paseo marítimo y la playa.',
            'address' => 'Calle San Miguel, 2, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.8184691662254!2d-2.455021004474268!3d36.82877630040931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9df72532f371%3A0x4cd21a0c982158f6!2sBuono!5e0!3m2!1ses!2ses!4v1614091586788!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'VIPS',
            'description' => 'Platos para comidas informales y menú en cadena de cafeterías con horario amplio, tienda de comida y revistas.',
            'address' => 'Calle Canónigo Molina Alonso, 8, 04004 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.6090899147785!2d-2.4594511034687563!3d36.832994129370036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1f30749568d70bf0!2sVIPS!5e0!3m2!1ses!2ses!4v1614091714671!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Vintage54',
            'description' => 'Cafetería-bar con tapas veganas y raciones.',
            'address' => 'Av. Federico García Lorca, 54, 04005 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.245706525601!2d-2.46059528719264!3d36.836591111595595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9dff6943ee81%3A0x6c0b7f5f9f02ae68!2sVintage54!5e0!3m2!1ses!2ses!4v1614091868512!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Chester Café',
            'description' => 'Cafetería con desayunos, tapas y meriendas.',
            'address' => 'Av. de la Estación, 2, 04005 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d798.2991362428075!2d-2.4600504172214346!3d36.83776864904035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9dff50eb4fa3%3A0x3f5fda823ecd8822!2sChester%20Caf%C3%A9!5e0!3m2!1ses!2ses!4v1614091940201!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'El Chilecito',
            'description' => 'Restaurante con comida típica mexicana.',
            'address' => 'Av. Federico García Lorca, 117, 04004 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6385.974391134717!2d-2.4550393384143985!3d36.84278270903358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x776728bdb61dc8ed!2sEl%20Chilecito!5e0!3m2!1ses!2ses!4v1614094775067!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Bar La Lupe',
            'description' => 'Bar en el que ofrecen distintas comidas mexicanas con gran variedad.',
            'address' => 'Calle Trajano, 04001 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6386.507840234494!2d-2.4643305104419824!3d36.83639437317478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc6445e2aea6cb97!2sBar%20La%20Lupe!5e0!3m2!1ses!2ses!4v1614094905377!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'El Rincón de Basi',
            'description' => 'Clásica taberna-restaurante con lámparas de hierro forjado para tapas y raciones de cocina tradicional.',
            'address' => 'Calle Gral. Segura, 12, 04004 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4515.894288679269!2d-2.462483887358533!3d36.837219432194146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xec1d598cd0a8d0b5!2sEl%20Rinc%C3%B3n%20de%20Basi%20Centro!5e0!3m2!1ses!2ses!4v1614095078897!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'La Hormiguita',
            'description' => 'Bar Clasico en Almería, terraza perfecta para unas cervezas y unas tapas de pescado.',
            'address' => 'Parque de Nicolás Salmerón, Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.2992732674184!2d-2.464745791952106!3d36.835308022538676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd70760439e2e531%3A0xd31d1266e28101c9!2sLa%20Hormiguita!5e0!3m2!1ses!2ses!4v1614095272010!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '1'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'King Sushi',
            'description' => 'Restaurante Japonés con gran variedad de Sushi en relación a calidad-precio y bebidas de importación.',
            'address' => 'Av. de la Estación, 23, 04005 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.197820737553!2d-2.4608083091182427!3d36.83773809177759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9df8d2cfda9f%3A0x16a068edd733a5fc!2sKing%20Sushi!5e0!3m2!1ses!2ses!4v1614095708358!5m2!1ses!2ses" 
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

        DB::table('establishments')->insert([
            'name' => 'Hotel La Perla',
            'description' => 'Este hotel sin pretensiones ubicado en un edificio modesto 
            y situado a 7 minutos a pie de la catedral de Almería se encuentra a 1,3 km de la alcazaba de Almería y a 3,2 km del puerto de Almería.
            Cuenta con 2 estrellas.',
            'address' => 'Plaza del Carmen, 7, 04003 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.246263781523!2d-2.465794356502464!3d36.840302079299164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd707600ae2477a1%3A0xd248623f1d46dda3!2sHotel%20la%20Perla!5e0!3m2!1ses!2ses!4v1614095935480!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Murallas de Jayrán Hotel Boutique',
            'description' => 'Basada en turismo, ocio y facilidad de desplazamiento.',
            'address' => 'Calle Antonio Vico, 21, 04003 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3797.246263781523!2d-2.465794356502464!3d36.840302079299164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7077b6a01944df%3A0xdfc01d01e8597d57!2sMurallas%20de%20Jayr%C3%A1n%20Hotel%20Boutique!5e0!3m2!1ses!2ses!4v1614096058874!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Los Molinos suites',
            'description' => 'Este informal hotel económico se encuentra en una calle arbolada de una zona residencial, 
            a 10 minutos a pie del río Andarax y a 4 km de la estación de tren 
            y a 5 de la catedral de Almería, que data del siglo XVI.',
            'address' => 'Calle Pintor Zabaleta, 04009 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5369.659757987428!2d-2.4403925037105996!3d36.846815599564884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9e73c5705839%3A0x7ed9cb925557df89!2sLos%20Molinos%20suites!5e0!3m2!1ses!2ses!4v1614096250540!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Sercotel Gran Fama',
            'description' => 'Este hotel sin pretensiones se encuentra a 2 km de la estación de tren de Almería 
            y a 3 de la animada playa del Zapillo y de la Alcazaba, que data del siglo X. Se trata de un hotel de 4 estrellas.',
            'address' => 'Av. del Mediterráneo, 311, 04006 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5369.778627149383!2d-2.4500023477794657!3d36.845122989562974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9e0e68cb73e3%3A0x1762d08521f4c04e!2sSercotel%20Gran%20Fama!5e0!3m2!1ses!2ses!4v1614096395486!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Elba Almería Business & Convention Hotel',
            'description' => 'Este hotel de negocios se encuentra a 3 km de la estación de tren 
            y de la Catedral de Almería, y a 4 de la playa del Zapillo. Tiene categoría de 4 estrellas.',
            'address' => 'Avenida del Mediterráneo con, Calle Costa Balear, S/N, 04009 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5369.094376507872!2d-2.4457794505314103!3d36.854865305429655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9de61ab2c34b%3A0xe610725d6221eae!2sElba%20Almer%C3%ADa%20Business%20%26%20Convention%20Hotel!5e0!3m2!1ses!2ses!4v1614096476955!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Avenida Hotel Almería',
            'description' => 'Este sencillo hotel se encuentra en una concurrida calle arbolada con tiendas y restaurantes, 
            a 2 km de la estación de tren de Almería, a 3 km de la playa más cercana y a 4 km de la catedral, que data del siglo XVI. Tiene 4 estrellas.',
            'address' => 'Av. del Mediterráneo, 281, 04009 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5369.7279864890115!2d-2.4500282104299216!3d36.84584408371902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9e0e11d82bd1%3A0xdd846941c34bc4ff!2sAvenida%20Hotel%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1614096566557!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '2'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Hotel Catedral Almería',
            'description' => 'Este hotel boutique elegante con vistas a la catedral de Almería y la plaza de la Catedral data de 1850 
            y se encuentra a 14 minutos a pie de la alcazaba de Almería, del siglo X. Es de 4 estrellas.',
            'address' => 'Plaza de la Catedral, 8, 04002 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5370.40021590185!2d-2.46637064783253!3d36.83627093288148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd70760693a75ad7%3A0xa0959fb326e7cd9d!2sHotel%20Catedral%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1614096630541!5m2!1ses!2ses" 
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

        DB::table('establishments')->insert([
            'name' => 'Museo de la Catedral de la Encarnación',
            'description' => 'Abierto y reformado recientemente, ofrece una visión cultural e histórica de la catedral, 
            a la vez que expone algunos objetos relacionados con su historia.',
            'address' => 'Calle Velázquez, 18, 04002 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.230872414773!2d-2.467204308505954!3d36.83694642762431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf5b6b9c1423cff3c!2sMuseo%20de%20la%20Catedral%20de%20la%20Encarnaci%C3%B3n!5e0!3m2!1ses!2ses!4v1614097321981!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '3'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Casa del Poeta José Ángel Valente',
            'description' => 'Bonita casa con mobiliario original, obra del poeta y vistas a la Alcazaba',
            'address' => 'Calle José Ángel Valente, 7, 04002 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.1878532613637!2d-2.4668502569159885!3d36.837976833031554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2068e59f297d8aef!2sCasa%20del%20Poeta%20Jos%C3%A9%20%C3%81ngel%20Valente!5e0!3m2!1ses!2ses!4v1614097435120!5m2!1ses!2ses" 
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
            'name' => 'Auditorio Maestro Padilla',
            'description' => 'Auditorio con buena acústica inaugurado el séis de mayo de 1992.',
            'address' => 'Plaza Alfredo Kraus, 04007 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3798.1281176610623!2d-2.4451163269386336!3d36.82253784301653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9d4371444db3%3A0xa11132ac3f415c4e!2sAuditorio%20Maestro%20Padilla!5e0!3m2!1ses!2ses!4v1614091517965!5m2!1ses!2ses" 
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

        DB::table('establishments')->insert([
            'name' => 'IES Celia Viñas',
            'description' => 'Instituto Histórico Educativo Andaluz, Centro bilingüe, dedicado a Celia Viñas Olivella, escritora de poesías infantiles
            la cual estuvo en el propio centro estudiando. <a href="https://iescelia.org/celia360/">Puedes visitarlo aquí</a>',
            'address' => 'Calle Javier Sanz, 15, 04004 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d798.2991362428075!2d-2.4600504172214346!3d36.83776864904035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe791fe44a9d51b98!2sIES%20Celia%20Vi%C3%B1as!5e0!3m2!1ses!2ses!4v1614092161177!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        
        DB::table('establishments')->insert([
            'name' => 'Mirador de la Rambla de Almería',
            'description' => 'Plaza agradable para sentarse, charlar y jugar, con buena iluminación y buenas vistas.',
            'address' => '04004 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1596.6106885619236!2d-2.460944126467659!3d36.83717386330973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd707601f9ad3107%3A0x7c305d0392e12f7f!2sMirador%20de%20la%20Rambla%20de%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1614092556117!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Puerto de Almería',
            'description' => 'Puerto historico de Almería, donde entre los años 1908 y 1936 se terminan los muelles y se inicia el puerto pesquero.',
            'address' => 'Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2258.0589309154057!2d-2.466355570709073!3d36.833432630782674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd707605abb03c37%3A0x4c0716df3dff173!2sPuerto%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1614094168039!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Cerro de San Cristóbal',
            'description' => 'Cerro con vistas a toda la ciudad, y accesible.',
            'address' => 'Camino San Cristóbal, 24, 04003 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9031.681567562277!2d-2.469453018369378!3d36.838125629317794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7076078852d3b7%3A0x516f9dd15a8c212c!2sCerro%20San%20Crist%C3%B3bal!5e0!3m2!1ses!2ses!4v1614094223793!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Puerta de Purchena',
            'description' => 'Lugar de interés histórico, donde puedes pasear y pasar un buen rato.',
            'address' => 'Puerta de Purchena, 33, 04003 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9031.394767699325!2d-2.4608651765167973!3d36.840554258508384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x247d2b2dc8cc9948!2sPuerta%20de%20Purchena!5e0!3m2!1ses!2ses!4v1614094314078!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Plaza de Toros de Almería',
            'description' => 'Sitio emblemático e histórico, con bares cercanos para saborear las tapas de la ciudad.',
            'address' => '04008, Circunvalación Plaza de Toros, 29, 04008 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9031.36620065852!2d-2.4572899602579517!3d36.840796157477065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7075ff3f896c89%3A0x5b19246c032cad36!2sPlaza%20de%20Toros%20de%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1614094389022!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Recinto Ferial de Almería',
            'description' => 'Lugar muy amplio para varios espectáculos de la ciudad, como conciertos o la propia feria.',
            'address' => '04007 Vega de Aca, Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9032.160620786117!2d-2.4392949418177388!3d36.83406868684063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaa37b222325669ec!2sRecinto%20Ferial%20de%20Almer%C3%ADa!5e0!3m2!1ses!2ses!4v1614094567401!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Anfiteatro Parque Nicolas Salmerón',
            'description' => 'Parque con más de un siglo de antigüedad en Almería, con extensa vegetación y lugares de ocio.',
            'address' => 'Parque de Nicolás Salmerón, 12, 04002 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.3516117492577!2d-2.464016231100055!3d36.834054317053564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3dba4742215a830c!2sAnfiteatro%20Parque%20Nicolas%20Salmer%C3%B3n!5e0!3m2!1ses!2ses!4v1614095529582!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Cable Francés',
            'description' => 'Antiguo cargadero de minerales Almeriense construído en 1920 el cual se encuentra actualmente en desuso y sin acceso peatonal.',
            'address' => 'Paseo Marítimo Carmen de Burgos, 04007 Verseg, Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5370.851000795252!2d-2.4607349868196793!3d36.82985015476375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd7a9df6350ca94b%3A0xf2c89b4c904f9445!2sCable%20Franc%C3%A9s!5e0!3m2!1ses!2ses!4v1614096950440!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Mirador del Muelle de Levante',
            'description' => 'Lugar perfecto para poder divisar diferentes lugares de Almería.',
            'address' => '04001 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5370.830722920736!2d-2.465011338876509!3d36.83013900436282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd70761b17a1e7f9%3A0x8c7e97fb7c778887!2sMirador%20del%20Muelle%20de%20Levante!5e0!3m2!1ses!2ses!4v1614097005830!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Plaza de las Velas',
            'description' => 'Punto de inicio a la rambla de Almería, donde se encuentran bastantes monumentos, en pleno centro de la ciudad.',
            'address' => 'Calle Belén, 04004 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.3189299983096!2d-2.4648608843661353!3d36.83483717344816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd70760253fd4bb3%3A0x6e1ec4cb7cdcb515!2sPlaza%20de%20las%20Velas!5e0!3m2!1ses!2ses!4v1614097113671!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );

        DB::table('establishments')->insert([
            'name' => 'Plaza José Fernández Torres "Tomatito"',
            'description' => 'Plaza en honor a José Fernández "Tomatito", guitarrista almeriense de fama mundial con seis Grammys.',
            'address' => 'Calle Tenor Iribarne, 24, 04001 Almería',
            'google_maps' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.0488670949226!2d-2.464907943362451!3d36.84130569503703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1bc3cdd5afe492d!2sPlaza%20Jos%C3%A9%20Fern%C3%A1ndez%20Torres%20%22Tomatito%22!5e0!3m2!1ses!2ses!4v1614097200396!5m2!1ses!2ses" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'outstanding' => 'no',
            'id_category' => '4'
        ]
        );
    }
}
