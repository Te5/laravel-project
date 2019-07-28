<?php
use App\Role;
use App\User;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*this route creates some sample users/roles */
// Route::get('/fillthedata', function	(){

// 	Role::create(['name'=>'administrator']);
// 	Role::create(['name'=>'author']);
// 	Role::create(['name'=>'subscriber']);

// 	User::create(['name' => 'Dzmitry Kartsianovich', 'email'=> 'kartsianovich@gmail.com', 'password'=> bcrypt('12345678'), 'is_active'=>1, 'role_id'=>1]);

// 	return 'done';
// });

Route::resource('admin/users', 'AdminUsersController');

Route::get('admin', function()
{
	return view('admin.index');
});