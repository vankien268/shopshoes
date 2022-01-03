<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            // admin
            // id = 1
            [
                "name" => "Administrator"
            ],
            // shipper
            // id = 2
            [
                "name" => "Shipper"
            ],
            // khách hàng
            // id = 3
            [
                "name" => "Khách hàng"
            ],
        ];
        Role::insert($roles);
    }
}
