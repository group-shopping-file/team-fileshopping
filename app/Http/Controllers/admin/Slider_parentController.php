<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\SliderParent;
use Illuminate\Http\Request;

class Slider_parentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $parents = SliderParent::latest()->paginate(10);
      return view('admin.sliderparent.index', compact('parents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliderparent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate(request(),[
        'name'=>'required',
        'en_name'=>'required',
        // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);
      $parent = SliderParent::create([
        'name'=>$request['name'],
        'en_name'=>$request['en_name'],
      ]);
      return redirect(route('sliderparent.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SliderParent  $sliderParent
     * @return \Illuminate\Http\Response
     */
    public function show(SliderParent $sliderParent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SliderParent  $sliderParent
     * @return \Illuminate\Http\Response
     */
    public function edit(SliderParent $sliderParent)
    {
        return view('admin.sliderparent.edit', compact('sliderParent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SliderParent  $sliderParent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SliderParent $sliderParent)
    {
      $data = $request->all();
      $sliderParent->update($data);
      return redirect(route('sliderparent.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SliderParent  $sliderParent
     * @return \Illuminate\Http\Response
     */
    public function destroy(SliderParent $sliderParent)
    {
      $sliderParent->delete();

      return redirect(route('sliderparent.index'));
    }
}
