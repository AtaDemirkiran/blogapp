<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::orderBy('id')->get();
        return view ('backend.category.index',compact('categories'));
    }

    public function create()
    {

        return view ('backend.category.create');

    }

    public function store (Request $request)
    {
         
        
        $category = new Category;
        $category->title = $request->input('title');
        $category->slug=Str::slug($category->title);
        $category->description=$request->input('description');

        if($request->hasFile('picture')){
            $file = $request->file('picture');
            $extension = $file -> getClientOriginalExtension();
            $filename = time() . '.'. $extension;
            $file->move('uploads/category/',$filename);
            
            $category->picture=$filename;

        }

        $category->save();

        return redirect('/panel/kategoriler')
        ->with('message','Kategori Başarılı Bir Şekilde Eklendi');
        
    }

    public function edit($id)
    {
        $category = Category::findorFail($id);

        return view ('backend.category.edit',compact('category'));
    }


    public function update(Request $request , $id){
 
         
        $category= Category::findorFail($id);
         
        $category->title = $request->input('title');
        $category->slug=Str::slug($category->title);
        $category->description=$request->input('description');


         if($request->hasFile('picture')){
            $file = $request->file('picture');
            $extension = $file -> getClientOriginalExtension();
            $filename = time() . '.'. $extension;
            $file->move('uploads/category/',$filename);
            $category->picture=$filename;
        }

        $category->update();     

        return redirect('/panel/kategoriler')
        ->with('message','Kategori Başarılı Bir Şekilde Düzenledi');

    }

    public function delete($id)
    {

        $category = Category::find($id);
        $category->delete();

        return redirect('/panel/category')
        ->with('deleteMessage','Kategori Başarılı Bir Şekilde Silindi');

    }

}
