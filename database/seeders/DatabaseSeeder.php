<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UsersSeeder::class,
            ProvinceSeeder::class,
            DistrictSeeder::class,
            WardSeeder::class,
            CategorySeeder::class,
            BrandSeeder::class,
            VagrantSeeder::class,
            VagrantValueSeeder::class,
            ProductSeeder::class,
        ]);
    }
}
