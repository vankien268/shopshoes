<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccountController;
//web bao gom admin va cusstomer ben trang chu hay la gom tat moi ng
Route::middleware('web')->group(function(){

	// neu chua dang nhap
	Route::middleware('guest')->group(function(){

		Route::get('admin/login', [LoginController::class, "showFormlogin"])->name('show.login');
		Route::post('admin/login', [LoginController::class, "showFormloginPost"])->name('show.login');

	});
	Route::middleware('admin')->group(function(){

		Route::get('admin', function () {
    			return view('backend.layout');
		})->name('admin'); 

		Route::get('logout', [LoginController::class, "logout"]);
	});

});

// login

//--------------------------FRONTEND-----------------

//index
Route::get('index', function () {
			return view('frontend.index');
	})->name('index'); 

//danh muc lien he
Route::get('contact', function () {
			return view('frontend.contact');
}); 

// Route::get('contact', function () {
// 			return view('frontend.contact');
// }); 
Route::get('home',function(){
	return view('frontend.trangchu');
})->name('home'); 
Route::get('dang-ky',[AccountController::class,'showRegister'])->name('show.register.home'); 
Route::POST('dang-ky',[AccountController::class,'showRegisterPost'])->name('show.register.home');

// dang nhap
 Route::get('dang-nhap',[AccountController::class,'showLogin'])->name('form.login.home');
  Route::post('dang-nhap',[AccountController::class,'showLoginPost'])->name('form.login.home');  

Route::get('dang-xuat', [AccountController::class, "logout"])->name('client.logout');


