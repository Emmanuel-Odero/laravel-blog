<?php
namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{
    public static function find($slug)
    {
    base_path();
    if (! file_exists($path=resource_path("/posts/{$slug}.html"))) {
        # code...
        throw new ModelNotFoundException();
        // dd('File not found');
    }
    return cache()->remember("posts.{$slug}", 5,function() use($path){
        //var_dump('file_get_contents');
        //return file_get_contents($path);
    });
    // $post= file_get_contents($path);

    }
}