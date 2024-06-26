<?php

use App\Http\Controllers\CategoriController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ShablonController;
use Illuminate\Support\Facades\Route;


Route::middleware(['guest'])->group(function () {
    Route::get('/register', [UserController::class, 'create'])->name('user.create');
    Route::post('/register', [UserController::class, 'store'])->name('user.store');
    Route::get('/login', [UserController::class, 'loginCreate'])->name('login.create');
    Route::post('/login', [UserController::class, 'loginStore'])->name('login.store');
});
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/about', [HomeController::class, 'show'])->name('about');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
});

Route::middleware(['admin'])->group(function () {
    Route::get('/post/create', [HomeController::class, 'create'])->name('post.create');
    Route::post('/post', [HomeController::class, 'store'])->name('post.store');
});

Route::get('/contact/all/{id}', 'ContactController@showOneMessage')->name('contact-data-one');

Route::get('/post/car', [CategoriController::class, 'car'])->name('post.car');
Route::get('/post/home', [CategoriController::class, 'home'])->name('post.home');
Route::get('/post/services', [CategoriController::class, 'services'])->name('post.services');

Route::get('/main', [MainController::class, 'index'])->name('main.index');

Route::get('/shablon', [ShablonController::class, 'index'])->name('shablon');


Route::get('/test', [Controller::class, 'test'])->name('test.test');





// Route::get('/hello', function () {
//     return view('welcome');
// })->name('welcome');

// Route::get('/post/{id}/{slug?}', function($id, $slug = null) {
//     return "<h1> POST $id | $slug </h1>";
// });

// // ->where(['id' => '[0-9]+', 'slug' => '[A-Za-z]+'])

// // Route::get('/home', function() {
// //     $res = 2 + 3;
// //     $name = 'Name'; 
// //     return view('home', compact('res', 'name'));
// // });


// Route::resource('/posts', PostController::class);


// Route::match(['post', 'get'],'/contact9', function () {
//     if (!empty($_POST)) {
//         dump($_POST);
//         }
//     return view('contact');
// })->name('isp222');

// Route::prefix('admin')->group(function(){
//     Route::get('/posts', function() {
//         return 'Posts List';
//     });
//     Route::get('/posts/create', function() {
//         return 'Posts Create';
//     });
//     Route::get('/posts/{id}/edit', function($id) {
//         return "Edit Post $id";
//     });
// });

// Route::fallback(function () {
//     // return redirect()->route('welcome');
//     abort(404, 'Page not found');
// });

