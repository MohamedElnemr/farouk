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
                                  <img src="{{URL::asset('assets/img/farouk/form-17 - copy (3).png')}}" style="width: 300px">

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
            <img src="{{URL::asset('assets/img/farouk/head3.png')}}" style="width: 1150px">

      </div>

    <div class="card-body mt-3 text-center" id="card-body">

        <form action="{{route('pagethreestore')}}" method="post">
            {{csrf_field()}}


            <input type="hidden" name="email" value="{{$parameters['email']}}">
            <input type="hidden" name="phone" value="{{$parameters['phone']}}">
            <input type="hidden" name="name" value="{{$parameters['name']}}">
            <input type="hidden" name="unit_type" value="{{$parameters['unit_type']}}">
            <input type="hidden" name="location" value="{{$parameters['location']}}">
            <input type="hidden" name="compound" value="{{$parameters['compound']}}">
            <input type="hidden" name="compound_name" value="{{$parameters['compound_name']}}">


            <div class="row justify-content-center mt-4">
                <div class="col-md-8">

                    <div class="my-3 d-flex justify-content-between">
                        <h6>المساحة بالمتر</h6>
                        <h6>Area in Meters</h6>
                    </div>
                    <div class="input-group mb-3 validate-input">
                        <span class="input-group-text rounded-pill" id="basic-addon1"><i class="fas fa-square" aria-hidden="true"></i></span>
                        <input type="text" class="form-control rounded-pill" name="area" placeholder="المساحة" required="">
                    </div>



                    <div class="my-3 d-flex justify-content-between">
                        <h6>عدد الغرف</h6>
                        <h6>Number of Rooms</h6>
                    </div>
                    <div class="input-group mb-3 validate-input">
                        <span class="input-group-text rounded-pill" id="basic-addon1"><i class="fas fa-bed" aria-hidden="true"></i></span>
                        <input type="text" class="form-control rounded-pill" name="room" placeholder="الغرف" required="">
                    </div>



                    <div class="my-3 d-flex justify-content-between">
                        <h6>عدد الحمامات</h6>
                        <h6>Number of Bathrooms</h6>
                    </div>
                    <div class="input-group mb-3 validate-input">
                        <span class="input-group-text rounded-pill" id="basic-addon1"><i class="fas fa-bath" aria-hidden="true"></i></span>
                        <input type="text" class="form-control rounded-pill" name="bathroom" placeholder="الحمام" required="">
                    </div>

                    <div class="my-3 d-flex justify-content-between">
                        <h6>ملاحظات</h6>
                        <h6>Notes</h6>
                    </div>
                    <div class="input-group mb-3 validate-input">
                        <span class="input-group-text rounded-pill" id="basic-addon1"> <i class="fa fa-sticky-note" aria-hidden="true"></i></span>
                        <textarea type="text" class="form-control rounded-pill" name="nots" placeholder="الملاحظات"></textarea>
                    </div>

                </div>
            </div>



        <hr>

    <div class="modal-footer">

        <button type="submit" class="btn btn-success submit rounded-pill"><i class="fas fa-arrow-circle-left"></i>  التالي </button>

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
