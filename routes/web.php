<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Basic Routing 
// Route::get('/hello', [WelcomeController::class,'hello']);


// Route::get('/World', function () {
//     return 'World';  

// Route::get('/', function () {
//     return 'Selamat Datang';

// Route::get('/about', function () {
//     return '2341720205 Charellino Kalingga Sadewo';

// Route Parameters
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;  

// Optional Parameters
// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID = ' . $id;

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;

// Route::get('/user/{name?}', function ($name='John') {
// return 'Nama saya '.$name;

// Route Name
// Route::get('/user/profile', function() {
//     //
//    })->name('profile');

// // Route Group dan Route Prefixes

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//     // Uses first & second middleware...
// });
// Route::get('/user/profile', function () {
//     // Uses first & second middleware...
// });
// });
// Route::domain('{account}.example.com')->group(function () {
//     Route::get('user/{id}', function ($account, $id) {
//         //
//     });
// });
// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// // Route Prefixes
// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Redirect Routes
// Route::redirect('/here', '/there');
 
// View Routes
// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
// Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
//    ]);

// Route::resource('photos', PhotoController::class)->except([
//  'create', 'store', 'update', 'destroy'
// ]);

// Route::get('/greeting', function () {
//     return view('hello', ['name' => 'Charel']);
//     });

// Route::get('/greeting', function () {
// return view('blog.hello', ['name' => 'Charel']);
// });

// Route::get('/greeting', [WelcomeController::class,
// 'greeting']);

// use App\Http\Controllers\PageController;

// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\AboutController;
// use App\Http\Controllers\ArticleController;

// Route::get('/', HomeController::class);
// Route::get('/about', AboutController::class);
// Route::get('/articles/{id}', ArticleController::class);
