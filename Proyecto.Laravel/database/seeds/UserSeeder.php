<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=> 'Admin',
        	'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
            'is_admin' => true,

        ]);
    }
}
