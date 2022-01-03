<?php

namespace Database\Seeders;

use App\Models\Vagrant;
use Illuminate\Database\Seeder;

class VagrantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vagrants = [
            [
                "name" => "Kích thước",
                "code" => "size"
            ],
            [
                "name" => "Màu sắc",
                "code" => "color"
            ],
        ];

        Vagrant::insert($vagrants);
    }
}
