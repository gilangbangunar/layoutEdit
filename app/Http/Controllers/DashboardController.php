<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use App\Models\slider;
use App\Models\service;
use App\Models\feature;
use App\Models\galleri;
use App\Models\tabel_menubar;
use App\Models\testimoni;

class DashboardController extends Controller
{
    public function slider(Request $request){
        if ($request->session()->has('name')) {
            switch($request->id) {
                case(1):
                    $data = slider::get();
                    return view('admin/dsb_slider',compact('data'));
                case(2):
                    $data = service::get();
                    return view('admin/dsb_service',compact('data'));
                case(3):
                    $data = feature::get();
                    return view('admin/dsb_feature',compact('data'));
                case(4):
                    $data = galleri::get();
                    return view('admin/dsb_galleri',compact('data'));
                case(5):
                    $data = tabel_menubar::get();
                    return view('admin/dsb_menubar',compact('data'));
                case(6):
                    $data = testimoni::get();
                    return view('admin/dsb_testimoni',compact('data'));
            }
        }
    }

    public function tambah(Request $request){
        if ($request->session()->has('name')) {
            switch ($request->identity) {
                case(1):
                    $inpdata = [
                        'name' => [
                            'img', 'deskripsi', 'title', 'status'
                        ],
                        'type'=> [
                            'file', 'text', 'text', 'number'
                        ]
                    ];
                    return view('admin/form_inp',compact('inpdata'));
                case(2):
                    $inpdata = [
                        'name' => [
                            'path_icon', 'title', 'status', 'href'
                        ],
                        'type'=> [
                            'text', 'text', 'number', 'text'
                        ]
                    ];
                    return view('admin/form_inp',compact('inpdata'));   
                case(3):
                    $inpdata = [
                        'name' => [
                            'img', 'deskripsi', 'title', 'href', 'status'
                        ],
                        'type'=> [
                            'file', 'text', 'number', 'text', 'number'
                        ]
                    ];
                    return view('admin/form_inp',compact('inpdata'));
                case(4):
                    $inpdata = [
                        'name' => [
                            'img', 'title', 'deskripsi', 'status'
                        ],
                        'type'=> [
                            'file', 'text', 'text', 'number'
                        ]
                    ];
                    return view('admin/form_inp',compact('inpdata'));
                case(5):
                    $inpdata = [
                        'name' => [
                            'menu', 'parent', 'sort', 'deskripsi', 'href', 'is_parent',
                        ],
                        'type'=> [
                            'text', 'number', 'number', 'text', 'text', 'number'
                        ]
                    ];
                    return view('admin/form_inp',compact('inpdata'));
                case(6):
                    $inpdata = [
                        'name' => [
                            'name', 'desc', 'status'
                        ],
                        'type'=> [
                            'text', 'text', 'text',
                        ]
                    ];
                    return view('admin/form_inp',compact('inpdata'));
            }
        }
    }

    public function slider_proses(Request $request){
        $this->validate($request, [
            'img' => 'required',
            'deskripsi' => 'required',
            'title' => 'required',
            'status' => 'required',
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('img');

        $tujuan_upload = 'images';

        // upload file
        $file->move($tujuan_upload, $file->getClientOriginalName());
        $nama_file = "images/".$file->getClientOriginalName();
        slider::create([
            'img' => $nama_file,
            'deskripsi' => $request->deskripsi,
            'title' => $request->title,
            'status' => $request->status,
        ]);

        return redirect('/home/1');
    }
}
