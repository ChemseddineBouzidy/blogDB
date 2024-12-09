<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function createcategory(){
        return view("post.createcategory");
    }
    public function storecategory(CategoryRequest $request){
         // Validate the form input
         $formFields = $request->validated();
       
        // Insert data into the database using Eloquent
        Category::create($formFields);
   
        return redirect()->route('post.createcategory' )->with('success','Votre compte est bien cree' );
    }
}
