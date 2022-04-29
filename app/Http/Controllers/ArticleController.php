<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function show($path)
    {
        return Article::find($path);
    }

    public function store(Request $request)
    {
        return Article::create($request->all());
    }


    public function update(Request $request, $path)
    {
        $article = Article::findOrFail($path);
        $article->update($request->all());

        return $article;
    }


    public function delete(Request $request, $path)
    {
        $article = Article::findOrFail($path);
        $article->delete();

        return 204;
    }
}
