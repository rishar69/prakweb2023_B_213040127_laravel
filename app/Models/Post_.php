<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            'judul' => 'Post 1',
            'slug' => 'post-1',
            'penulis' => 'Harish',
            'isi' => '456456465465465465456464654654654646546546546'
        ],
        [
            'judul' => 'Post 2',
            'slug' => 'post-2',
            'penulis' => 'Arya',
            'isi' => '56565656565656565656565656565655665565656565656565656565656565656'
        ]
        ];

       public static function all(){
            return collect(self :: $blog_posts);
        }

        public static function find($slug) {
            $posts = static :: all();


                    return $posts->firstWhere('slug', $slug);
        }
}
