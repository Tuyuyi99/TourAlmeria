<?php

namespace App\Http\Controllers;

use App\Models\Photography;
use App\Models\Establishment;
use Illuminate\Http\Request;


class PhotographyController extends Controller
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
        $photographyList = Photography::all();
        $data['photographyList'] = $photographyList;
        return view("admin/admin", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $establishmentList = Establishment::all();
        return view("admin/establishmentPhotographyForm", ['establishmentList' => $establishmentList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photography = new Photography();
        $photography->image = $request->image;
        $photography->id_establishment = $request->id_establishment;
        $image = $request->image;
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('assets/img/establishments/'), $imageName);
        $photography->image = $imageName;
        $photography->save();
        return redirect()->route("establishment.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photography = Photography::find($id);
        return view("admin/admin", $photography);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photography = Photography::find($id);
        $establishmentList = Establishment::all();
        $data["establishmentList"] = $establishmentList;
        $data["photography"] = $photography;
        return view('admin/photographyForm', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $photography = Photography::find($request->id);
        $photography->image = $request->image;
        $photography->id_establishment = $request->id_establishment;
        $photography->save();
        return redirect()->route("establishment.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photography = Photography::find($id);
        $photography->delete();
        return redirect()->route("establishment.index");
    }
}
