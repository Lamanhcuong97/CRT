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

		@foreach ($data_cbr_detail as $cbr_detail) 
		ລາຍງານ CBR ຂອງຜູ້ໂດຍສານ: {{$cbr_detail->name}} {{$cbr_detail->lastname}}
		@endforeach


		 
    </h1>
</div>
@endsection
@section('content')
<form id="frm" class="form-horizontal" enctype="multipart/form-data" method="post" action ="addnew" role="form">
    {{ csrf_field() }}
   
	<div class="row">
		<div class="col-xs-12">
		<!-- PAGE CONTENT BEGINS --> 	
		
			<form class="form-horizontal" role="form">
									
									
									@foreach ($data_cbr_detail as $cbr) 
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"> ວັນທີລາຍງານ</label>

									<div class="col-sm-3">
									<div class="input-group">
												<input type="text" value ="{{$cbr->date_report}}" />
																</div>
										</div>
									</div>

									
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ຊື່</label>

									<div class="col-sm-9">
											<input type="text" value="{{$cbr->name}}" class="col-xs-10 col-sm-3"/>

										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ນາມສະກຸນ</label>

									<div class="col-sm-9">
											<input type="text" value="{{$cbr->lastname}}" class="col-xs-10 col-sm-3"/>
										</div>
									</div>



									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"> ວັນດືອນປີເກີດ</label>

									<div class="col-sm-3">
									<div class="input-group">
												<input type="text" value ="{{$cbr->dateofb}}"/>
																	
																</div>
										</div>
									</div>


								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> ເລກໜັງສືເດີນທາງ / ໜັງສືຜ່ານແດນ</label>

										<div class="col-sm-9">
											<input type="text" value ="{{$cbr->pass_no}}" class="col-xs-10 col-sm-3" />
										</div>
									</div>



									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"> ອອກໃຫ້ວັນທີ</label>

									<div class="col-sm-3">
									<div class="input-group">
												<input type="text" value ="{{$cbr->date_issue}}"/>
																</div>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"> ໝົດອາຍຸວັນທີ</label>

									<div class="col-sm-3">
									<div class="input-group">
												<input type="text" value ="{{$cbr->date_expire}}" />
												
											</div>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> ປະເທດອອກໜັງສືເດີນທາງ / ໜັງສືຜ່ານແດນ </label>

										<div class="col-sm-9">
											<input type="text" value="{{$cbr->country_issue}}" class="col-xs-10 col-sm-3"/>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> ເປົ້າໝາຍຂອງການເດີນທາງ </label>

										<div class="col-sm-9">
											<textarea class="col-xs-10 col-sm-5" rows="6">{{$cbr->object_travel}}</textarea>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> ເດີນທາງຈາກປະເທດ </label>

										<div class="col-sm-9">
											<input type="text" value="{{$cbr->from_country}}" class="col-xs-10 col-sm-3" />
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> ປະເທດປາຍທາງ </label>

										<div class="col-sm-9">
											<input type="text" value="{{$cbr->to_country}}" class="col-xs-10 col-sm-3"/>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> ເລກທີ່ທ່ຽວບິນ ຫຼື ທະບຽນພາຫານະ </label>

										<div class="col-sm-9">
											<input type="text" value="{{$cbr->no_vehicle}}" class="col-xs-10 col-sm-3"/>
										</div>
									</div>


									<!-- <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> ຈຸດຜ່ານແດນ </label>

										<div class="col-sm-9">
											<input type="text" value="{{$cbr->gate}}" class="col-xs-10 col-sm-3"/>
										</div>
									</div> -->

									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3">ມູນຄ່າທີ່ແຈ້ງ (ສະກຸນເງິນທີ່ແຈ້ງ)</label>

										<div class="col-sm-9">
											<input type="text" value="{{number_format($cbr->amount)}} {{$cbr->amount_cur}}" class="col-xs-10 col-sm-3"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"></label>

										<div class="col-sm-9">
											<input type="text" value="{{number_format($cbr->amount_1)}} {{$cbr->amount_cur_1}}" class="col-xs-10 col-sm-3"/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"></label>

										<div class="col-sm-9">
											<input type="text" value="{{number_format($cbr->amount_2)}} {{$cbr->amount_cur_2}}" class="col-xs-10 col-sm-3"/>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> ການແຈ້ງວັດຖຸມີຄ່າ ຫຼື ເຄື່ອງມືທາງດ້ານການເງິນ: </label>

										<div class="col-sm-9">
											<textarea class="col-xs-10 col-sm-5" rows="6">{{$cbr->item}}</textarea>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> ມູນຄ່າທຽບເທົ່າເງິນກີບ </label>

										<div class="col-sm-9">
											<input type="text" value="{{number_format($cbr->amount_dollar)}} ກີບ" class="col-xs-10 col-sm-3"/>
										</div>
									</div>

									<div class="form-group">
									<label class = "col-sm-3 control-label">ປະເພດຂອງການແຈ້ງ</label>
											<div class = "col-sm-9">
											<input type="text" value="{{$cbr->type}}" class="col-xs-10 col-sm-3">	
																
																
											</select>
											</div>
									</div>




									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"> ໃບແຈ້ງລົງວັນທີ</label>

									<div class="col-sm-3">
									<div class="input-group">
									<input type="text" value ="{{$cbr->date_notice}}" />																
									</div>
									</div>
									</div>

									@endforeach	
									





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

	
    <script>
	jQuery(function($) {
	
		var myTable = $('#simple-table').DataTable();
		$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ''
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				
				
				
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			
			
			
			
				/////////////////////////////////
				//table checkboxes
				$('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
				
				//select/deselect all rows according to table header checkbox
				$('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$('#dynamic-table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) myTable.row(row).select();
						else  myTable.row(row).deselect();
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
					var row = $(this).closest('tr').get(0);
					if(this.checked) myTable.row(row).deselect();
					else myTable.row(row).select();
				});
			
			
			
				$(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
					e.stopImmediatePropagation();
					e.stopPropagation();
					e.preventDefault();
				});
				
				
				
				//And for the first simple table, which doesn't have TableTools or dataTables
				//select/deselect all rows according to table header checkbox
				var active_class = 'active';
				$('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
					var th_checked = this.checked;//checkbox inside "TH" table header
					
					$(this).closest('table').find('tbody > tr').each(function(){
						var row = this;
						if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
						else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
					});
				});
				
				//select/deselect a row when the checkbox is checked/unchecked
				$('#simple-table').on('click', 'td input[type=checkbox]' , function(){
					var $row = $(this).closest('tr');
					if($row.is('.detail-row ')) return;
					if(this.checked) $row.addClass(active_class);
					else $row.removeClass(active_class);
				});
			
				
			
				/********************************/
				//add tooltip for small view action buttons in dropdown menu
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				
				//tooltip placement on right or left
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					//var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
				
				
				
				
				/***************/
				$('.show-details-btn').on('click', function(e) {
					e.preventDefault();
					$(this).closest('tr').next().toggleClass('open');
					$(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
				});
				/***************/
				
				
				
				
				
				/**
				//add horizontal scrollbars to a simple table
				$('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
				  {
					horizontal: true,
					styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
					size: 2000,
					mouseWheelLock: true
				  }
				).css('padding-top', '12px');
				*/
			
							
				

	})
        
    </script>




@endsection