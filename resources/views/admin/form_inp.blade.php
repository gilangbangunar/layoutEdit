@extends('main')
@section('content')
<div class='row'>
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Pengajuan Cuti</h5>
            <div class="card-body">
                <form id="form" data-parsley-validate="" novalidate="" action="{{ '/inputCuti' }}" method="POST">
                @csrf
                @foreach ($inpdata as $item)
                    <div class="form-group row">
                        <label for="inputPassword2" class="col-3 col-lg-3 col-form-label text-right">{{$item->name}}</label>
                        <div class="col-9 col-lg-9">
                            <input name="tanggal_mulai_cuti" id="tanggal_mulai_cuti" type="date" required="" placeholder="Tanggal Mulai Cuti" class="form-control" required>
                        </div>
                    </div>
                @endforeach
                    <div class="row pt-2 pt-sm-5 mt-1">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            <!-- <label class="be-checkbox custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                            </label> -->
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>    
    
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