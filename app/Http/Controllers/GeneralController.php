<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Establishment;
use App\Models\Photography;

class GeneralController extends Controller {

    public function __construct(){
        $this->middleware("auth")->except("getMain", "getMainPage", "getMainBaresRestaurantes", "getMainHoteles", "getMainMuseos", "getMainTurismo");
    }
    
 
    public function getAdmin(){
        return redirect()->route('user.index');
    }

    public function getMain(){
        $categoriesList = Category::all();
        $establishmentList = Establishment::where('outstanding', '=', "no")->take(10)->get();
        $establishmentListOutstanding = Establishment::where('outstanding', '=', "yes")->get();
        $data["categoriesList"] = $categoriesList;
        $data["establishmentList"] = $establishmentList;
        $data["establishmentListOutstanding"] = $establishmentListOutstanding;
        return view("front/main", $data);
    }

    public function getMainPage($skips, $takes, $category){
        if($category == "all"){
            $establishmentList = Establishment::where('outstanding', '=', "no")->skip($skips)->take($takes)->with("photography")->get();
        }
        else{
            $establishmentList = Establishment::where('outstanding', '=', "no")->where("id_category", "=", $category)->skip($skips)->take($takes)->with("photography")->get();
        }
        /* Se trae los establecimientos con sus imagenes con with */
        return $establishmentList;
    }

    public function getMainBaresRestaurantes(){
        $categoriesList = Category::all();
        $establishmentList = Establishment::where('outstanding', '=', "no")->where("id_category", "=", "1")->take(10)->get();
        $establishmentListOutstanding = Establishment::where('outstanding', '=', "yes")->where("id_category", "=", "1")->get();
        $data["categoriesList"] = $categoriesList;
        $data["establishmentList"] = $establishmentList;
        $data["establishmentListOutstanding"] = $establishmentListOutstanding;
        return view("front/main", $data);
    }

    public function getMainHoteles(){
        $categoriesList = Category::all();
        $establishmentList = Establishment::where('outstanding', '=', "no")->where("id_category", "=", "2")->take(10)->get();
        $establishmentListOutstanding = Establishment::where('outstanding', '=', "yes")->where("id_category", "=", "2")->get();
        $data["categoriesList"] = $categoriesList;
        $data["establishmentList"] = $establishmentList;
        $data["establishmentListOutstanding"] = $establishmentListOutstanding;
        return view("front/main", $data);
    }

    public function getMainMuseos(){
        $categoriesList = Category::all();
        $establishmentList = Establishment::where('outstanding', '=', "no")->where("id_category", "=", "3")->take(10)->get();
        $establishmentListOutstanding = Establishment::where('outstanding', '=', "yes")->where("id_category", "=", "3")->get();
        $data["categoriesList"] = $categoriesList;
        $data["establishmentList"] = $establishmentList;
        $data["establishmentListOutstanding"] = $establishmentListOutstanding;
        return view("front/main", $data);
    }

    public function getMainTurismo(){
        $categoriesList = Category::all();
        $establishmentList = Establishment::where('outstanding', '=', "no")->where("id_category", "=", "4")->take(10)->get();
        $establishmentListOutstanding = Establishment::where('outstanding', '=', "yes")->where("id_category", "=", "4")->get();
        $data["categoriesList"] = $categoriesList;
        $data["establishmentList"] = $establishmentList;
        $data["establishmentListOutstanding"] = $establishmentListOutstanding;
        return view("front/main", $data);
    }

}
