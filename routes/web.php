<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\models\Post;
use App\models\Category;

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

Route::get('/', function () {
    return view("home",
                ["title" => "Home"]);
});

Route::get('/about', function () {
    return view('about',
                ["title" => "About"]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', function(Category $category){
    return view("category", [
        'judul' => $category-> name,
        'posts' => $category-> post,
        'category' => $category -> name
    ]);
});
