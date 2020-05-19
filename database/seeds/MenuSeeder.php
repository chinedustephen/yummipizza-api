<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
                'menu_name' => 'Pizza 1',
                'menu_description' => 'Made with one cheese and one honey',
                'menu_image' => 'img1.jpg',
                'menu_price' => 50,
                'menu_initial_price' => 100,
                'menu_created_at' => date("Y-m-d H:i:s"),
                'menu_updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'menu_name' => 'Pizza 2',
                'menu_description' => 'Made with two cheese and two honey',
                'menu_image' => 'img2.jpg',
                'menu_price' => 100,
                'menu_initial_price' => 150,
                'menu_created_at' => date("Y-m-d H:i:s"),
                'menu_updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'menu_name' => 'Pizza 3',
                'menu_description' => 'Made with three cheese and three honey',
                'menu_image' => 'img3.jpg',
                'menu_price' => 250,
                'menu_initial_price' => 200,
                'menu_created_at' => date("Y-m-d H:i:s"),
                'menu_updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'menu_name' => 'Pizza 4',
                'menu_description' => 'Made with four cheese and four honey',
                'menu_image' => 'img4.jpg',
                'menu_price' => 250,
                'menu_initial_price' => 300,
                'menu_created_at' => date("Y-m-d H:i:s"),
                'menu_updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'menu_name' => 'Pizza 5',
                'menu_description' => 'Made with five cheese and five honey',
                'menu_image' => 'img5.jpg',
                'menu_price' => 300,
                'menu_initial_price' => 350,
                'menu_created_at' => date("Y-m-d H:i:s"),
                'menu_updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'menu_name' => 'Pizza 6',
                'menu_description' => 'Made with six cheese and six honey',
                'menu_image' => 'img6.jpg',
                'menu_price' => 350,
                'menu_initial_price' => 400,
                'menu_created_at' => date("Y-m-d H:i:s"),
                'menu_updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'menu_name' => 'Pizza 7',
                'menu_description' => 'Made with seven cheese and seven honey',
                'menu_image' => 'img7.jpg',
                'menu_price' => 200,
                'menu_initial_price' => 250,
                'menu_created_at' => date("Y-m-d H:i:s"),
                'menu_updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'menu_name' => 'Pizza 8',
                'menu_description' => 'Made with eight cheese and eight honey',
                'menu_image' => 'img8.jpg',
                'menu_price' => 250,
                'menu_initial_price' => 300,
                'menu_created_at' => date("Y-m-d H:i:s"),
                'menu_updated_at' => date("Y-m-d H:i:s"),
            ],

        ]);
    }
}
