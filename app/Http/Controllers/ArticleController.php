<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

class ArticleController extends Controller
{ 
    public function index(){
        
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }
        
        return view('articles', [
            "title" => "All Article " .$title,
            "active" => "article",
            "rows" => Article::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString(),
        ]);
    }

    public function show(Article $articleModel){
        return view('article', [
            "title" => "Single Article",
            "active" => "article",
            "row" => $articleModel,
        ]);
    }
}
