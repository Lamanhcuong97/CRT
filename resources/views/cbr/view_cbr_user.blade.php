@extends('layouts.main_cbr')
@section('title','ລະບົບລາຍງານ CBR')
@section('breadcrumb')
<ul class="breadcrumb">
    <li>
        <i class="ace-icon fa fa-home home-icon"></i>
        <a href="#">ລະບົບລາຍງານ CBR</a>
    </li>
</ul>
@endsection
@section('page-header')
<div class="page-header">
    <h1>
	ຕາຕະລາງລາຍງານ CBR ທັງໝົດ
        
    </h1>
</div>
@endsection
@section('content')

<form id="frm" class="form-horizontal" enctype="multipart/form-data" method="post" role="form">
    {{ csrf_field() }}


    <!-- <div class="container"> -->
  <div class="row animated fadeInRight">
    <!-- <div class="col-xs-12"> -->
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		<!-- </div> -->

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>												
													<th>ລ/ດ</th>
													<th>ສະແດງ</th>
													
													@php
													if (Auth::user()->role_idrole==3) {
													@endphp	
													<th>ຜູ້ລາຍງານ</th>
													@php
													}
													@endphp
													
													<th>ວັນທີລາຍງານ</th>
													<th>ຊື່</th>
													<th>ນາມສະກຸນ</th>
													<th>ວັນເດືອນປີເກີດ</th>
													<th>ເລກໜັງສື ເດີນທາງ/ ຜ່ານແດນ</th>
													<th>ອອກໃຫ້ວັນທີ</th>
													<th>ໝົດອາຍຸວັນທີ</th>													
													<th>ປະເທດອອກໜັງສື ເດີນທາງ / ຜ່ານແດນ</th>																				
													<th>ເປົ້າໝາຍຂອງການເດີນທາງ</th>
													<th>ເດີນທາງຈາກປະເທດ</th>
													<th>ປະເທດປາຍທາງ</th>
													<th>ເລກທີ່ທ່ຽວບິນ ຫຼື ທະບຽນພາຫານະ</th>
													
													<th>ມູນຄ່າທີ່ແຈ້ງ</th>
													<!-- <th>ສະກຸນເງິນທີ່ແຈ້ງ</th> -->
													<th>ມູນຄ່າທີ່ແຈ້ງ 2</th>
													<!-- <th>ສະກຸນເງິນທີ່ແຈ້ງ 2</th> -->
													<th>ມູນຄ່າທີ່ແຈ້ງ 3</th>
													<!-- <th>ສະກຸນເງິນທີ່ແຈ້ງ 3</th> -->
													<th>ການແຈ້ງວັດຖຸມີຄ່າ ຫຼື ເຄື່ອງມືທາງດ້ານການເງິນ</th>
													<th>ມູນຄ່າທຽບເທົ່າເງິນກີບ</th>
													<th>ປະເພດຂອງການແຈ້ງ</th>
													<th>ໃບແຈ້ງລົງວັນທີ</th>
													<th>ເອກະສານຄັດຕິດ</th>
												</tr>
											</thead>
											<tbody>
											@php 
											$i = 1;
											@endphp

											@foreach ($data_cbr as $cbr) 
												<tr>																						
													<td>{{$i}}</td>
													<td><a href="{{url('viewcbrdetail/'.$cbr->cbr_id)}}">ສະແດງ</a></td>
													@php
													if (Auth::user()->role_idrole==3) {
													@endphp	
													<td>{{$cbr->usr_name}}</td>
													@php
													}
													@endphp
													<td>{{$cbr->date_report}}</td>											
													<td>{{$cbr->name}}</td>
													<td>{{$cbr->lastname}}</td>
													<td>{{$cbr->dateofb}}</td>			
													<td>{{$cbr->pass_no}}</td>
													<td>{{$cbr->date_issue}}</td>
													<td>{{$cbr->date_expire}}</td>
													<td>{{$cbr->country_issue}}</td>
													<td>{{$cbr->object_travel}}</td>																				
													<td>{{$cbr->from_country}}</td>
													<td>{{$cbr->to_country}}</td>
													<td>{{$cbr->no_vehicle}}</td>
												
													<td>{{number_format($cbr->amount)}} {{$cbr->amount_cur}}</td>
													
													<td>{{number_format($cbr->amount_1)}} {{$cbr->amount_cur_1}}</td>
													
													<td>{{number_format($cbr->amount_2)}} {{$cbr->amount_cur_2}}</td>
												
													<td>{{$cbr->item}}</td>
													<td>{{number_format($cbr->amount_dollar)}}</td>
													<td>{{$cbr->type}}</td>
													<td>{{$cbr->date_notice}}</td>
													<td><a href="{{ $cbr->path_file }}">ດາວໂຫຼດເອກະສານຄັດຕິດ</a></td>

                        </tr>

											@php
											$i++;
											@endphp
										
											@endforeach							
																											
										</tbody>
										</table>				
										</div>
									</div>
								</div>
</form>
@endsection
@section('add_js')
	
	<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('js/jquery.dataTables.bootstrap.min.js')}}"></script>
	<script src="{{asset('js/dataTables.buttons.min.js')}}"></script>
	<script src="{{asset('js/dataTables.select.min.js')}}"></script>
	
	<script src="{{asset('js/buttons.flash.min.js')}}"></script>
	<script src="{{asset('js/buttons.html5.min.js')}}"></script>
	<script src="{{asset('js/buttons.print.min.js')}}"></script>
	<script src="{{asset('js/buttons.colVis.min.js')}}"></script>
	
	
@endsection