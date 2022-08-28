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
            <img src="{{URL::asset('assets/img/farouk/head5.png')}}" style="width: 1150px">

      </div>

      <div class="col-md-10 m-auto">
        <div class="my-5 d-flex justify-content-between">
            <h4 class="font-weight-bold">ما هو الغرض من التشطيب</h4>
            <h4 class="font-weight-bold">What is the purpose of finishing</h4>
        </div>

    <div class="card-body mt-3 text-center" id="card-body">

        <div class="row justify-content-center">

            <div class="col-xl-3 col-md-4 col-10">
                <div class="card card-defualt choose-card" >
                    <div class="card-body px-3">
                      <form action="{{route('pagefivestore')}}" method="post">
                          {{csrf_field()}}

                          <input type="hidden" name="email" value="{{$parameters['email']}}">
                          <input type="hidden" name="phone" value="{{$parameters['phone']}}">
                          <input type="hidden" name="name" value="{{$parameters['name']}}">
                          <input type="hidden" name="unit_type" value="{{$parameters['unit_type']}}">
                          <input type="hidden" name="location" value="{{$parameters['location']}}">
                          <input type="hidden" name="compound" value="{{$parameters['compound']}}">
                          <input type="hidden" name="compound_name" value="{{$parameters['compound_name']}}">
                          <input type="hidden" name="area" value="{{$parameters['area']}}">
                          <input type="hidden" name="room" value="{{$parameters['room']}}">
                          <input type="hidden" name="bathroom" value="{{$parameters['bathroom']}}">
                          <input type="hidden" name="nots" value="{{$parameters['nots']}}">
                          <input type="hidden" name="red_bricks" value="{{$parameters['red_bricks']}}">
                          <input type="hidden" name="semi_finished" value="{{$parameters['semi_finished']}}">
                          <input type="hidden" name="Semi_finished_alumetal" value="{{$parameters['Semi_finished_alumetal']}}">
                      <button type="submit" >
                        <img class="img-fluid px-4" style="width: 500px" src="{{URL::asset('assets/img/farouk/form-11.png')}}" alt="">
                        <div class="text-center">
                            <h4 class="mt-2">
                                للإستخدام الشخصي
                            </h4>
<input type="hidden" name="Personal" value=" للإستخدام الشخصي" class=" center" readonly>
<input type="hidden" name="rent" class=" center" readonly>
<input type="hidden" name="Sale"class=" center" readonly>
                            <div class="my-2">
                            </div>
                        </div>
                      </button>

                  </form>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4 col-10">
                <div class="card card-defualt choose-card">
                    <div class="card-body px-3">
                      <form action="{{route('pagefivestore')}}" method="post">
                          {{csrf_field()}}

                          <input type="hidden" name="email" value="{{$parameters['email']}}">
                          <input type="hidden" name="phone" value="{{$parameters['phone']}}">
                          <input type="hidden" name="name" value="{{$parameters['name']}}">
                          <input type="hidden" name="unit_type" value="{{$parameters['unit_type']}}">
                          <input type="hidden" name="location" value="{{$parameters['location']}}">
                          <input type="hidden" name="compound" value="{{$parameters['compound']}}">
                          <input type="hidden" name="compound_name" value="{{$parameters['compound_name']}}">
                          <input type="hidden" name="area" value="{{$parameters['area']}}">
                          <input type="hidden" name="room" value="{{$parameters['room']}}">
                          <input type="hidden" name="bathroom" value="{{$parameters['bathroom']}}">
                          <input type="hidden" name="nots" value="{{$parameters['nots']}}">
                          <input type="hidden" name="red_bricks" value="{{$parameters['red_bricks']}}">
                          <input type="hidden" name="semi_finished" value="{{$parameters['semi_finished']}}">
                          <input type="hidden" name="Semi_finished_alumetal" value="{{$parameters['Semi_finished_alumetal']}}">
                      <button type="submit" >
                        <img class="img-fluid px-4" style="width: 500px" src="{{URL::asset('assets/img/farouk/form-10.png')}}" alt="" style="width: 130px;">
                        <div class="text-center">
                            <h4 class="mt-2">
                                بغرض الايجار
                            </h4>

<input type="hidden" name="Personal" class=" center" readonly>
<input type="hidden" name="rent" value="بغرض الايجار" class=" center" readonly>
<input type="hidden" name="Sale" class=" center" readonly>

                            <div class="my-2">
                            </div>
                        </div>

                      </button>

                  </form>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-4 col-10">
                <div class="card card-defualt choose-card" >
                    <div class="card-body px-3 ">

                      <form action="{{route('pagefivestore')}}" method="post">
                          {{csrf_field()}}

                          <input type="hidden" name="email" value="{{$parameters['email']}}">
                          <input type="hidden" name="phone" value="{{$parameters['phone']}}">
                          <input type="hidden" name="name" value="{{$parameters['name']}}">
                          <input type="hidden" name="unit_type" value="{{$parameters['unit_type']}}">
                          <input type="hidden" name="location" value="{{$parameters['location']}}">
                          <input type="hidden" name="compound" value="{{$parameters['compound']}}">
                          <input type="hidden" name="compound_name" value="{{$parameters['compound_name']}}">
                          <input type="hidden" name="area" value="{{$parameters['area']}}">
                          <input type="hidden" name="room" value="{{$parameters['room']}}">
                          <input type="hidden" name="bathroom" value="{{$parameters['bathroom']}}">
                          <input type="hidden" name="nots" value="{{$parameters['nots']}}">
                          <input type="hidden" name="red_bricks" value="{{$parameters['red_bricks']}}">
                          <input type="hidden" name="semi_finished" value="{{$parameters['semi_finished']}}">
                          <input type="hidden" name="Semi_finished_alumetal" value="{{$parameters['Semi_finished_alumetal']}}">
                      <button type="submit" >
                        <img class="img-fluid px-4" style="width: 500px" src="{{URL::asset('assets/img/farouk/form-09.png')}}" alt="" style="width: 160px;">
                        <div class="text-center">
                            <h4 class="mt-2">
                                اعادة البيع
                            </h4>


<input type="hidden" name="Personal"  class=" center" readonly>
<input type="hidden" name="rent"   class=" center" readonly>
<input type="hidden" name="Sale" value="  اعاده البيع " class=" center" readonly>


                            <div class="my-2">
                            </div>
                        </div>
                      </button>

                  </form>
                    </div>
                </div>
            </div>

        </div>
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
