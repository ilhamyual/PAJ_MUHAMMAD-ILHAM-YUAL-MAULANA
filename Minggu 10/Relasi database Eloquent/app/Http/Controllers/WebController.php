<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class WebController extends Controller
{
    public function index()
    {
        $articles = Article::with('tags')->get();
        return view('article', ['articles' => $articles]);
    }
}
