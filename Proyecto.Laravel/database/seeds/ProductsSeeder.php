<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'name'=> 'Apart_550',
        	'description' => 'Cocina de 55cm. Cuenta con 4 hornallas y horno a gas.',
            'photo' => 'foto',
        	'price' => 19724.00,
        	'stock' => 100,
            'categories_id' => 1,

        ]);

        Product::create([
            'name'=> 'Apart_900',
            'description' => 'Cocina de 90cm. Cuenta con 6 hornallas y horno a gas.',
            'photo' => 'foto',
            'price' => 25642.00,
            'stock' => 90,
            'categories_id' => 1,
        ]);

        Product::create([
            'name'=> 'Country_550',
            'description' => 'Cocina de 55cm. Cuenta con 4 hornallas y horno a gas.',
            'photo' => 'foto',
            'price' => 24863.00,
            'stock' => 70,
            'categories_id' => 1,

        ]);

        Product::create([
            'name'=> 'Country_900',
            'description' => 'Cocina de 90cm. Cuenta con 6 hornallas y horno a gas.',
            'photo' => 'foto',
            'price' => 32321.00,
            'stock' => 112,
            'categories_id' => 1,

        ]);

        Product::create([
            'name'=> 'Folium_550',
            'description' => 'Cocina de 55cm. Cuenta con 4 hornallas y horno a gas.',
            'photo' => 'foto',
            'price' => 26520.00,
            'stock' => 120,
            'categories_id' => 1,

        ]);

        Product::create([
             'name'=> 'Folium_900',
            'description' => 'Cocina de 90cm. Cuenta con 6 hornallas y horno a gas.',
            'photo' => 'foto',
            'price' => 34476,
            'stock' => 100,
            'categories_id' => 1,

        ]);
    }
}