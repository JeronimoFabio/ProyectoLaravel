<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
        	'nombre'=> 'Apart_550',
        	'precio' => '19724.00',
        	'foto' => 'foto',
        	'stock' => '150',

        ]);

        DB::table('productos')->insert([
        	'nombre'=> 'Apart_900',
        	'precio' => '25642.00',
        	'foto' => 'foto',
        	'stock' => '100',

        ]);

        DB::table('productos')->insert([
        	'nombre'=> 'Country_550',
        	'precio' => '24863.00',
        	'foto' => 'foto',
        	'stock' => '170',

        ]);

        DB::table('productos')->insert([
        	'nombre'=> 'Country_900',
        	'precio' => '32321.00',
        	'foto' => 'foto',
        	'stock' => '90',

        ]);

        DB::table('productos')->insert([
        	'nombre'=> 'Folium_550',
        	'precio' => '26520.00',
        	'foto' => 'foto',
        	'stock' => '100',

        ]);

        DB::table('productos')->insert([
        	'nombre'=> 'Folium_900',
        	'precio' => '34476.00',
        	'foto' => 'foto',
        	'stock' => '100',

        ]);
    }
}
