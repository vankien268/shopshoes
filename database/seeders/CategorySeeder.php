<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                "name" => "Qomen",
                "slug" => "women",
                "parent_id" => 0
            ],
            [
                "name" => "Men",
                "slug" => "men",
                "parent_id" => 0
            ],
            [
                "name" => "Kids",
                "slug" => "kids",
                "parent_id" => 0
            ],
            [
                "name" => "Clothing women",
                "slug" => "women-clothing",
                "parent_id" => 1
            ],
            [
                "name" => "Shoes women",
                "slug" => "women-shoes",
                "parent_id" => 1
            ],
            [
                "name" => "Handbag",
                "slug" => "women-handbag",
                "parent_id" => 1
            ],
            [
                "name" => "Clothing men",
                "slug" => "men-clothing",
                "parent_id" => 1
            ],
            [
                "name" => "Shoes men",
                "slug" => "men-shoes",
                "parent_id" => 1
            ],
        ];

        Category::insert($categories);
    }
}
