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
            <img src="{{URL::asset('assets/img/farouk/head7.png')}}" style="width: 1150px">

        </div>
        <div class="row text-center p-2">
            <div class="col-12">
                <h5 class="mt-1 text-center"> التكلفة التقديرية</h5>
                <h5 style="width: fit-content;margin: auto;padding: 5px;border-style: groove;border-radius: 10px;">
                  {{$parameters['amount']*$parameters['area']}}
                </h5>
                <hr>
            </div>

            <div class="col-md-10 m-auto">
                <div class="row text-right p-2">
            <div class="col-md-6 mb-4 col-6">
                <h5 class="result-text">


                    <i class="fas fa-user"></i>  الأسم : {{$parameters['name']}}
                </h5>
            </div>
            <div class="col-md-6 mb-4 col-6">
                <h5 class="result-text">
                    <i class="fas fa-phone"></i> {{$parameters['phone']}}

                </h5>
            </div>
            <div class="col-md-6 mb-4 col-6">
                <h5 class="result-text">
                    <i class="fas fa-building"></i> نوع الوحدة : {{$parameters['unit_type']}}
                </h5>
            </div>
            <div class="col-md-6 mb-4 col-6">
                <h5 class="result-text">
                    <i class="fas fa-map-marker-alt"></i> موقع الوحدة : {{$parameters['location']}}
                </h5>
            </div>
            <div class="col-md-6 mb-4 col-6">
                <h5 class="result-text">
                    <i class="fas fa-square"></i> أسم الكومبوند : {{$parameters['compound_name']}}
                </h5>
            </div>
            <div class="col-md-6 mb-4 col-6">
              <h5 class="result-text">
                  <i class="fas fa-square"></i> مساحة الوحدة : {{$parameters['area']}}
              </h5>
          </div>
            <div class="col-md-6 mb-4 col-6">
                <h5 class="result-text">
                    <i class="fas fa-bed"></i> عدد الغرف : {{$parameters['room']}}
                </h5>
            </div>
            <div class="col-md-6 mb-4 col-6">
                <h5 class="result-text">
                    <i class="fas fa-bath"></i> عدد الحمامات : {{$parameters['bathroom']}}
                </h5>
            </div>
            <div class="col-md-6 mb-4 col-6">
                <h5 class="result-text">
                    <i class="fas fa-sticky-note"></i> ملاحظات : {{$parameters['nots']}}
                </h5>
            </div>
            @if ($parameters['semi_finished'] ==0 && $parameters['Semi_finished_alumetal'] ==0)
            <div class="col-md-6 mb-4 col-6">
                <h5 class="result-text">
                    <i class="fas fa-home"></i>  حالة الوحدة  : {{$parameters['red_bricks']}}

                </h5>
            </div>
            @endif
            @if ($parameters['red_bricks'] ==0 && $parameters['Semi_finished_alumetal'] ==0)
            <div class="col-md-6 mb-4 col-6">
              <h5 class="result-text">
                  <i class="fas fa-home"></i>   حالة الوحدة  : {{$parameters['semi_finished']}}

              </h5>
          </div>
          @endif
          @if ($parameters['red_bricks'] ==0 && $parameters['semi_finished'] ==0)
          <div class="col-md-6 mb-4 col-6">
              <h5 class="result-text">
                  <i class="fas fa-home"></i> حالة الوحدة     : {{$parameters['Semi_finished_alumetal']}}

              </h5>
          </div>
          @endif

          @if ($parameters['rent'] ==0 && $parameters['Sale'] ==0)
          <div class="col-md-6 mb-4 col-6">
              <h5 class="result-text">
                  <i class="fas fa-building"></i>    غرض التشطيب : {{$parameters['Personal']}}

              </h5>
          </div>
        @endif

        @if ($parameters['Personal']==0 && $parameters['Sale']==0)
          <div class="col-md-6 mb-4 col-6">
            <h5 class="result-text">
                <i class="fas fa-building"></i>  غرض التشطيب : {{$parameters['rent']}}

            </h5>
          </div>
        @endif

        @if ( $parameters['Personal']==0 && $parameters['rent']==0)
        <div class="col-md-6 mb-4 col-6">
            <h5 class="result-text">
                <i class="fas fa-building"></i>  غرض التشطيب : {{$parameters['Sale']}}

            </h5>
        </div>
        @endif



        <div class="col-12">
        @if ( $parameters['average']==0 && $parameters['vip']==0 && $parameters['ultra_vip']==0 && $parameters['super_ultra_vip']==0 )


                  <h5 class="mt-1 text-center" dir="ltr" style="width: fit-content;margin: auto;border: 3px dashed #32325d;padding: 5px;border-radius: 10px;">
                    الباقة الاقتصاديه
                  </h5>




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

                      @endif


                      @if ( $parameters['economical']==0 && $parameters['vip']==0 && $parameters['ultra_vip']==0 && $parameters['super_ultra_vip']==0 )
                      <h5 dir="ltr" style="width: fit-content;margin: auto;border: 3px dashed #32325d;padding: 5px;border-radius: 10px;">
                        الباقة المتوسطه
                      </h5>




                      <div class="row text-right p-3">

                          <div class="col-12">
                              <h5 class="mb-4 px-3">
                                <p class="result-text mobile-text" style="line-height: 2.5;font-size:12px;">
                                    1- التصميم :- تصميم ثنائي الأبعاد لكامل الوحدة بالتعديلات وثلاثي الأبعاد لكامل الوحدة
