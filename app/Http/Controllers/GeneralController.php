<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
 
    public function getAdmin(){
        return view("admin/admin");
    }

    public function getMain(){
        return view("front/main");
    }

}
