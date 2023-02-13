<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('categories', [
            "title" => "Category",
            "active" => "categories",
            "rows" => Category::latest()->get(),
        ]);
    }

    public function show(Category $category){
        return view('articles', [
            'title' => $category->name,
            "active" => "categories",
            'rows' => $category->article,
        ]);
    }
}
