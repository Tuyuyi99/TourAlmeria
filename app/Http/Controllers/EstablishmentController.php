<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establishment;
use App\Models\Category;
use App\Models\Photography;

class EstablishmentController extends Controller
{
    
    public function __construct(){
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $establishmentList = Establishment::all();
        $photographyList = Photography::all();
        $categoriesList = Category::all();
        
        $data['establishmentList'] = $establishmentList;
        $data['categoriesListEstablishment'] = $categoriesList;
        $data['photographyListEstablishment'] = $photographyList;
        return view("admin/admin", $data);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $categories = Category::all();
        return view('admin/establishmentForm', ['categoriesList' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $establishment = new Establishment();
        $establishment->name = $request->name;
        $establishment->description = $request->description;
        $establishment->address = $request->address;
        $establishment->google_maps = $request->google_maps;
        $establishment->outstanding = $request->outstanding;
        $establishment->id_category = $request->id_category;
        $establishment->save();
        return redirect()->route('establishment.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $establishment = Establishment::find($id);
        return view("admin/admin", $establishment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $establishment = Establishment::find($id);
        $categories = Category::all();
        $data["establishment"] = $establishment;
        $data["categoriesList"] = $categories;
        return view('admin/establishmentForm', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request){
        $establishment = Establishment::find($request->id);
        $establishment->name = $request->name;
        $establishment->description = $request->description;
        $establishment->address = $request->address;
        $establishment->google_maps = $request->google_maps;
        $establishment->outstanding = $request->outstanding;
        $establishment->id_category = $request->id_category;
        $establishment->save();
        return redirect()->route('establishment.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Establishment  $establishment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $establishment = Establishment::find($id);
        $establishment->delete();
        return redirect()->route('establishment.index');
    }
}
