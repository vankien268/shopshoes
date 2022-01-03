<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// User:truncate();
       	// $arary =[

       	// 	[
       	// 		'name'=>'Danh nguyen',
       	// 		'username'=>"danh123",
       	// 		'password'=>bcrypt('123')

       	// 	],
       	// 		[
       	// 		'name'=>'Danh nguyen tran',
       	// 		'username'=>"danh1234",
       	// 		'password'=>bcrypt('123')

       	// 	],
       	// 	[
       	// 		'name'=>'Danh nguyen tran',
       	// 		'username'=>"danh12345",
       	// 		'password'=>bcrypt('123')

       	// 	],
       	// 	[
       	// 		'name'=>'Danh nguyen tran tran',
       	// 		'username'=>"danh123456",
       	// 		'password'=>bcrypt('123')

       	// 	]
       	// ];
       	// User::insert($arary);

       	User::factory(100)->create();

    }
}
