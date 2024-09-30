<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
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
  }

  public static function find($slug): array
  {
    // return Arr::first(static::all(), function ($post) use ($slug) {
    //   return $post['slug'] == $slug;
    // });

    // Versi Arrow Function
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    if (! $post) {
      abort(404);
    }

    return $post;
  }
}
