<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('products')->insert([
        	[
	        	'name'=>'Nikon d750', 
	        	'price'=>'1499.99',
	        	'description'=>'A compact dslr camera with built in wifi',
	        	'category'=>'cameras',
	        	'gallery'=>'https://images.unsplash.com/photo-1564466809058-bf4114d55352?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1533&q=80'
        	],
        	[
	        	'name'=>'oculus Go', 
	        	'price'=>'350',
	        	'description'=>'stand alone vr headset with 32gb ram',
	        	'category'=>'video games',
	        	'gallery'=>'https://images.unsplash.com/photo-1525459819821-1c2d33189e23?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=375&q=80'
        	],
        	[
	        	'name'=>'Apple - 12.9-inch iPad Pro', 
	        	'price'=>'990',
	        	'description'=>'A tablet with 128gb ram and much more features',
	        	'category'=>'tablets',
	        	'gallery'=>'https://images.unsplash.com/photo-1542751110-97427bbecf20?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=676&q=80'
        	],
        	[
	        	'name'=>'Beats by Dr. Dre - Powerbeats Pro', 
	        	'price'=>'249.99',
	        	'description'=>'Totally wireless Powerbeats Pro earphones built to revolutionize your workouts',
	        	'category'=>'headphones',
	        	'gallery'=>'https://images.unsplash.com/photo-1597859359746-f6efe49ce11a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=905&q=80'
        	]

        ]);
    }
}
