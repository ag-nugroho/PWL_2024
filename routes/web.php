<?php

use App\Http\Controllers\AboutContoller;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello', function () {
//     return 'Hello World';
// });

Route::get('/world', function(){
    return 'World';
});

// Route::get('/', function() {
//     return 'Selamat Datang';
// });

// Route::get('/about', function(){
//     return '2241760135, Agung Nugroho';
// });

// Route::get('/about', function(){
//     return view('welcome');
// });

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId){
//     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
// });

// Route::get('articles/{id}', function ($getId){
//     return 'Urutan ke-'.$getId;
// });

// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya '.$name;
// });

// Route::get('/user/profile', function () {
//     //
// }) ->name('profile');

// Route::get(
//     '/user/profile',
//     [UserProfileController::class, 'show']
// )->name('profile');

// // Generating URLs...
// $url = route('profile');

// // Generating Redirects...
// return redirect()->route('profile');

// Route::middleware(['first', 'second'])->group(function () {
//     Route::get('/', function () {
//         // Uses first & second middleware...
//     });

//     Route::get('/user/profile', function () {
//         // Uses first & second middleware...
//     });

//     Route::domain('{account}.example.com')->group(function () {
//         Route::get('/user/{id}', function ($account, $id) {
//             //
//     });
// });

// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/user', [UserController::class, 'index']);
//     Route::get('/post', [PostController::class, 'index']);
//     Route::get('/event', [EventController::class, 'index']);
// });

// Route::redirect('/here', '/there');

// Route::view('/welcome', 'welcome');
// Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

// PRAKTIKUM 2

Route::get('/hello', [PageController::class, 'hello']);

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

// Route::get('/posts/{post}/comments/{comment}', [WelcomeController::class, 'articles']);

Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/home', [HomeController::class, 'home']);

Route::get('/index', [AboutContoller::class, 'index']);

Route::get('/about', [AboutContoller::class, 'about']);

Route::get('/posts/{post}/comments/{comment}', [ArticleController::class, 'articles']);

Route::resource('photos', PhotoController::class);

Route::resource('photos', PhotoController::class)->only(['index', 'show']);

Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);