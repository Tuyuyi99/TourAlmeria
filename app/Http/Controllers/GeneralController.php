<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Establishment;
use App\Models\Photography;

class GeneralController extends Controller
{
    public function __construct(){
        $this->middleware("auth")->except("getMain");
    }
    
 
    public function getAdmin(){
        return redirect()->route('user.index');
    }

    public function getMain(){
        $categoriesList = Category::all();
        $establishmentList = Establishment::all();
        $data["categoriesList"] = $categoriesList;
        $data["establishmentList"] = $establishmentList;
        return view("front/main", $data);
    }

}
