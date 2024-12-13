<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function createblog(){
        $Category = Category::paginate(9);
        return view("post.createblog",compact("Category"));
    }

    public function storeblog(BlogRequest $request){
        
         // Validate the form input
         $formFields = $request->validated();
         $fileName =$request->file('image')->store('blog','public');
         $formFields['image'] = $fileName;
        // Insert data into the database using Eloquent
        Blog::create($formFields);
   
        return redirect()->route('post.createblog' )->with('success','Votre compte est bien cree' );
    }
    

// view all blog
    public function index()
    {
        $Category = Category::paginate(9);
        $Blog = Blog::paginate(9);
     
        return view('post.allblogs',compact('Blog','Category'));
     
    }
    public function show(Blog $Blog)
    {

        return view('post.show', compact('Blog'));
    }
    public function news()
    {
   
        $Blognews = Blog::paginate(9);
     
        return view('post.news',compact('Blognews'));
     
    }
}
