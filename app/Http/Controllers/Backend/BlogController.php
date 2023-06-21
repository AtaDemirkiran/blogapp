<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    
    public function index()
    {
        $blogs= Blog::orderBy('id')->get();
        return view ('backend.blog.index',compact('blogs'));
    }

    public function create()
    {
        $categories = Category::all();
        return view ('backend.blog.create',compact('categories'));

    }
    
    public function store (Request $request)
    {
        $category = Category::findorFail($request->input('category_id'));
        
        
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->slug=Str::slug($blog->title);
        $blog->summary=$request->input('summary');
        $blog->description=$request->input('description'); 

         if($request->hasFile('picture')){
            $file = $request->file('picture');
            $extension = $file -> getClientOriginalExtension();
            $filename = time() . '.'. $extension;
            $file->move('uploads/blog/',$filename);
            $blog->picture=$filename;
        }

        $category->blogs()->save($blog);

        return redirect('/panel/blog')
        ->with('message','Blog Başarılı Bir Şekilde Eklendi');
        
    }

    public function edit($id)
    {
        $categories = Category::all();
        $blog = Blog::findorFail($id);

        return view ('backend.blog.edit',compact('categories','blog'));
    }

    public function update(Request $request , $id){

        // $blog = Category::findorFail($request->input('category_id'))
        //     ->blogs()
        //     ->where('id',$id)->first();
         
        $blog= Blog::findorFail($id);
         
        $blog->title = $request->input('title');
        $blog->slug=Str::slug($blog->title);
        $blog->category_id=$request->input('category');
        $blog->summary=$request->input('summary');
        $blog->description=$request->input('description');


         if($request->hasFile('picture')){
            $file = $request->file('picture');
            $extension = $file -> getClientOriginalExtension();
            $filename = time() . '.'. $extension;
            $file->move('uploads/blog/',$filename);
            $blog->picture=$filename;
        }

        $blog->update();     

        return redirect('/panel/blog')
        ->with('message','Blog Başarılı Bir Şekilde Düzenledi');

    }

        public function delete($id)
        {

            $blog = Blog::find($id);
            $blog->delete();

            return redirect('/panel/blog')
            ->with('deleteMessage','Blog Başarılı Bir Şekilde Silindi');

        }

}
