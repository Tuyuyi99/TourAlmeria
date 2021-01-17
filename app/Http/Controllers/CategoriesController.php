<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Categories;

class CategoriesController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id){
        $category = Categories::find($id);
        return view("admin", $category);
    }

    public function showAll(){
        $CategoriesList = Categories::all();
        $data["CategoriesList"] = $CategoriesList;
        return view("admin", $data);
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
