@extends('layouts.master')

@section('title')
الصفحة الرئيسية
@stop

@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				      <!-- Header -->
                      <div class="header bg-gradient-dark pb-6">
                        <div class="container-fluid">
                          <div class="header-body">
                              <div class="py-0 text-left">
                                  <img src="{{URL::asset('assets/img/farouk/form-17 - copy (3).png')}}" style="width: 300px ">

                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- End: Header -->
				<!-- /breadcrumb -->
@endsection
@section('content')


<div class="card card-defualt">
<br>
    <div class="header-body">
        <div class="py-0 text-center">
            <img src="{{URL::asset('assets/img/farouk/head.png')}}" style="width: 1150px">

      </div>

    <div class="card-body mt-3 text-center" id="card-body">

        <form action="{{route('pageonestore')}}" method="post">
            {{csrf_field()}}
            <img src="{{URL::asset('assets/img/farouk/logo.png')}}" style="width: 175px">

          <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="my-3 d-flex justify-content-between">
                    <span>الاسم</span>
                    <span>Name</span>
                </div>
                <div class="input-group mb-3 ">
                    <span class="input-group-text rounded-pill" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                    <input type="text" class="form-control rounded-pill" placeholder="الأسم" name="name" aria-label="Username" aria-describedby="basic-addon1" required="">
                </div>

                <div class="my-3 d-flex justify-content-between">
                    <span>رقم الهاتف</span>
                    <span>Phone Number</span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text rounded-pill" id="basic-addon1"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                    <input type="text" class="form-control rounded-pill" placeholder="رقم الهاتف" name="phone" aria-label="Username" aria-describedby="basic-addon1" required="">
                </div>

                <div class="my-3 d-flex justify-content-between">
                    <span>البريد الالكتروني</span>
                    <span>E-mail</span>
                </div>
                <div class="input-group mb-3 validate-input">
                    <span class="input-group-text rounded-pill" id="basic-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <input type="email" class="form-control rounded-pill" placeholder="البريد الالكتروني" name="email" aria-label="Username" aria-describedby="basic-addon1" required="">
                </div>


            </div>
          </div>

          <input type="hidden" name="step" value="1">
          <div class="card-footer my-4">
            <div class="form-group mb-0 text-left">
                <button type="submit" class="btn btn-success submit rounded-pill"><i class="fas fa-arrow-circle-left"></i>  التالي </button>
            </div>
          </div>
        </form>
    </div>

</div>








@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>
@endsection
