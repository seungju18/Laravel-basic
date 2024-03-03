<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function create(){
        return view('articles/create');
    }

    public function store(Request $request){
            //비어있지않고, 문자열이고, 255자를 넘으면 안된다는 규칙을 적용
    $input = $request->validate([
        'body' => ['required', 'string', 'max : 255'],
    ]);
    // querybuilder 방식
    // DB::table('articles')->insert([
    //     'body' => $input['body'],
    //     'user_id' => Auth::id(),
    // ]);
    Article::create([
        'body' => $input['body'],
        'user_id' => Auth::id()
    ]);
    return redirect()->route('articles.index');
    }

    public function index(Request $request){
        $perPage = $request->input('per_page', 2);
        $articles = Article::with('user')->latest()->paginate($perPage);
        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article){
        return view('articles.edit', ['article' => $article]);
    }

    public function edit(Article $article){
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request, Article $article){
        $input = $request->validate([
        'body' => [
            'required',
            'string',
            'max:255'
            ],
        ]);
        $article->body = $input['body'];
        $article->save();
        return redirect()->route('articles.index');
    }

    public function destroy(Article $article){
        $article->delete();
        return redirect()->route('articles.index');
    }
}
