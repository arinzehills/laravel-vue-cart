<?php

namespace Database\Seeders;
use DateTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
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
        $faker = Faker::create();
        //
        $products = [
            [
                'product_name' => "MEN'S BETTER THAN NAKED & JACKET",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'price' => 200.10,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/mens-better-than-naked-jacket-AVMH_LC9_hero.png',
                'created_at' => new DateTime(),
                'updated_at' => null,
            ],
            [
                'product_name' => "WOMEN'S BETTER THAN NAKED™ JACKET",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'price' => 1600.21,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-better-than-naked-jacket-AVKL_NN4_hero.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'product_name' => "WOMEN'S SINGLE-TRACK SHOE",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'price' => 378.00,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/womens-single-track-shoe-ALQF_JM3_hero.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'product_name' => 'Enduro Boa® Hydration Pack',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'price' => 21.10,
                'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/enduro-boa-hydration-pack-AJQZ_JK3_hero.png',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            
        ];
       
       
        DB::table('products')->insert($products);
       // for($i= 1; $i < 5; $i++){
           //            return 
       // }
      
        
        // for($i= 1; $i < 5; $i++){
        //     Product::create([
        //         'product_name' => 'Desktop' . $i,
        //         'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        //         tempor incididunt ut labore et dolore magna aliqua consequat.',
        //         'price' => rand(24999, 449999),
        //         'image' => 'http://images.thenorthface.com/is/image/TheNorthFace/236x204_CLR/enduro-boa-hydration-pack-AJQZ_JK3_hero.png',
        //         // 'created_at' => new DateTime,
        //         // 'updated_at' => null,
        //     ])->categories()->attach(1);
        // }
    }
}