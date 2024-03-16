<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\slider;

class DashboardController extends Controller
{
    public function slider(Request $request){
        if ($request->session()->has('name')) {
            switch($request->id) {
                case(1):

                    $data = slider::get();
                    // $msg = 'Post successfully saved.';
                    return view('admin/dsb_slider',compact('data'));

                    // break;
            }
        }
    }

    public function tambah(Request $request){
        if ($request->session()->has('name')) {
            switch ($request->identity) {
                case '1':
                    $inpdata = [
                        'name' => [
                            'img', 'deskripsi', 'title', 'status'
                        ],
                        'type'=> [
                            'img', 'text', 'text', 'status'
                        ]
                    ];
            }
        }
        return view('admin/form_inp',compact('inpdata'));
    }
}
