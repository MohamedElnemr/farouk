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
            <img src="{{URL::asset('assets/img/farouk/head22.png')}}" style="width: 1150px">

      </div>

    <div class="card-body mt-3 text-center" id="card-body">

        <form action="{{route('pagetwostore')}}" method="post">
            {{csrf_field()}}

            <input type="hidden" name="email" value="{{$parameters['email']}}">
            <input type="hidden" name="phone" value="{{$parameters['phone']}}">
            <input type="hidden" name="name" value="{{$parameters['name']}}">


            <div class="row justify-content-center mt-4">
                <div class="col-md-8">

                    <div class="my-3 d-flex justify-content-between">
                        <h6>ما هي نوع الوحدة المراد تشطيبها ؟</h6>
                        <h6>What is the unit type</h6>
                    </div>

                <div class="input-group mb-3 validate-input">
                    <span class="input-group-text rounded-pill" id="basic-addon1"><i class="fas fa-th" aria-hidden="true"></i></span>
                    <select class="form-control rounded-pill" name="unit_type" required="">
                        <option selected="" disabled="" value="">نوع الوحدة</option>
                        <option>شقة سكنية</option>
                        <option>عمارة كاملة</option>
                        <option>مصنع</option>
                        <option>مطعم - كافية</option>
                        <option>محل تجارى</option>
                        <option>دوبلكس مع جاردن</option>
                        <option>دوبلكس مع روف</option>
                        <option>فيلا</option>
                        <option>بينت هاوس</option>
                        <option>شاليه</option>
                        <option>مكتب اداري</option>
                        <option>توين هاوس</option>
                        <option>عيادة</option>
                        <option>أستوديو</option>
                        <option>دوبلكس متكرر</option>
                      </select>
                </div>


                    <div class="my-3 d-flex justify-content-between">
                        <h6>أين تقع أو في اي مكان؟</h6>
                        <h6>Where is it located</h6>
                    </div>
                    <div class="input-group mb-3 validate-input">
                        <span class="input-group-text rounded-pill" id="basic-addon1"><i class="fa fa-map-marker-alt" aria-hidden="true"></i></span>
                        <select class="form-control rounded-pill" name="location" required="">
                            <option selected="" disabled="" value="">الموقع</option>
                            <option>مدينة 6 أكتوبر</option>
                            <option>الشروق</option>
                            <option>الرحاب</option>
                            <option>مدينة نصر</option>
                            <option>العاشر من رمضان</option>
                            <option>الجيزة</option>
                            <option>الشيخ زايد</option>
                            <option>المعادى</option>
                            <option>حدائق الاهرام</option>
                            <option>مصرالجديدة</option>
                            <option>الدقى</option>
                            <option>المهندسين</option>
                            <option>المقطم</option>
                            <option>الزمالك</option>
                            <option>الساحل الشمالى</option>
                            <option>العين السخنة</option>
                            <option>العاصمة الادارية الجديدة</option>
                            <option>العبور</option>
                            <option>حدائق أكتوبر</option>
                            <option>مدينتي</option>
                            <option>الهرم</option>
                            <option>مصر الجديدة</option>
                            <option>مدينة بدر</option>
                            <option>حلوان</option>
                            <option>المريوطية</option>
                            <option>التجمع الخامس</option>
                            <option>أخرى</option>
                        </select>

                    </div>


                    <div class="my-3 d-flex justify-content-between">
                        <h6>هل هذه الوحدة تقع داخل كومبوند سكنى؟</h6>
                        <h6>Is this unit located inside a compound</h6>
                    </div>
                    <div class="input-group mb-3 validate-input">
                        <span class="input-group-text rounded-pill" id="basic-addon1">
                            <i class="fa fa-city" aria-hidden="true"></i>
                        </span>
                        <select id="compound" class="form-control rounded-pill" name="compound" required="">
                            <option selected="" disabled="" value="">اختر</option>
                            <option value="1">نعم</option>
                            <option value="0">لا</option>
                        </select>



                    </div>

                    <div class="compound-box">

                        <div class="my-3 d-flex justify-content-between">
                            <h6>اسم الكومبوند</h6>
                            <h6>Compound Name</h6>
                        </div>
                        <div class="input-group mb-3 validate-input">
                            <span class="input-group-text rounded-pill" id="basic-addon1">
                                <i class="fa fa-home" aria-hidden="true"></i>
                            </span>
                            <input id="compound_name" type="text" class="form-control rounded-pill" name="compound_name" placeholder="الكومبوند">


                        </div>

                    </div>


                </div>
            </div>




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
