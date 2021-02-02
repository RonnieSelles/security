<?php
use App\Http\Controllers\WelcomeController;

//use Illuminate\Support\Facades\Route;
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

// Route::get('/posts/{post}',  function($post){
//     $posts = [
//         'my-first-post' => 'Hello, this is my first blog post!',
//         'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//     ];
//
//     if (!array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, that post was not found.');
//     }
//
//     return view('post', [
//         'post' => $posts[$post]
//     ]);
// });
//
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('profile', [WelcomeController::class, 'profile']);
Route::get('dashboard', [WelcomeController::class, 'dashboard']);
Route::get('faq', [WelcomeController::class, 'faq']);
Route::get('motivation', [WelcomeController::class, 'motivation']);

