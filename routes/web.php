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

Route::get('/', function () {
    return view('welcome');
})->name("home");
/*

Route::get('bienvenido', function() {
    return 'hola';
});



Route::get('users/profile', function() {
    return 'hola qhadse';
})->name('profile');

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('test/{nombre}', function ($nombre) {
    echo "Hola ".$nombre;
});

/*
Route::get('home', function() {
    return view('home');
})->name('home');



Route::get('tests', function($id) {
    return "<a href='".route('contacto', ['celular' -> '5558943158'])."'>Contacto</a>";
});


Route::get('contactanos/{celular?}', function($celular = null) {
    return "<h3>Direccion: CDMX</h3><h4>Celular: ".$celular."</h4>";
})->name("contacto");


//Ruta con envio de valores
Route::get('home', function() {
    return view('home',['firstname'=>'Arturo','lastname'=>'Zavala']);
})->name('home');


//Bucles con blade
Route::get('home', function() {
    $posts=['Lista 1','Lista 2','Lista 3'];
    return view('home', ['firstname'=>'Arturo','lastname'=>'Zavala','posts'=>$posts]);
})->name('home');

*/

Route::get('dashboard/post/index', 'PostController@index');

Route::resource('dashboard/post', 'dashboard\PostController');

Route::post('dashboard/post/{post}/image','dashboard\PostController@image')->name('post.image');



Route::get('dashboard/categories/index', 'CategoriesController@index');

Route::resource('dashboard/categories', 'dashboard\CategoriesController');

//Route::categories('dashboard/categories/{post}/image','dashboard\PostController@image')->name('post.image');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
