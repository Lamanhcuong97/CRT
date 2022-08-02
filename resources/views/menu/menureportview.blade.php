@extends('layouts.main')
@section('page_title', 'reports view')
@section('content')

<div class="space-30"></div>
<div class="col-sm-offset-1 col-sm-10 col-lg-offset-2 col-lg-8 well animated fadeInRight" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ລາຍງານທຸລະກຳໜ້າສົງໄສ</strong> </h2>
  </blockquote>
</div>
<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 widget-container-col animated fadeInRight" id="widget-container-col-2" style="background-color: #eeeeee; background-image: url('images/bg-images5.jpeg'); background-position-y: 100%; background-size: 100%; padding-bottom: 98px;">
   <div class="hr hr2 hr-double"></div>
   <div class="space-20"></div>
   <div class="row">
       <div class="col-xs-offset-1 col-xs-10 col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10 col-md-offset-1 col-md-10 center">
           <a href="{{ url('/firviews')}}"><button type="button" class="btn-mis text-lo" role="button" aria-expanded="false"><i class="ace-icon fa fa-user-secret"></i> <strong>ເບິ່ງລາຍງານ FIR</strong></button></a>
           <a href="{{ url('/strdetails')}}"><button type="button" class="btn-mis text-lo" role="button" aria-expanded="false"><i class="ace-icon fa fa-file-text-o"></i> <strong>ລາຍລະອຽດ</strong></button></a>
           <a href="{{ url('/strreporters')}}"><button type="button" class="btn-mis text-lo" role="button" aria-expanded="false"><i class="ace-icon fa fa-bank"></i> <strong>ບັນດາທະນາຄານ</strong></button></a>
           <a href="{{ url('/strbranchs')}}"><button type="button" class="btn-mis text-lo" role="button" aria-expanded="false"><i class="ace-icon fa fa-sitemap"></i> <strong>ສາຂາທະນາຄານ</strong></button></a>
           <a href="{{ url('/nat')}}"><button type="button" class="btn-mis text-lo" role="button" aria-expanded="false"><i class="ace-icon fa fa-globe"></i> <strong>ສັນຊາດ</strong></button></a>
           <a href="{{ url('/strcharts')}}"><button type="button" class="btn-mis text-lo" role="button" aria-expanded="false"><i class="ace-icon fa fa-pie-chart"></i> <strong>ສະຖິຕິ</strong></button></a>
       </div>
   </div>
</div>
@stop