<br>
2- الكهرباء :- سلك سويدي من اجود الخامات
علب ماجيك
مفاتيح وبرايز فينوس بالضمان
لوحة رئيسية 16خط
ليد واسبوتات في الجبس بورد ريسبشن وطرقة فقط
دائره تلفزيون ريسيبشن وغرفة نوم فقط
دائره ستااليت
دائره انترنت
كبل HDريسيبشن وغرفة واحده
دفيتير طرقة وغرفة نوم رئيسية
تاسيس تكيفات الريسيبشن

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
2 وش دهان نهائي سايبس

<br>
5- الاسقف  :- السقف بالكامل مصيص
جبس بورد للريسبشن والطرقة فقط
2 وش بالستيك ابيض
  .
<br>
6- السيراميك :- الريسبشن والممرات والغرف سيراميك قطع ليزر 60*60 علي ان لا يتعدي
سعر المتر115 ج
الغرف وحوائط المطبخ والحمام سيراميك فرز اول علي ان لا يتعدي سعر
المتر 80 ج
 <br>
7- الوميتال :- لشبابيك المطبخ والحمام فقط
قطاع صغير Ps
 .
<br>

9- الديكورات :- يشمل جانب ديكور للرسيبشن ورق حائط او حجر اليتعدي 5 متر او دهان ديكور .
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

                          @endif


                          @if ( $parameters['economical']==0 && $parameters['average']==0 && $parameters['ultra_vip']==0 && $parameters['super_ultra_vip']==0 )
                          <h5 dir="ltr" style="width: fit-content;margin: auto;border: 3px dashed #32325d;padding: 5px;border-radius: 10px;">
                              VIP
                          </h5>




                          <div class="row text-right p-3">

                              <div class="col-12">
                                  <h5 class="mb-4 px-3">
                                    <p class="result-text mobile-text" style="line-height: 2.5;font-size:12px;">
                                        1- التصميم :- تصميم ثنائي الأبعاد لكامل الوحدة بالتعديلات وثلاثي الأبعاد لكامل الوحدة
    <br>
    2- الكهرباء :- سلك سويدي من اجود الخامات
    علب ماجيك
    مفاتيح وبرايز فينوس بالضمان
    لوحة رئيسية 18 خط
    دائره تليفزيون
    دائره ستااليت
    دائره انترنت
    HD كبل
    ديفيتير طرقة ونوم
    تاسيس تكيفات
    تاسيس خراطيم الساوند سيستم
    ليد واسبوتات

    <br>
    3- السباكة والصحي :-الصرف كاسيل الماني
    التغذية BR ضمان 10 سنوات
    عزل الحمام سيكا 107
    عمل لياسة اسمنتية
    قاعدة دفن
    كابينة شاور
      <br>
    4- الدهانات :- وش سيلر مائي
    2 سكينه معجون
    بطانة
    تلقيطة
     5 وش دهان نهائي جوتين او نيبون رقم 1 في اسيا الوش الاخيرقابل للغسيل
      <br>
    5- الاسقف  :- جبس بورد اجمالي مساحة الشقه
    جبس بورد ابيض للرسيبشن والغرف
    جبس بورد احمر للمطبخ
    جبس بورد اخضر للحمام
      <br>
    6- السيراميك :- الريسبشن والممرات بورسلين مستورد علي ان لا يتعدي سعر المتر
    280 ج
    ارضيات الغرف سيراميك شرائح الباركيه كيلوباترا لا يتعدي سعر المتر
    110
    حوائط المطبخ والحمام فرز اول لا يتعدي سعر المتر 110
    المعابر رخام
      <br>
    7- الوميتال :- لشبابيك المطبخ والحمام فقط
    قطاع صغير Ps
       .
    <br>

    9- الديكورات :- يشمل جانب تجاليد خشب marbel super
    يشمل جانب واحد في الرسيبشن من الحجر ال يتعدى 7 م او دهان ديكور او ورق حائط
   ورق حائط لغرف االطفال 3D
   ورق حائط لغرفه المستر والمعيشه
   خشب cnc بحد اقصي 5 متر طولي
   الديكورات النهائيه حسب اختيار العميل يتم االتفاق عليها في الفنش النهائي
    .
    <br>
    10- الابواب :-باب مصفح تركي عرضه 1 م فعلي
    االبواب الداخلية خشب موسكي عمولة بقشره ارو
    دهان االبواب اسطو
       .
     <br>
     11- ساوند سيستم :-تأسيس ساوند سيستم   .

     <br>
     12- مواسير فريون  :-تاسيس مواسير فريون بحد اقصى 5م     .
                                </p>
                                  </h5>
                              </div>

                              @endif


                          @if ( $parameters['economical']==0 && $parameters['average']==0 && $parameters['vip']==0 && $parameters['super_ultra_vip']==0 )
                          <h5 dir="ltr" style="width: fit-content;margin: auto;border: 3px dashed #32325d;padding: 5px;border-radius: 10px;">
                             ULTRA VIP
                          </h5>




                          <div class="row text-right p-3">

                              <div class="col-12">
                                  <h5 class="mb-4 px-3">
                                    <p class="result-text mobile-text" style="line-height: 2.5;font-size:12px;">
                                        1- التصميم :- تصميم ثنائي الأبعاد لكامل الوحدة بالتعديلات وثلاثي الأبعاد لكامل الوحدة
    <br>
    2- الكهرباء :- سلك سويدي من اجود الخامات
    علب ماجيك
    مفاتيح وبرايز فينوس بالضمان
    لوحة رئيسية 24 خط
    دائره تليفزيون
    دائره ستااليت
    دائره انترنت
    HD كبل
    ديفيتير
    تاسيس تكيفات
    تاسيس خراطيم الساوند سيستم
    ليد واسبوتات
    كشاف طوارئ

    <br>
    3- السباكة والصحي :-الصرف كاسيل الماني
    التغذية BR ضمان 10 سنوات
    عزل الحمام سيكا 107
    عمل لياسة اسمنتية
     5 قاعدة دفن
    كابينة شاور مفصلي مغلقه + قاطع زجاج ثابت
     <br>
    4- الدهانات :-وش سيلر مائي
    2 سكينه معجون
   بطانة
   تلقيطة
    5 وش دهان نهائي جوتين او نيبون الحاصل علي رقم1 في اسيا كالهما قابلين للغسي

    <br>
    5- الاسقف  :- تشمل عمل اسقف معلقة بمساحة الشقة + 50 متر اضافي بمشتمالتها من اضائة  .
    <br>
    6- السيراميك :- ارضيات ريسيبشن وممرات رخام مستورد  ) بريشيا - امبرادور- اجورا - او ما يوازيه(
      ارضيات الغرف سيراميك شرائح الباركيه كيلوباترا علي ان لا يتعدي سعر المتر135ج
      حوائط الحمام والمطبخ سيراميك فرز اول علي لا يتعدي سعر المتر 145ج
      المعابر رخام
        <br>
    7- الوميتال :- لشبابيك المطبخ والحمام فقط
    قطاع صغير Ps
    الوميتال الغرف والتراس يتم تحديد التكلفه بعد المعاينه
     .
    <br>

    9- الديكورات :- يشمل جانب ديكور الريسبشن ورق حائط او حجر ال يتعدى 10 متر او بالطات  3Dاو دهان ديكور
    جانب ورق حائط في غرفه الماستر والمعيشة
    جانب ورق حائط في غرفه الماستر والمعيشة
    او تجليده حشب سوبر ماربل مقاس 60.2* 40.2
    يشمل جانب ورق حائط  3D لغرف االطفال
    خشب cnc بحد اقصي 10 متر
    الديكورات النهائيه حسب اختيار العميل يتم االتفاق عليها في الفنش النهائي
     .
    <br>
    10- الابواب :-باب مصفح تركي عرضه 1 م فعلي
    الابواب الداخلية باب مستورد جاهز تركي او اوكراني
    دهان االبواب اسطور يوتن
      .
     <br>
     11- ساوند سيستم :-تأسيس ساوند سيستم   .

     <br>
     12-  مواسير فريون :- تاسيس مواسير فريون بحد اقصى 10م      .
                                </p>
                                  </h5>
                              </div>

                              @endif


                              @if ( $parameters['economical']==0 && $parameters['average']==0 && $parameters['vip']==0 && $parameters['ultra_vip']==0 )
                              <h5 dir="ltr" style="width: fit-content;margin: auto;border: 3px dashed #32325d;padding: 5px;border-radius: 10px;">
                                SUPER ULTRA VIP
                              </h5>




                              <div class="row text-right p-3">

                                  <div class="col-12">
                                      <h5 class="mb-4 px-3">
                                        <p class="result-text mobile-text" style="line-height: 2.5;font-size:12px;">
                                            1- التصميم :- تصميم ثنائي الأبعاد لكامل الوحدة بالتعديلات وثلاثي الأبعاد لكامل الوحدة
        <br>
        2- الكهرباء :- سلك سويدي من اجود الخامات
        علب ماجيك
        مفاتيح وبرايز فينوس بالضمان
        لوحة رئيسية 24 خط
        دائره تليفزيون
        دائره ستااليت
        دائره انترنت
        HD  كبل
        ديفيتير
        تاسيس تكيفات
        تأسيس خراطيم الساوند سيستم
        ليد و اسبوتات
        .كشاف طوارئ ريسيبشن
        قاطع فرق الجهد
        تأسيس كاميرات
        توريد وتركيب عدد اباليك
        توريد وتركيب شفاطات للحمامات

        <br>
        3- السباكة والصحي :-الصرف كاسيل الماني
        التغذية BR ضمان 10 سنوات
        عزل الحمام سيكا 107
        عمل لياسة اسمنتية
         5 قاعدة دفن
        كابينة شاورللمساحة تحت 160م او بانيو شاسيه او
        جاكوزي للمساحه فوق 160م
        قاطع زجاجي ثابت او بانيو دفن
        <br>
        4- الدهانات :- وش سيلر مائي
        2سكينه معجون
       بطانة
       تلقيطة
        5 وش دهان نهائي جوتين كالهما قابلين للغسل
       دهانات فيلفت

        <br>
        5- الاسقف  :- تشمل عمل اسقف معلقة باجمالي مساحة الشقة + 100 متر اضافي بمشتمالتها من اضائه   .
        <br>
        6- السيراميك :- ارضيات ريسيبشن وممرات رخام مستورد ( بريشيا - امبرادور- كرارة (
          معابر وكنارات امبرادور اسباني للرخام
          الغرف HDF تركي او سيراميك كيلوبترا شرائح باركيه فرز اول لا يتعدى سعر المتر 155 ج
          حوائط المطبخ والحمام سيراميك فرز اول على ان لا يتعدى سعر المتر 180 ج
          المعابر رخام
          ديكورات حمام رخام
           <br>
        7- الوميتال :-لشبابيك المطبخ والحمام فقط PS قطاع كبير
        زجاج مصنفر
         .
        <br>

        9- الديكورات :- يشمل جانب ديكور الريسبشن ورق حائط او حجرلا يتعدى 10 متر او بالطات 3D او دهان ديكور
        تجليد جانب خشب 3 marbel super  متر
        يشمل جانب ورق حائط  3Dلغرف االطفال
        جانب ورق حائط في غرفه الماستر والمعيشة
        خشب cnc بحد اقصي 15 متر
        تجليد خشبي ال تتعدى 7 متر
        تجليد خشب ممشط لا يتعدى 5 متر
        الديكورات النهائيه حسب اختيار العميل يتم االتفاق عليها في الفنش النهائي
         .
        <br>
        10- الابواب :-باب مصفح تركي عرضه 1 م فعلي
        الابواب الداخلية باب مستورد جاهز تركي او اوكراني
        تجليدة خشبيه لمعبرة مدخل المطبخ
         .
         <br>
         11- ساوند سيستم :-ساوند سيستم للشقة بالكامل توريد وتركيب    .

         <br>
         12- مواسير فريون  :-تاسيس مواسير فريون بحد اقصى 25م      .
                                    </p>
                                      </h5>
                                  </div>

                                  @endif

                                  <div class="col-12 text-center">
                                    <small style="display: block;font-weight: bold;text-decoration-line: underline;">الأسعار الموضحة أعلاه تقديرية تقريبية غير ملزمة</small>
                                    <small style="display: block;">وكل الباقات تعطى العميل حرية الاختيار و يتم تحديدها بدقة بعد عمل المعاينة و حساب تكلفة الكميات </small>
                                    <small>ولمزيد من التفاصيل  او حجز موعد للمعاينة برجاء الاتصال على 01157574442  أو زيارة موقعنا <a href="https://www.facebook.com/farouk.group.Egypt/">
                                        Farouk Group
                                    </a> ويمكنك متابعة صفحاتنا على جميع وسائل التواصل الاجتماعي و فى حالة اظهار صفحة التكلفة التقديرية اعلاه يتم عمل خصم خاص للعميل</small>
                                </div>
                                <div class="col-12 text-center">
                                    <hr>
                                    <h5>
                                        <address>
                                            <a href="https://www.facebook.com/farouk.group.Egypt/">
                                            Farouk Group
                                        </a>
                                        </address>
                                    </h5>
                                    <small>01157574442</small>
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
