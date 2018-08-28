<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        	'name'=> 'Cocinas',
        	
        ]);
        Category::create([
        	'name'=> 'Hornos',
        	
        ]);
        Category::create([
        	'name'=> 'Anafes',
        	
        ]);
        Category::create([
        	'name'=> 'Campanas',
        	
        ]);
    }
}
