<?php

namespace App\Http\Controllers;

use App\Models\Photography;
use App\Models\Establishment;
use Illuminate\Http\Request;


class PhotographyController extends Controller
{
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
        return view("admin/photographyForm", ['establishmentList' => $establishmentList]);
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
        $photography->save();
        return redirect()->route("photography.index");
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
        return redirect()->route("photography.index");
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
        return redirect()->route("photography.index");
    }
}
