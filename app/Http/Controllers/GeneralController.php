<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Establishment;
use App\Models\Photography;

class GeneralController extends Controller
{
 
    public function getAdmin(){
        return view("admin/admin");
    }

    public function getMain(){
        $categoriesList = Category::all();
        $establishmentList = Establishment::all();
        $photographyList = Photography::all();
        $data["categoriesList"] = $categoriesList;
        $data["establishmentList"] = $establishmentList;
        $data["photographyList"] = $photographyList;
        return view("front/main", $data);
    }

}
