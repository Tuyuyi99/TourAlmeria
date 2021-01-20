<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $CategoriesList = Category::all();
        $data["CategoriesList"] = $CategoriesList;
        return view("admin", $data);
    }

    public function create(){
    }

    public function store(Request $request){
        
    }

    public function show($id){
        $category = Category::find($id);
        return view("admin", ["CategoriesList" => $category]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
