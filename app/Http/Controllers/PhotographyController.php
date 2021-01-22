<?php

namespace App\Http\Controllers;

use App\Models\Photography;
use Illuminate\Http\Request;

class PhotographyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $PhotographyList = Photography::all();
        $data['PhotographyList'] = $PhotographyList;
        return view("admin/admin", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin/photographyForm");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $photography = new Photography($request);
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
        $Photography = Photography::find($id);
        return view("admin/admin", $Photography);
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
        return view('admin/photographyForm', array('photography' => $photography));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photography  $photography
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photography = Photography::find($request->id);
        $photography->image = $request->image;
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
