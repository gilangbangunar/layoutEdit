<?php

namespace App\Http\Controllers;

use App\Models\slider;
use App\Models\tabel_menubar;
use App\Models\feature;
use App\Models\service;
use App\Models\testimoni;
use App\Models\galleri;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = slider::all();
        $menu = tabel_menubar::all();
        $feature = feature::orderBy('id','DESC')->where('status',1)->limit(3)->get();
        $service = service::where('status',1)->limit(4)->get();
        $testimoni = testimoni::where('status',1)->get();
        $galleri = galleri::all()->where('status',1);
        
        // dd($data);
        return view('index',compact('data', 'menu', 'service', 'feature','testimoni','galleri'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(slider $slider)
    {
        //
    }
}
