<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\models\Post;
use App\models\Category;
use App\models\User;


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
        'title' => 'Category',
        'judul' => $category-> name,
        'posts' => $category-> post,
        'category' => $category -> name
    ]);
});

Route::get('/authors/{author}', function(User $user){
    return view("category", [
        'title' => 'Postingan User',
        'judul' => $user -> posts,
    ]);
});
