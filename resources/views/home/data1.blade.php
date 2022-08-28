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


<div class="container-fluid mt--6 bg-gradient-dark">

    <div class="row">

        <div class="col-xl-12">

            <div class="card card-defualt">




    <div class="w-100 result" id="print">
        <div class="result-frame" style="position: relative;border: 5px solid #c82121;border-radius: 10px;padding: 10px;" dir="rtl">
            <h3 class="mt-1 text-center"> </h3>
            <div class="row text-center p-2">
                <div class="col-12">

                </div>
            </div>
            <div class="col-md-10 m-auto">
                <div class="row text-right p-2">

                                        </div>
            </div>


            <h3 dir="ltr" style="width: fit-content;margin: auto;border: 3px dashed #32325d;padding: 5px;border-radius: 10px;">
              الباقة الاقتصاديه
            </h3>
<br>
            <h3 dir="ltr" style="width: fit-content;margin: auto;: 10px;">

المتر = 2000
</h3>




            <div class="row text-right p-3">

                <div class="col-12">
                    <h5 class="mb-4 px-3">
                        <p class="result-text mobile-text" style="line-height: 2.5;font-size:12px;">
                                1- التصميم :- تصميم ثنائي الأبعاد لكامل الوحدة بالتعديلات وثلاثي الأبعاد لكامل الوحدة
<br>
2- الكهرباء :- اسلك سويدي من اجود الخامات
علب ماجيك
مفاتيح وبرايز فينوس بالضمان
وحة رئيسية 16 خط
دائره تليفزيون رسيبشن فقط
دائره ستااليت
دائره انترنت
اسيس تكيفات الريسيبشن فقط
دفيتير في الطرقة

<br>
3- السباكة والصحي :-الصرف كاسيل الماني
التغذية BR ضمان 10 سنوات
عزل الحمام سيكا 105
تاسيس كابينة شاور
<br>
4- الدهانات :- وش سيلر مائي
2 سكينه معجون
بطانة
تلقيطة
وش نهائي دهانات G

<br>
5- الاسقف  :- كرانيش جبس
.مصيص سقف
وش بالستيك ابيض
.
<br>
6- السيراميك :- كيلوباترا او ما يوازيه فرز اول حوائط وارضيات
الغرف كلها سيراميك علي ان ال يتعدي سعر المتر 70 جنيها
سيراميك المطبخ والحمامات ال يتعدى سعر المتر 7
<br>
7- الوميتال :- لشبابيك المطبخ والحمام فقط
قطاع صغير Ps
.
<br>

9- الديكورات :- لا يوجد .
<br>
10- الابواب :-باب مصفح صيني
الابواب الداخيلة باب جاهز موسكي قشرة ارو
دهان الابواب الداخلية استر
.
<br>
11- ساوند سيستم :-لا يوجد   .
                        </p>
                    </h5>
                </div>






                <div class="col-12 text-center">
                    <small style="display: block;font-weight: bold;text-decoration-line: underline;">الأسعار الموضحة أعلاه تقديرية تقريبية غير ملزمة</small>
                    <small style="display: block;">وكل الباقات تعطى العميل حرية الاختيار و يتم تحديدها بدقة بعد عمل المعاينة و حساب تكلفة الكميات </small>
                    <small>ولمزيد من التفاصيل  او حجز موعد للمعاينة برجاء الاتصال على 01157574442  أو زيارة موقعنا <a style="color: #000" href="https://www.facebook.com/farouk.group.Egypt/"  target="_blank">  Farouk Group </a>  ويمكنك متابعة صفحاتنا على جميع وسائل التواصل الاجتماعي و فى حالة اظهار صفحة التكلفة التقديرية اعلاه يتم عمل خصم خاص للعميل</small>
                </div>
                <div class="col-12 text-center">
                    <hr>
                    <h5>
                        <address>
                          <a style="color: #000" href="https://www.facebook.com/farouk.group.Egypt/"  target="_blank">  Farouk Group </a>
                        </address>
                    </h5>
                    <small>01157574442</small>
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
