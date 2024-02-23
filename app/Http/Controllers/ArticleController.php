<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return response()->json($articles);
    }
    public function create()
    {
        return response()->json;
    }

    public function edit($id)
    {
        $article = Article::findorFail($id);
        return response()->json($article);
    }
    public function show($id)
    {
        $article = Article::findorFail($id);
        return response()->json($article);
    }


    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return response()->json($article);

    }

    public function update(Request $request, $id)
    {
        $article = Article::findorFail($id);

        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        return response()->json($article);
    }

    public function delete($id)
    {
        $article = Article::findorFail($id);
        $article->delete();

        return response()->json($article);

    }
}
