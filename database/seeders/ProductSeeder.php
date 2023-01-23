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
 
             ['image' => 'coat_ashy.png',
             'name' => 'Ashy Coat',
             'description' => 'Black Coat for every occasion. Available in sizes M and L.',
             'price' => 399999,
             'stock' => 9],

             ['image' => 'coat_autumn.png',
             'name' => 'Autumn Burn Coat',
             'description' => 'Stylish brown coat, perfect for your autumn fashion. Available in sizes M and L.',
             'price' => 399999,
             'stock' => 11],

             ['image' => 'dress_ouges_spring.png',
             'name' => 'Ouges Spring Dress',
             'description' => 'This is the choices for your Spring Queen nomination this year. Available in sizes S, M and L.',
             'price' => 249999,
             'stock' => 6],

             ['image' => 'dress_puff_chiffon.png',
             'name' => 'White Puff Chiffon Dress',
             'description' => 'A slim-fitting piece for your weadow wear. Available in sizes S and M.',
             'price' => 199999,
             'stock' => 4],

             ['image' => 'pants_cotton_beige.png',
             'name' => 'Beige Cotton High Waist Pants',
             'description' => 'Beige Cotton High Waist Pants. Available in sizes S, M and L.',
             'price' => 299999,
             'stock' => 9],

             ['image' => 'pants_formal_trouser.png',
             'name' => 'Grey Formal Trouser',
             'description' => 'Grey Formal Trouser. Available in sizes S, M and L.',
             'price' => 349999,
             'stock' => 12],

             ['image' => 'pants_jeans.png',
             'name' => 'Wide Legged Blue Jeans',
             'description' => 'Wide Legged Blue Jeans. Available in sizes M and L.',
             'price' => 189999,
             'stock' => 18],

             ['image' => 'polo_grey.png',
             'name' => 'Grey Polo T-Shirt',
             'description' => 'Grey Polo Shirt. Available in sizes M and L.',
             'price' => 229999,
             'stock' => 11],

             ['image' => 'shirt_cream_knitted.png',
             'name' => 'Cream Knitted Crop Top',
             'description' => 'Cream Knitted Crop Top. Available in sizes S and M.',
             'price' => 189999,
             'stock' => 6],

             ['image' => 'shirt_dare.png',
             'name' => 'DARE Black Shirt',
             'description' => 'DARE Black T-Shirt. Available in sizes S, M and L.',
             'price' => 149999,
             'stock' => 10],

             ['image' => 'shirt_grateful_dead.png',
             'name' => 'GRATEFUL DEAD Black T-Shirt',
             'description' => 'GRATEFUL DEAD Black Shirt. Available in sizes S, M and L.',
             'price' => 149999,
             'stock' => 11],

             ['image' => 'shirt_red_tied.png',
             'name' => 'Red Tied Ribbon Crop Top',
             'description' => 'Red Tied Ribbon Crop Top. Available in sizes S, M and L.',
             'price' => 149999,
             'stock' => 3],

             ['image' => 'shirt_waat.png',
             'name' => 'WAAT LAGA DENGE Red T-Shirt',
             'description' => 'WAAT LAGA DENGE Red T-Shirt. Available in sizes M and L.',
             'price' => 149999,
             'stock' => 7],

             ['image' => 'shirt_wrangler_stripe.png',
             'name' => 'Wrangler Stripe Crop T-Shirt',
             'description' => 'Wrangler Stripe Crop T-Shirt. Available in sizes S, M and L.',
             'price' => 149999,
             'stock' => 6],

             ['image' => 'skirt_elegant_black.png',
             'name' => 'Black Elegant Skirt',
             'description' => 'Black Elegant Short Skirt. Available in sizes S and M.',
             'price' => 229999,
             'stock' => 7],

             ['image' => 'skirt_long_grey.png',
             'name' => 'Long Grey Slit Skirt',
             'description' => 'Long Grey Slit Skirt. Available in sizes S, M and L.',
             'price' => 289999,
             'stock' => 4],

             ['image' => 'skirt_red_plaid.png',
             'name' => 'Red Plaid Short Skirt',
             'description' => 'Red Plaid Short Skirt. Available in sizes S, M and L.',
             'price' => 189999,
             'stock' => 12],

             ['image' => 'suit_black.png',
             'name' => 'Black Midnight Suit Set',
             'description' => 'Black Midnight Suit Set. Available in sizes M and L.',
             'price' => 499999,
             'stock' => 2],

             ['image' => 'suit_grey.png',
             'name' => 'Grey Mono Suit Set',
             'description' => 'Grey Mono Suit Set. Available in sizes M and L.',
             'price' => 499999,
             'stock' => 6],

             ['image' => 'suit_navy.png',
             'name' => 'Navy Blue Suit Set',
             'description' => 'Navy Blue Suit Set. Available in sizes M and L.',
             'price' => 499999,
             'stock' => 4]

            
         ]);
    }
}
