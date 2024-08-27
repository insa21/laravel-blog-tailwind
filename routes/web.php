<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Indra Saepudin', 'title' => 'About']);
});


Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Indra Saepudin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, eius autem et quaerat libero sed blanditiis
            vel dicta facere nulla nihil sapiente laboriosam eos minus, fugit labore temporibus. Laborum, sint.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Indra Saepudin',
            'body' => '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, eius autem et quaerat libero sed blanditiis
            vel dicta facere nulla nihil sapiente laboriosam eos minus, fugit labore temporibus. Laborum, sint. Lorem
            ipsum dolor, sit amet consectetur adipisicing elit. Fugit enim, ea, perspiciatis aliquam minus nam omnis
            dolore sequi eaque commodi pariatur quas. Ad, libero fuga possimus animi sunt temporibus minima.'
        ]
    ]]);
});


Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Indra Saepudin',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, eius autem et quaerat libero sed blanditiis
            vel dicta facere nulla nihil sapiente laboriosam eos minus, fugit labore temporibus. Laborum, sint.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Indra Saepudin',
            'body' => '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, eius autem et quaerat libero sed blanditiis
            vel dicta facere nulla nihil sapiente laboriosam eos minus, fugit labore temporibus. Laborum, sint. Lorem
            ipsum dolor, sit amet consectetur adipisicing elit. Fugit enim, ea, perspiciatis aliquam minus nam omnis
            dolore sequi eaque commodi pariatur quas. Ad, libero fuga possimus animi sunt temporibus minima.'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'contact']);
});
