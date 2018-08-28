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
            'photo' => "storage/images/Cocinas/capart550_pfp.png",
        	'price' => 19724.0,
        	'stock' => 100,
            'category_id' => 1,

        ]);

        Product::create([
            'name'=> 'Apart_900',
            'description' => 'Cocina de 90cm. Cuenta con 6 hornallas y horno a gas.',
            'photo' => "storage/images/Cocinas/capart550_pfp.png",
            'price' => 25642.0,
            'stock' => 90,
            'category_id' => 1,
        ]);

        Product::create([
            'name'=> 'Country_550',
            'description' => 'Cocina de 55cm. Cuenta con 4 hornallas y horno a gas.',
            'photo' => 'foto',
            'price' => 24863.0,
            'stock' => 70,
            'category_id' => 1,

        ]);

        Product::create([
            'name'=> 'Country_900',
            'description' => 'Cocina de 90cm. Cuenta con 6 hornallas y horno a gas.',
            'photo' => 'foto',
            'price' => 32321.0,
            'stock' => 112,
            'category_id' => 1,

        ]);

        Product::create([
            'name'=> 'Folium_550',
            'description' => 'Cocina de 55cm. Cuenta con 4 hornallas y horno a gas.',
            'photo' => 'foto',
            'price' => 26520.0,
            'stock' => 120,
            'category_id' => 1,

        ]);

        Product::create([
             'name'=> 'Folium_900',
            'description' => 'Cocina de 90cm. Cuenta con 6 hornallas y horno a gas.',
            'photo' => 'foto',
            'price' => 34476.0,
            'stock' => 100,
            'category_id' => 1,

        ]);

        Product::create([
             'name'=> 'Gama_700',
            'description' => 'Anafe de 70cm. Cuenta con 4 hornallas a gas.',
            'photo' => 'foto',
            'price' => 11603.0,
            'stock' => 100,
            'category_id' => 3,

        ]);
        Product::create([
             'name'=> 'Gama_1050',
            'description' => 'Anafe de 105cm. Cuenta con 6 hornallas a gas.',
            'photo' => 'foto',
            'price' => 14918.0,
            'stock' => 100,
            'category_id' => 3,

        ]);
        Product::create([
             'name'=> 'Country_600',
            'description' => 'Campana de 60cm, 3 velocidades, motor silencioso.',
            'photo' => 'foto',
            'price' => 11603.0,
            'stock' => 100,
            'category_id' => 4,

        ]);
        Product::create([
             'name'=> 'Country_900',
            'description' => 'Campana de 90cm, 3 velocidades, motor silencioso.',
            'photo' => 'foto',
            'price' => 13702.0,
            'stock' => 100,
            'category_id' => 4,

        ]);
        Product::create([
             'name'=> 'Folium_600',
            'description' => 'Campana de 60cm, 3 velocidades, motor silencioso.',
            'photo' => 'foto',
            'price' => 11603.0,
            'stock' => 100,
            'category_id' => 4,

        ]);
        Product::create([
             'name'=> 'Folium_900',
            'description' => 'Campana de 90cm, 3 velocidades, motor silencioso.',
            'photo' => 'foto',
            'price' => 13702.0,
            'stock' => 100,
            'category_id' => 4,

        ]);
        Product::create([
             'name'=> 'Country_550',
            'description' => 'Horno a gas, 55cm.',
            'photo' => 'foto',
            'price' => 18785.0,
            'stock' => 100,
            'category_id' => 2,

        ]);
        Product::create([
             'name'=> 'Country_900',
            'description' => 'Horno a gas, 90cm.',
            'photo' => 'foto',
            'price' => 25360.0,
            'stock' => 100,
            'category_id' => 2,

        ]);
        Product::create([
             'name'=> 'Folium_550',
            'description' => 'Horno a gas, 55cm.',
            'photo' => 'foto',
            'price' => 18785.0,
            'stock' => 100,
            'category_id' => 2,

        ]);
        Product::create([
             'name'=> 'Folium_900',
            'description' => 'Horno a gas, 90cm.',
            'photo' => 'foto',
            'price' => 25360.0,
            'stock' => 100,
            'category_id' => 2,

        ]);
        Product::create([
             'name'=> 'Garden_550',
            'description' => 'Horno a gas, 55cm.',
            'photo' => 'foto',
            'price' => 18785.0,
            'stock' => 100,
            'category_id' => 2,

        ]);
        Product::create([
             'name'=> 'Garden_900',
            'description' => 'Horno a gas, 90cm.',
            'photo' => 'foto',
            'price' => 25360.0,
            'stock' => 100,
            'category_id' => 2,

        ]);
    }
}