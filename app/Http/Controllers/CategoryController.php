<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categoriesList = Category::all();
        $data["categoriesList"] = $categoriesList;
        return view("admin/admin", $data);
    }

    public function create(){
        return view('admin/categoryForm');
    }

    public function store(Request $request){
        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index');
    }

    public function show($id){
        $category = Category::find($id);
        return view("admin/admin", ["categoriesList" => $category]);
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin/categoryForm', array('category' => $category));
    }

    public function update(Request $request){
        $category = Category::find($request->id);
        $category->name = $request->name;
        $category->save();
        return redirect()->route('category.index');
    }

    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.index');
    }
}
