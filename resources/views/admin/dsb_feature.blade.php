@extends('main')
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header">
                <h2 class="pageheader-title">Dashboard Karyawan </h2>
                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                <div class="page-breadcrumb">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end pageheader  -->
    <!-- ============================================================== -->
    <div class="ecommerce-widget">

        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Jumlah Calon Pengguna</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">12</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                            <span><i class=></i></span><span> Orang</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue"></div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">Jumlah Pengguna</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">12</h1>
                        </div>
                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                            <span><i class=></i></span><span> Orang</span>
                        </div>
                    </div>
                    <div id="sparkline-revenue2"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- ============================================================== -->
        
            <!-- ============================================================== -->

                            <!-- recent orders  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                <div class="card" align="center">
                    <h5 class="card-header">Kelola Feature</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table" style="text-align: center">
                                <thead class="bg-light">
                                    <tr class="border-0">
                                        <th class="border-0">No</th>
                                        <th class="border-0">Img</th>
                                        <th class="border-0">Deskripsi</th>
                                        <th class="border-0">Title</th>
                                        <th class="border-0">Href</th>
                                        <th class="border-0">Status</th>
                                        <th class="border-0 text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                        <td width="5%">{{ $loop->iteration}}</td>
                                        <td style="width:20%"><img style="border-radius:10px;" width="70%" src="{{ asset($d->path_img)}}" alt=""> </td>
                                        <td style="width:20%">{{ (strlen($d->deskripsi)>20) ? substr($d->deskripsi,0,20).' ...' : $d->deskripsi}} </td>
                                        <td style="width:20%">
                                            {{ $d->title }}
                                        </td>
                                        <td style="width:20%">
                                            {{ $d->href }}
                                        </td>
                                        <td class="text-center">
                                            @if($d->status == 1)
                                            <span class="badge-dot badge-success mr-1"></span>
                                            @else
                                            <span class="badge-dot badge-danger mr-1"></span>
                                            @endif
                                        </td>
                                        <td width="15%">
                                            <button type="button" class="btn btn-primary btn-sm">Edit</button>
                                            <button type="button" class="btn btn-secondary btn-sm">Hapus</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="card-body border-top">
                            <a href="{{'/tambahfile/1'}}" class="btn btn-brand btn-block">Tambah Feature</a>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end recent orders  -->


            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- customer acquistion  -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end customer acquistion  -->
            <!-- ============================================================== -->
        </div>
        <div class="row">
            <!-- ============================================================== -->
                                    <!-- product category  -->
            <!-- ============================================================== -->

                
            </div>
            <!-- ============================================================== -->
            <!-- end product category  -->
<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<div class="footer">
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="text-md-right footer-links d-none d-sm-block">
                <a href="javascript: void(0);">About</a>
                <a href="javascript: void(0);">Support</a>
                <a href="javascript: void(0);">Contact Us</a>
            </div>
        </div>
    </div>
@endsection