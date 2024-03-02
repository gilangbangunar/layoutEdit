<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\slider;

class DashboardController extends Controller
{
    public function index(Request $request){
        if ($request->session()->has('name')) {
            $data = slider::get();
            return view('dasboard',compact('data'));
        }
    }
}
