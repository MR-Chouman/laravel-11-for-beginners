<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::where('category_id', request('category_id'))->latest()->get();
        return view('home', compact('categories', 'posts'));
    }
}
