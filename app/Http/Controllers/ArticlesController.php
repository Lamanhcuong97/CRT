<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Article;
use Request;
use App\Http\Requests\ArticleRequest;

// use  Illuminate\Database\Query\Builder;

class ArticlesController extends Controller
{
  public function __construct(){
    $this->middleware('auth', ['except'=>['index', 'show', 'create','store']]);
  }
    public function index(){
      $articles = Article::latest('published_at')
                                ->published()
                                ->get();
      return view('articles.index', compact('articles'));
    }

    public function show($id){
      $article = Article::find($id);
      if(empty($article))
        abort(404);
      return view('articles.show' , compact('article'));
    }

    public function create(){
      return view('articles.create');
    }

    public function store(){
      $input = Request::all();
      Article::create($input);
      return redirect('articles');
    }
}
