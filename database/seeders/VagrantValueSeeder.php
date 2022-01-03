<?php

namespace Database\Seeders;

use App\Models\VagrantValue;
use Illuminate\Database\Seeder;

class VagrantValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vagrants = [
            // Kích thước
            [
                "vagrant_id" => 1,
                "value" => "S"
            ],
            [
                "vagrant_id" => 1,
                "value" => "M"
            ],
            [
                "vagrant_id" => 1,
                "value" => "L"
            ],
            [
                "vagrant_id" => 1,
                "value" => "XXL"
            ],
            // Màu sắc
            [
                "vagrant_id" => 2,
                "value" => "Màu đen"
            ],
            [
                "vagrant_id" => 2,
                "value" => "Màu trắng"
            ],
            [
                "vagrant_id" => 2,
                "value" => "Màu hồng"
            ],
            [
                "vagrant_id" => 2,
                "value" => "Màu cam"
            ],
            [
                "vagrant_id" => 2,
                "value" => "Màu đỏ"
            ]
        ];
        VagrantValue::insert($vagrants);
    }
}
