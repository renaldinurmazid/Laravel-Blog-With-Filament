<?php

namespace App\Http\Controllers;

use App\Models\CategoryM;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\HtmlString;

class PostController extends Controller
{
    public function welcome()
    {
        $categories= CategoryM::all();
        $cleanDescriptions = [];
        foreach ($categories as $category) {
            $cleanDescription = strip_tags($category->description);
            $cleanDescriptions[$category->id] = new HtmlString($cleanDescription);
        }
        return view('welcome', [
            'posts' => Post::latest()->paginate(9),
            'categories' => $categories,
            'cleanDescriptions' => $cleanDescriptions,
        ]);
    }

    public function index()
    {
        return view('posts.index', [
            'posts' => Post::filter(request(['search', 'category', 'author']))->get(),
            'categories' => \Stephenjude\FilamentBlog\Models\Category::all()
        ]);
    }

    public function show(Post $post)
    {
        $posts = Post::latest()->paginate(4);
        return view('posts.show', [
            'post' => $post,
            'posts' => $posts
        ]);
    }
}
