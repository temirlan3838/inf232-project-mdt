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
                'image' => 'product1.jpg',
                'name' => 'Denim Jacket',
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing1',
                'price' => '200',
                'rating' => '1.5'
            ],
            [
                'image' => 'product2.jpg',
                'name' => 'Woman Suit',
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing2',
                'price' => '400',
                'rating' => '1.5'
            ],
            [
                'image' => 'product3.jpg',
                'name' => 'Gorgeous Dress',
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing3',
                'price' => '550',
                'rating' => '5.5'
            ],
            [
                'image' => 'product4.jpg',
                'name' => 'Red Suit',
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing4',
                'price' => '1000',
                'rating' => '4.5'
            ],
            [
                'image' => 'product5.jpg',
                'name' => 'Plaid Shirt',
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing5',
                'price' => '150',
                'rating' => '1.0'
            ],
            [
                'image' => 'product6.jpg',
                'name' => 'Wild West Hoodie',
                'title' => 'Lorem ipsum dolor sit amet, consectetur adipisicing6',
                'price' => '300',
                'rating' => '8.0'
            ]
        ]);
    }
}
