<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index()
    {
        $posts = [
            'post1' => ['name' => 'Welcome post 1', 'desc' => 'decryption post 1'],
            'post2' => ['name' => 'Welcome post 2', 'desc' => 'decryption post 2'],
            'post3' => ['name' => 'Welcome post 3', 'desc' => 'decryption post 3'],
            'post4' => ['name' => 'Welcome post 4', 'desc' => 'decryption post 4'],
            'post5' => ['name' => 'Welcome post 5', 'desc' => 'decryption post 5'],
            'post6' => ['name' => 'Welcome post 6', 'desc' => 'decryption post 6'],
        ];

        // return $posts['post1']['name'];
        return view('blog.index', compact('posts'));

    }

    public function show($post)
    {
        $posts = [
            'post1' => ['name' => 'Welcome post 1', 'desc' => 'decryption post 1'],
            'post2' => ['name' => 'Welcome post 2', 'desc' => 'decryption post 2'],
            'post3' => ['name' => 'Welcome post 3', 'desc' => 'decryption post 3'],
            'post4' => ['name' => 'Welcome post 4', 'desc' => 'decryption post 4'],
            'post5' => ['name' => 'Welcome post 5', 'desc' => 'decryption post 5'],
            'post6' => ['name' => 'Welcome post 6', 'desc' => 'decryption post 6'],
        ];

        if (in_array($post, array_keys($posts))) {

            return view('blog.show', ['post' => $posts[$post]]);
        }else
            abort(404);

    }
}
