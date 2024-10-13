<?php
// todo: N+1 (Eager Loading/Lazy load)-> agar query tidak boros saat di debuging
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Indra Saepudin', 'title' => 'About']);
});


Route::get('/posts', function () {
    //todo: N+1(Eager loading) $posts = Post::with(['author', 'category'])->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});


Route::get('/posts/{post:slug}', function (Post $post) {

    // $post = Post::find($id);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/authors/{user:username}', function (User $user) {
    //todo: N+1(Lazy load) $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});


Route::get('/categories/{category:slug}', function (Category $category) {
    //todo: N+1(Lazy load) $posts = $category->posts->load('category', 'author'); 
    return view('posts', ['title' => 'Articles in: ' . $category->name, 'posts' => $category->posts]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
