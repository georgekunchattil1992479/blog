<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index(){
        return view('category.index');
    }

    public function create(){
        return view('category.create');
    }

    public function store(Request $request){
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20|min:3'
        ]);

        if($validator->fails()) {
            return redirect(/)
                 ->withInput()
                 ->withErrors($validator);
        }

        //Create Category

        $category = new Category;
        $category->name = $request->name;
        $category->save();

        Session::flash('category_create', 'New category is Created');

        return redirect('category/create');

    }
}
