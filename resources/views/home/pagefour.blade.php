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
            <img src="{{URL::asset('assets/img/farouk/head4.png')}}" style="width: 1150px">

      </div>


        <div class="col-md-10 m-auto">
            <div class="my-5 d-flex justify-content-between">
                <h4 class="font-weight-bold">والأن أخبرنا عن الحالة الحالية للوحدة</h4>
                <h4 class="font-weight-bold">Now tell us about the current state of the unit</h4>
            </div>


        <form action="{{route('pagefourstore')}}" method="post">
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



                       <div class="row justify-content-center ">

                          <div class="col-xl-3 col-md-4 col-10 ">
                              <div class="card card-defualt choose-card ">
                                  <div class="card-body p-0 ">

                                        <button type="submit " >
                                      <img class="img-fluid px-0  " src="{{URL::asset('assets/img/farouk/form-08.png')}}" alt="" style="border-radius: 60px 60px 5px 5px;">
                                      <div class="text-center">

                                        <h4 class="my-4" name="red_bricks">
                                          طوب احمر
                                        </h4>



                                        <input type="hidden" name="red_bricks" value="طوب احمر" class=" center" readonly>
                                        <input type="hidden" name="semi_finished"  class=" center" readonly>
                                        <input type="hidden" name="Semi_finished_alumetal"  class=" center" readonly>

                                      </div>

                                       </button>
                                    </form>
                                  </div>
                              </div>
                          </div>






                          <div class="col-xl-3 col-md-4 col-10">
                              <div class="card card-defualt choose-card" >
                                  <div class="card-body p-0">
                                    <form action="{{route('pagefourstore')}}" method="post">
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

                                        <button type="submit" >
                                      <img class="img-fluid px-0" src="{{URL::asset('assets/img/farouk/form-07.png')}}" alt="" style="border-radius: 60px 60px 5px 5px;">
                                      <div class="text-center">
                                        <h4 class="my-4">
                                            نصف تشطيب
                                        </h4>
                                        <input type="hidden" name="semi_finished" value="نصف تشطيب  " class=" center" readonly>
                                        <input type="hidden" name="red_bricks" class=" center" readonly>
                                        <input type="hidden" name="Semi_finished_alumetal"  class=" center" readonly>
                                      </div>
                                        </button>
                                    </form>
                                  </div>
                              </div>
                          </div>

                          <div class="col-xl-3 col-md-4 col-10">
                              <div class="card card-defualt choose-card">
                                  <div class="card-body p-0">

                                    <form action="{{route('pagefourstore')}}" method="post">
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

                                        <button type="submit" >
                                      <img class="img-fluid px-0" src="{{URL::asset('assets/img/farouk/form-06.png')}}" alt="" style="border-radius: 60px 60px 5px 5px;">
                                      <div class="text-center">
                                          <h4 class="my-4">
                                              نصف تشطيب مع ألوميتال
                                          </h4>
                                          <input type="hidden" name="Semi_finished_alumetal" value="نصف تشطيب مع ألوميتال  " class=" center" readonly>
                                          <input type="hidden" name="red_bricks"  class=" center" readonly>
                                        <input type="hidden" name="semi_finished" class=" center" readonly>

                                      </div>
                                        </button>
                                    </form>
                                  </div>
                              </div>
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
