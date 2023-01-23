<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([

          #  $table->id();
          #  $table->string('image'); #gambar file
          #  $table->string('product name'); #gambar file
          ##  $table->string('description');
           # $table->float('price');
           # $table->integer('year');
 
             ['image' => 'autumn long dress.jpeg',
             'name' => 'Autumn Long Dress',
             'description' => 'A brown long dress perfect for the autumn season. Available in sizes S and M.',
             'price' => 399999,
             'stock' => 23],

             ['image' => 'black bomber.jpg',
             'name' => 'Black Bomber Jacket',
             'description' => 'Black jacket suitable for motorcycle users. Available in sizes S and M.',
             'price' => 499999,
             'stock' => 19],

             ['image' => 'black photographer shirt.jpeg',
             'name' => 'Black Photographer T-Shirt',
             'description' => 'T-shirt for the photography enthusiast. Available in sizes S and M.',
             'price' => 199999,
             'stock' => 23],

             ['image' => 'black shirt.jpeg',
             'name' => 'Black \'Smile Please\' T-Shirt',
             'description' => 'For those who want to tell people to smile more. Available in sizes S and M.',
             'price' => 199999,
             'stock' => 23],

             ['image' => 'black trenchcoat.jpeg',
             'name' => 'Black Trenchcoat',
             'description' => 'A black trenchcoat for the cold. Available in sizes S and M.',
             'price' => 599999,
             'stock' => 23],

             ['image' => 'black white denim jacket.jpeg',
             'name' => 'Black Denim Jacket',
             'description' => 'Black denim jacket with white hoodie interior made for the rebellious. Available in sizes S and M.',
             'price' => 699999,
             'stock' => 25],

             ['image' => 'blue lens shirt.jpeg',
             'name' => 'Blue Lens T-Shirt',
             'description' => 'A blue shirt for the focused photographer. Available in sizes S and M.',
             'price' => 199999,
             'stock' => 25],

             ['image' => 'gray blurry lens shirt.jpeg',
             'name' => 'Gray Photographer T-Shirt',
             'description' => 'Show off how much photography is your personality. Available in sizes S and M.',
             'price' => 129999,
             'stock' => 40],

             ['image' => 'moon swing shirt.jpeg',
             'name' => 'Black Moon Swing T-Shirt',
             'description' => 'For the creative. Available in sizes XS, S, and M.',
             'price' => 199999,
             'stock' => 10],

             ['image' => 'pink dress.jpeg',
             'name' => 'Pink Spring Short Dress',
             'description' => 'A pink dress perfect for Spring. Available in sizes S and M.',
             'price' => 599999,
             'stock' => 8],

             ['image' => 'robot bear shirt.jpeg',
             'name' => 'Robot Bear T-Shirt',
             'description' => 'Appeal to the beary machines. Available in sizes S and M.',
             'price' => 99999,
             'stock' => 12],

             ['image' => 'rubix shirt.jpeg',
             'name' => 'Rubix T-Shirt',
             'description' => 'Show off how smart you are. Available in sizes S and M.',
             'price' => 599999,
             'stock' => 8],

             ['image' => 'sniper fox tshirt.jpeg',
             'name' => 'Sniper Fox T-Shirt',
             'description' => 'For those who like photography, and foxes. Available in sizes S and M.',
             'price' => 199999,
             'stock' => 4],

             ['image' => 'teal dress.jpg',
             'name' => 'Teal Spring Dress',
             'description' => 'Made for those who want to feel pretty. Available in sizes S and M.',
             'price' => 499999,
             'stock' => 1],

             ['image' => 'yellow green striped shirt.png',
             'name' => 'Yellow Green Striped Shirt',
             'description' => 'For those who want to look like as dorky as possible. Hey, We won\'t judge. Available in sizes S and M.',
             'price' => 159999,
             'stock' => 10]

            
         ]);
    }
}
