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


{{-- <div class="card card-defualt">
<br>
    <div class="header-body">
        <div class="py-0 text-center">


            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'style="text-align: center">
                        <thead>
                            <tr>
                                <th class="border-bottom-0">مسلسل</th>
                                <th class="border-bottom-0">الأسم </th>
                                <th class="border-bottom-0">رقم التليفون </th>
                                <th class="border-bottom-0">الايميل </th>
                                <th class="border-bottom-0">نوع الوحده</th>
                                <th class="border-bottom-0">مكان الوحده</th>
                                <th class="border-bottom-0">الكومباوند</th>
                                <th class="border-bottom-0">المساحه </th>
                                <th class="border-bottom-0">الغرف </th>
                                <th class="border-bottom-0">الحمامات</th>
                                <th class="border-bottom-0">حاله الوحده</th>
                                <th class="border-bottom-0">غرض التشطيب </th>
                                <th class="border-bottom-0">الباقة</th>
                                <th class="border-bottom-0">التكلفه</th>
                                <th class="border-bottom-0">ملاحظات</th>
                                <th class="border-bottom-0">توقيت التسجيل</th>

                            </tr>
                        </thead>
                        <tbody>

                            @foreach($parameters as $y)


                            <tr>
                                <td>{{1}}</td>
                                <td>{{ $y->name}}</td>
                                <td>{{ $y->phone }}</td>
                                <td>{{ $y->email }}</td>
                                <td>{{ $y->unit_type }}</td>
                                <td>{{ $y->location }}</td>
                                <td>{{ $y->compound_name }}</td>
                                <td>{{ $y->area }}</td>
                                <td>{{ $y->room }}</td>
                                <td>{{ $y->bathroom }}</td>
                                <td>{{ $y->phone }}</td>
                                <td>{{ $y->phone }}</td>
                                <td>{{ $y->phone }}</td>
                                <td>{{ $y->area * $y->amount }}</td>
                                <td>{{ $y->nots }}</td>
                                <td>{{ $y->created_at }}</td>

                            </tr>

                            @endforeach

       </div>
    </div> --}}

    <div class="container-fluid mt--6 bg-gradient-dark">

        <div class="row">

            <div class="col-xl-12">

                <div class="card card-defualt">

              @php
                  $i = 0;
              @endphp


        <div class="w-100 result" id="print">
            <div class="result-frame" style="position: relative;border: 5px solid #c82121;border-radius: 10px;padding: 10px;" dir="rtl">

                <div class="row text-center p-2">
                    <div class="col-12">

                      <div class="card-body">
                          <div class="table-responsive">
                              <table id="example1" class="table key-buttons text-md-nowrap" data-page-length='50'style="text-align: center">
                                  <thead style="color: #000">
                                      <tr >
                                          <th class="border-bottom-0">مسلسل</th>
                                          <th class="border-bottom-0">الأسم </th>
                                          <th class="border-bottom-0">رقم التليفون </th>
                                          <th class="border-bottom-0"> Email </th>
                                          <th class="border-bottom-0">نوع الوحدة</th>
                                          <th class="border-bottom-0"> Location</th>
                                          <th class="border-bottom-0">الكومبوند</th>
                                          <th class="border-bottom-0">إسم الكومبوند </th>
                                          <th class="border-bottom-0"> المساحة</th>
                                          <th class="border-bottom-0"> الغرف</th>
                                          <th class="border-bottom-0">الحمامات</th>
                                          <th class="border-bottom-0">حالة الوحدة</th>
                                          <th class="border-bottom-0">غرض التشطيب </th>
                                          <th class="border-bottom-0">الباقة</th>
                                          <th class="border-bottom-0">التكلفة</th>
                                          <th class="border-bottom-0">ملاحظات</th>
                                          <th class="border-bottom-0">توقيت وتاريخ الدخول</th>


                                      </tr>
                                  </thead>
                                  <tbody>

                                      @foreach($parameters as $y)


                                      <tr>
                                          <td>{{++$i}}</td>
                                          <td>{{ $y->name}}</td>
                                          <td>{{ $y->phone }}</td>
                                          <td>{{ $y->email }}</td>
                                          <td>{{ $y->unit_type }}</td>
                                          <td>{{ $y->location }}</td>

                                          @if ($y['compound'] ==0 )
                                          <td>لا يوجد</td>
                                          @endif
                                          @if ($y['compound'] ==1 )
                                          <td>داخل كومبوند</td>
                                          @endif
                                          <td>{{ $y->compound_name }}</td>
                                          <td>{{ $y->area }}</td>
                                          <td>{{ $y->room }}</td>
                                          <td>{{ $y->bathroom }}</td>

              {{-- حالة الوحدة --}}
                                      @if ($y['semi_finished'] ==0 && $y['Semi_finished_alumetal'] ==0)
                                      <td>{{ $y->red_bricks }}</td>
                                      @endif
                                      @if ($y['red_bricks'] ==0 && $y['Semi_finished_alumetal'] ==0)
                                      <td>{{ $y->semi_finished }}</td>
                                      @endif
                                      @if ($y['red_bricks'] ==0 && $y['semi_finished'] ==0)
                                      <td>{{ $y->Semi_finished_alumetal }}</td>
                                      @endif





              {{-- غرض التشطيب --}}
                                      @if ($y['rent'] ==0 && $y['Sale'] ==0)
                                          <td>{{ $y->Personal }}</td>
                                      @endif

                                      @if ($y['Personal']==0 && $y['Sale']==0)
                                        <td>{{ $y->rent }}</td>
                                      @endif

                                      @if ( $y['Personal']==0 && $y['rent']==0)
                                        <td>{{ $y->Sale }}</td>
                                      @endif



                                      @if ( $y['average']==0 && $y['vip']==0 && $y['ultra_vip']==0 && $y['super_ultra_vip']==0 )
                                      <td>  الباقة الاقتصاديه</td>
                                      @endif

                                      @if ( $y['economical']==0 && $y['vip']==0 && $y['ultra_vip']==0 && $y['super_ultra_vip']==0 )
                                      <td>     الباقة المتوسطه</td>
                                      @endif

                                      @if ( $y['economical']==0 && $y['average']==0 && $y['ultra_vip']==0 && $y['super_ultra_vip']==0 )
                                      <td>      VIP</td>
                                      @endif

                                      @if ( $y['economical']==0 && $y['vip']==0 && $y['average']==0 && $y['super_ultra_vip']==0 )
                                      <td>      Ultra Vip</td>
                                      @endif

                                      @if ( $y['economical']==0 && $y['vip']==0 && $y['ultra_vip']==0 && $y['average']==0 )
                                      <td>     Super Ultra Vip </td>
                                      @endif




                                          <td>{{$y['amount']*$y['area']}}</td>
                                          <td>{{ $y->nots }}</td>
                                          <td>{{ $y->created_at }}</td>


                                      </tr>

                                      @endforeach


                                  </table>
                                  <div>

                                  {!! $parameters->links() !!}

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
