<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class GeneralController extends Controller
{
 
    public function getAdmin(){
        return view("admin/admin");
    }

    public function getMain(){
        $categoriesList = Category::all();
        $data["categoriesList"] = $categoriesList;
        return view("front/main", $data);
    }

}
