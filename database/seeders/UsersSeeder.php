<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory;

class UsersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Xóa tất cả bản ghi và reset id về 0
		// gán vai trò cho admin
		User::truncate();
		// Tạo admin
		$admin = User::create([
			'name' => 'Administrator',
			'username' => "admin",
			'email' => "admin@gmail.com",
			'verified' => 1,
			'password' => bcrypt('123')

		])->roles()->attach(1);

		// Shipper
		// gán vai trò cho shipper
		$shipper = User::create([
			'name' => 'Shipper',
			'username' => "shipper",
			'email' => "shipper@gmail.com",
			'verified' => 1,
			'password' => bcrypt('123')

		])->roles()->attach(2);

		$faker = Factory::create();
		// Tạo khách hàng
		User::factory(100)->afterCreating(function ($user) use ($faker) {
			$user->addresses()->create([
				"address_full" => $faker->address,
				"province_id" => rand(1, 63),
				"district_id" => rand(1, 707),
				"ward_id" => rand(1, 10618),
			]);
		})->create();
	}
}
