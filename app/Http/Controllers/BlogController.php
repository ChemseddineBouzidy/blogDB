<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function createblog(){
        return view("post.createblog");
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
    
        $Blog = Blog::paginate(13);
     
        return view('post.allblogs',compact('Blog'));
     
    }
    public function show(Blog $Blog)
    {

        return view('post.show', compact('Blog'));
    }
 
}
