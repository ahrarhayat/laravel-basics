<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ProductsController;
use App\HTTP\Controllers\PagesController;

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

//Route that sends back a view
// Route::get('/', function () {
//     return view('home');
//  });

Route::get('/', [PagesController::class,'index']);

Route::get('/about', [PagesController::class,'about']);


 //Laravel 8 (New)
//params: url, [Controller name, function to return in the controller]
Route::get('/products', [ProductsController::class,'index'])->name('products');




Route::get('/products/about', [ProductsController::class,'about']);


//Pattern is an integer
// Route::get('/products/{id}', [ProductsController::class,'show'])->where('id','[0-9]+');

//Pattern is an string
// Route::get('/products/{name}', [ProductsController::class,'show'])->where('name','[a-zA-Z]+');


//Pattern is an string
Route::get('/products/{name}/{id}', [ProductsController::class,'show'])->where(['name' => '[a-z]+' , 'id' => '[0-9]+'] );


//Laravel 8 (Also New)

//params: url, Controller location@function to return in the controller
//Route::get('/products', 'App\HTTP\Controllers\ProductsController@index');


//Before Laravel 8
//Route::get('/products','ProductsController@index');


//Route to users

// Route::get('/users',function (){
//     return 'Welcome to the users page';
// });


// //Route to users - Array(JSON)

// Route::get('/users',function (){
//     return ['PHP', 'HTML', 'Laravel'];
// });


// //Route to users - JSON object

// Route::get('/users',function (){
//     return response()->json([
//         'name'=> 'Ahrar',
//         'course' => 'Laravel Beginners to Advanced'
//     ]);
// });

// //Route to users - Redirect

// Route::get('/users',function (){
//     return  redirect ('/');
// });

//localhost:8081/users == /users