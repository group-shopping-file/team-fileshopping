<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\Category;
use App\Product;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::where('sliderparent_id', 1)->get();
        $categories = Category::where('chid', 0)->get();
        // $bests = Product::get();
        $specials = Product::where('special', 1)->get();
        $bestsellers = Product::orderBy('sales_number', 'desc')->get();
        $favorites = Product::orderBy('download_number', 'desc')->get();
        $banners = Slider::where('sliderparent_id', 3)->get();
        $education = Category::where('en_name', 'Education')->first();
        $educations = Category::where('chid', $education->id)->get();
        // var_dump($educations);die;
        $newests = Product::orderBy('created_at', 'desc')->get();
        // dd($technologies);
        return view('welcome', compact('specials','sliders', 'categories', 'bestsellers', 'favorites', 'banners', 'educations', 'newests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
