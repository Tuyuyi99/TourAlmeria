<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        DB::table('categories')->insert([
            'name' => 'Bares y restaurantes'
        ]
        );

        DB::table('categories')->insert([
            'name' => 'Hoteles'
        ]
        );
        DB::table('categories')->insert([
            'name' => 'Museos'
        ]
        );

        DB::table('categories')->insert([
            'name' => 'Turismo'
        ]
        );
    }
}
