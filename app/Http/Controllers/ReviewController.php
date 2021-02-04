<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Establishment;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $establishmentList = Establishment::all();
        $reviewList = Review::all();
        $data["reviewList"] = $reviewList;
        $data["establishmentListReview"] = $establishmentList;
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
        return view('admin/reviewForm', ['establishmentList' => $establishmentList]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new Review();
        $review->name = $request->name;
        $review->rating = $request->rating;
        $review->commentary = $request->commentary;
        $review->id_establishment = $request->id_establishment;
        $review->save();
        return redirect()->route('review.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $review = Review::find($id);
        return view("admin/admin", $review);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        $establishmentList = Establishment::all();
        $data["establishmentList"] = $establishmentList;
        $data["review"] = $review;
        return view('admin/reviewForm', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $review = Review::find($request->id);
        $review->name = $request->name;
        $review->rating = $request->rating;
        $review->commentary = $request->commentary;
        $review->id_establishment = $request->id_establishment;
        $review->save();
        return redirect()->route('review.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();
        return redirect()->route('review.index');
    }
}
