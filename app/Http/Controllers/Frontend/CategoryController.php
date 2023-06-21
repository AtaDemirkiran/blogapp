<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $categories = Category::orderBy('id')->get();

        return view('frontend.category.index',compact('categories'));

    }

    public function detail($slug,$id){

        $category = Category::where('id',$id)
        ->where('slug', $slug)
        ->first();


        $blogs = Blog::where('category_id', $id)->take(10)->get();


        return view ('frontend.category.detail',compact('category','blogs'));

    }
}
