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
            <img src="{{URL::asset('assets/img/farouk/head6.png')}}" style="width: 1150px">

      </div>





            <div class="col-md-9 m-auto">
                <div class="my-5 d-flex justify-content-between">
                    <h3 class="font-weight-bold">اختر واحدة من باقات التشطيب</h3>
                    <h3 class="font-weight-bold">Choose one of our finishing packages</h3>
                </div>
                 <div class="row justify-content-center">

                    <div class="col-xl-2 col-md-2 col-10">
                        <div class="card card-defualt choose-card" style="border-radius: 15px;" >

                          <form action="{{route('pagesixstore')}}" method="post">
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
                              <input type="hidden" name="Personal" value="{{$parameters['Personal']}}">
                              <input type="hidden" name="rent" value="{{$parameters['rent']}}">
                              <input type="hidden" name="Sale" value="{{$parameters['Sale']}}">



                            <div class="card-body p-0">

                                <img class="img-fluid px-0" src="{{URL::asset('assets/img/farouk/bronze.jpg')}}" alt="" style="border-radius: 60px 60px 5px 5px;">
                                <div class="text-center">

                                    <h4 class="my-2">
                                        الباقة الاقتصادية
                                    </h4>
                                    <input type="hidden" name="economical" value="الباقة الاقتصادية">
                                    <input type="hidden" name="average" >
                                    <input type="hidden" name="vip" >
                                    <input type="hidden" name="ultra_vip" >
                                    <input type="hidden" name="super_ultra_vip" >
                                    <input type="hidden" name="amount" value=2000  >




                                    <button  type="submit" class="btn btn-success"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                      تأكيد
                                    </button>

                                      <hr>
                                      <a href="{{ route('data1') }}">
                                      <button type="button" class="btn btn-primary">التفاصيل</button>
                                      </a>
                                      <hr>
                                </div>
                            </div>
                          </form>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-2 col-10">
                        <div class="card card-defualt choose-card" style="border-radius: 15px;" >


                          <form action="{{route('pagesixstore')}}" method="post">
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
                              <input type="hidden" name="Personal" value="{{$parameters['Personal']}}">
                              <input type="hidden" name="rent" value="{{$parameters['rent']}}">
                              <input type="hidden" name="Sale" value="{{$parameters['Sale']}}">


                            <div class="card-body p-0">
                                <img class="img-fluid px-0" src="{{URL::asset('assets/img/farouk/silver.jpg')}}" alt="" style="border-radius: 60px 60px 5px 5px;">
                                <div class="text-center">
                                    <h4 class="my-2">
                                        الباقة المتوسطة
                                    </h4>
                                    <input type="hidden" name="economical" >
                                    <input type="hidden" name="average" value="الباقة المتوسطه" >
                                    <input type="hidden" name="vip" >
                                    <input type="hidden" name="ultra_vip" >
                                    <input type="hidden" name="super_ultra_vip" >
                                    <input type="hidden" name="amount" value=2700  >
                                    <button type="sumbit" class="btn btn-success"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                      تأكيد
                                    </button>
                                      <hr>
                                      <a href="{{ route('data2') }}">
                                      <button type="button" class="btn btn-primary">التفاصيل</button>
                                      </a>
                                      <hr>

                                </div>
                            </div>
                          </form>
                        </div>
                    </div>

                    <div class="col-xl-2 col-md-2 col-10">
                        <div class="card card-defualt choose-card" style="border-radius: 15px;" >


                          <form action="{{route('pagesixstore')}}" method="post">
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
                              <input type="hidden" name="Personal" value="{{$parameters['Personal']}}">
                              <input type="hidden" name="rent" value="{{$parameters['rent']}}">
                              <input type="hidden" name="Sale" value="{{$parameters['Sale']}}">



                            <div class="card-body p-0">
                                <img class="img-fluid px-0" src="{{URL::asset('assets/img/farouk/gold.jpg')}}" alt="" style="border-radius: 60px 60px 5px 5px;">
                                <div class="text-center">
                                    <h4 class="my-2">
                                    باقة
                                    </h4>
                                    <h4 class="my-2">
                                         VIP
                                    </h4>
                                    <input type="hidden" name="economical" >
                                    <input type="hidden" name="average" >
                                    <input type="hidden" name="vip" value="باقة VIP" >
                                    <input type="hidden" name="ultra_vip" >
                                    <input type="hidden" name="super_ultra_vip" >
                                    <input type="hidden" name="amount" value=3400  >
                                    <button type="submit" class="btn btn-success"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                      تأكيد
                                    </button>
                                      <hr>
                                      <a href="{{ route('data3') }}">
                                      <button type="button" class="btn btn-primary">التفاصيل</button>
                                      </a>
                                      <hr>

                                </div>
                            </div>
                          </form>
                        </div>
                    </div>


                    <div class="col-xl-2 col-md-2 col-10">
                      <div class="card card-defualt choose-card" style="border-radius: 15px;" >

                          <form action="{{route('pagesixstore')}}" method="post">
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
                              <input type="hidden" name="Personal" value="{{$parameters['Personal']}}">
                              <input type="hidden" name="rent" value="{{$parameters['rent']}}">
                              <input type="hidden" name="Sale" value="{{$parameters['Sale']}}">
                          <div class="card-body p-0">
                              <img class="img-fluid px-0" src="{{URL::asset('assets/img/farouk/gold - copy.jpg')}}" alt="" style="border-radius: 60px 60px 5px 5px;">
                              <div class="text-center">
                                <h4 class="my-2">
                                     باقة
                                  </h4>
                                  <h4 class="my-2">
                                    ULTRA VIP
                                  </h4>
                                  <input type="hidden" name="economical" >
                                  <input type="hidden" name="average" >
                                  <input type="hidden" name="vip"  >
                                  <input type="hidden" name="ultra_vip" value="Ultra Vip" >
                                  <input type="hidden" name="super_ultra_vip" >
                                  <input type="hidden" name="amount" value=4100  >
                                  <button type="submit" class="btn btn-success"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                      تأكيد
                                    </button>
                                      <hr>
                                      <a href="{{ route('data4') }}">
                                      <button type="button" class="btn btn-primary">التفاصيل</button>
                                      </a>
                                      <hr>

                              </div>
                          </div>
                      </form>
                      </div>
                  </div>


                    <div class="col-xl-2 col-md-2 col-10" >
                        <div class="card card-defualt choose-card" style="border-radius: 15px;"  >


                          <form action="{{route('pagesixstore')}}" method="post">
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
                              <input type="hidden" name="Personal" value="{{$parameters['Personal']}}">
                              <input type="hidden" name="rent" value="{{$parameters['rent']}}">
                              <input type="hidden" name="Sale" value="{{$parameters['Sale']}}">

                            <div class="card-body p-0">
                                <img class="img-fluid px-0" src="{{URL::asset('assets/img/farouk/platinum.jpg')}}"  style="border-radius: 60px 60px 5px 5px;">
                                <div class="text-center">
                                    <h4 class="my-2">
                                         SUPER Ultra VIP
                                    </h4>
                                    <input type="hidden" name="economical" >
                                    <input type="hidden" name="average" >
                                    <input type="hidden" name="vip"  >
                                    <input type="hidden" name="ultra_vip"  >
                                    <input type="hidden" name="amount" value=5000  >
                                    <input type="hidden" name="super_ultra_vip" value="Super Ultra Vip" >
                                  <button type="submit" class="btn btn-success"style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                                    تأكيد
                                  </button>
                                    <hr>
                                    <a href="{{ route('data5') }}">
                                    <button type="button" class="btn btn-primary">التفاصيل</button>
                                    </a>
                                    <hr>

                                </div>
                            </div>
                          </form>
                        </div>
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
