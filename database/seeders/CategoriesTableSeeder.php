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
            'name' => 'bares o restaurantes'
        ]);

        DB::table('categories')->insert([
            'name' => 'hoteles'
        ]
        );
        DB::table('categories')->insert([
            'name' => 'museos'
        ]
        );

        DB::table('categories')->insert([
            'name' => 'turismo'
        ]
        );
    }
}
