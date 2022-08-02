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
		ການແຈ້ງເງິນສົດ, ວັດຖຸມີຄ່າ ແລະ ເຄື່ອງມືທາງດ້ານການເງິນ ໃນເວລາເຂົ້າ-ອອກ ສປປ ລາວ:
        
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
									
									

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"> <b>ວັນທີລາຍງານ:</b></label>

									<div class="col-sm-3">
									<div class="input-group">
												<input class="form-control date-picker" name ="input_date_no" value ="@php echo date('Y-m-d') @endphp" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
										</div>
									</div>


									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <b>ຊື່:</b></label>

									<div class="col-sm-9">
											<input type="text" name = "input_name" id="form-field-1" placeholder="	" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> <b>ນາມສະກຸນ:</b></label>

									<div class="col-sm-9">
											<input type="text"  name = "input_lastname" id="form-field-1" placeholder="	" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>



									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"> <b>ວັນດືອນປີເກີດ:</b> </label>

									<div class="col-sm-3">
									<div class="input-group">
												<input class="form-control date-picker" name ="input_dateofbirth" value ="@php echo date('Y-m-d') @endphp" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
										</div>
									</div>


								
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"><b> ເລກໜັງສືເດີນທາງ / ໜັງສືຜ່ານແດນ:</b> </label>

										<div class="col-sm-9">
											<input type="text" name = "input_passport" id="form-field-2" placeholder="" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>



									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"><b> ເລກໜັງສືເດີນທາງ / ໜັງສືຜ່ານແດນ ອອກໃຫ້ວັນທີ:</b></label>

									<div class="col-sm-3">
									<div class="input-group">
												<input class="form-control date-picker" name ="input_date_passport" value ="@php echo date('Y-m-d') @endphp" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"><b>ເລກໜັງສືເດີນທາງ / ໜັງສືຜ່ານແດນ ໝົດອາຍຸວັນທີ:</b></label>

									<div class="col-sm-3">
									<div class="input-group">
												<input class="form-control date-picker" name ="input_date_passport_expire" value ="@php echo date('Y-m-d') @endphp" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"><b> ປະເທດອອກ ໜັງສືເດີນທາງ / ໜັງສືຜ່ານແດນ: </b></label>

										<div class="col-sm-9">
											<input type="text" name = "input_country_issue" id="form-field-3" placeholder="" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"><b> ເປົ້າໝາຍຂອງການເດີນທາງ: </b></label>

										<div class="col-sm-9">
											<textarea name = "input_objective" id="form-field-3" placeholder="" class="col-xs-10 col-sm-5" rows="5" required></textarea>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"><b> ເດີນທາງຈາກປະເທດ:</b> </label>

										<div class="col-sm-9">
											<input type="text" name = "input_from" id="form-field-3" placeholder="" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> <b>ປະເທດປາຍທາງ: </b></label>

										<div class="col-sm-9">
											<input type="text" name = "input_to" id="form-field-3" placeholder="" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"><b> ເລກທີ່ທ່ຽວບິນ ຫຼື ທະບຽນພາຫານະ: </b></label>

										<div class="col-sm-9">
											<input type="text" name = "input_no_vehicle" id="form-field-3" placeholder="" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>


									<!-- <div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> ດ່ານ </label>

										<div class="col-sm-9">
											<input type="text" name = "input_gate" id="form-field-3" placeholder="" class="col-xs-10 col-sm-5" required/>
										</div>
									</div> -->

									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"><b> ມູນຄ່າທີ່ແຈ້ງ (ສະກຸນເງິນທີ່ແຈ້ງ):</b></label>

										<div class="col-sm-9">
											<input type="number" name ="input_amount" id="form-field-3" placeholder="ຈຳນວນເງິນທີ່ແຈ້ງ" class="col-xs-10 col-sm-5" />
											<div class = "col-sm-2">
											<select class="form-control" name="input_amount_cur" >	
																<option value=""></option>	
																<option value="ກີບລາວ">ກີບລາວ</option>																													
																<option value="ບາດໄທ">ບາດໄທ</option>
																<option value="ໂດລາສະຫະລັດ">ໂດລາສະຫະລັດ</option>
																<option value="ດົງຫວຽດ">ດົງຫວຽດ</option>
																<option value="ຈີນຢວນ">ຈີນຢວນ</option>
																<option value="ເອີໂຣ">ເອີໂຣ</option>
																
											</select>
											</div>
										</div>
									</div>



									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> </label>

										<div class="col-sm-9">
											<input type="number" name ="input_amount_1" id="form-field-3" placeholder="ຈຳນວນເງິນທີ່ແຈ້ງ" class="col-xs-10 col-sm-5" />
											<div class = "col-sm-2">
											<select class="form-control" name="input_amount_cur_1" >	
																<option value=""></option>	
																<option value="ກີບລາວ">ກີບລາວ</option>																													
																<option value="ບາດໄທ">ບາດໄທ</option>
																<option value="ໂດລາສະຫະລັດ">ໂດລາສະຫະລັດ</option>
																<option value="ດົງຫວຽດ">ດົງຫວຽດ</option>
																<option value="ຈີນຢວນ">ຈີນຢວນ</option>
																<option value="ເອີໂຣ">ເອີໂຣ</option>
																
											</select>
											</div>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> </label>

										<div class="col-sm-9">
											<input type="number" name ="input_amount_2" id="form-field-3" placeholder="ຈຳນວນເງິນທີ່ແຈ້ງ" class="col-xs-10 col-sm-5" />
											<div class = "col-sm-2">
											<select class="form-control" name="input_amount_cur_2" >	
																<option value=""></option>	
																<option value="ກີບລາວ">ກີບລາວ</option>																													
																<option value="ບາດໄທ">ບາດໄທ</option>
																<option value="ໂດລາສະຫະລັດ">ໂດລາສະຫະລັດ</option>
																<option value="ດົງຫວຽດ">ດົງຫວຽດ</option>
																<option value="ຈີນຢວນ">ຈີນຢວນ</option>
																<option value="ເອີໂຣ">ເອີໂຣ</option>
																
											</select>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"><b> ການແຈ້ງວັດຖຸມີຄ່າ ຫຼື ເຄື່ອງມືທາງດ້ານການເງິນ:</b> </label>

										<div class="col-sm-9">
											<textarea name = "input_item" id="form-field-3" placeholder="" class="col-xs-10 col-sm-5" rows="5" ></textarea>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-3"><b> ມູນຄ່າທຽບເທົ່າເງິນກີບ:</b> </label>

										<div class="col-sm-9">
											<input type="number" name ="input_amount_dollar" id="form-field-3" placeholder="ຈຳນວນເງິນເປັນກີບ" class="col-xs-10 col-sm-5" required/>
										</div>
									</div>

									<div class="form-group">
									<label class = "col-sm-3 control-label"><b>ປະເພດຂອງການແຈ້ງ:</b></label>
											<div class = "col-sm-2">
											<select class="form-control" name="input_type" required>	
																<option value=""></option>	
																<option value="ສະໝັກໃຈ">ສະໝັກໃຈ</option>																													
																<option value="ກວດເຫັນ">ກວດເຫັນ</option>
																
											</select>
											</div>
									</div>




									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="id-date-picker-1"><b> ໃບແຈ້ງລົງວັນທີ / ເລກຄະດີ:</b></label>

									<div class="col-sm-3">
									<div class="input-group">
												<input class="form-control date-picker" name ="input_date_notice" value ="@php echo date('Y-m-d') @endphp" id="id-date-picker-1" type="text" data-date-format="yyyy-mm-dd" />
																	<span class="input-group-addon">
																		<i class="fa fa-calendar bigger-110"></i>
																	</span>
																</div>
										</div>
									</div>

									<div class="form-group">
									<label class="col-sm-3 control-label no-padding-right" for="form-field-comment"> <b>ເອກະສານຄັດຕິດບໍ່ເກີນ 25 MB:</b></label>
									<div class="col-sm-8">
									<input type="file" name="input_attach_file" id="id-input-file-3"/>
									</div>					
									</div>

													

									


									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-primary" type="">
												<i class="ace-icon fa fa-check bigger-110"></i>
												ສົ່ງລາຍງານ
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn btn-danger" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												ລົບລ້າງ										
											</button>
										</div>
									</div>





</form>
@endsection
@section('add_js')
<!-- <script>
	$.ajaxSetup({
		headers:{
			'X-CSRF-TOKEN': $('meta[name="crsf-token"]').attr('content')
		}
	});

$("#form-field-1, #form-field-2, #form-field-3").keyup(function(){
	if ($("#form-field-1").val()!="" && $("#form-field-2").val()!="" && $("#form-field-3").val()!=""){
		a = $("#form-field-1").val().replace(/,/g, "");
		b = $("#form-field-2").val().replace(/,/g, "");
		c = $("#form-field-3").val().replace(/,/g, "");
		$("#form-field-4").val((a/b).format(2,3));
		$("#form-field-5").val(((a*c/100)/12).format(2,3));
		$("#form-field-6").val(((a/b)+((a*c/100)/12)).format(2,3));
	}
	else {
		$("#form-field-4").val("");
		$("#form-field-5").val("");
		$("#form-field-6").val("");
	}
});	

	$("#addloanemp").click(function(){
		$("#my-modal-addloan").modal();
	});

	
	$(".plusemploan").click(function(){
		$("#my-modal-addloan").modal("hide");
		var obj = JSON.parse(this.value);
		$("#form-field-0").val(obj.name);
		$("input[name='plus2']").val(obj.id);
		$("input[name='plus3']").val(obj.position);


		
	});

	validate = function(evt,me)	{
			// ເຫດການບໍ່ໃຫ້ປ້ອນຈຸດຊ້ຳ 2 ເທືອ
			if ([46].indexOf(evt.keyCode || evt.which) == 0) {	
				test = me.value
				if (test.indexOf(".") !=-1) {
					evt.returnValue = false;
					if(evt.preventDefault){evt.preventDefault();}
				}	
			}		
			if ([ 188, 8, 46, 37, 39, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 35, 36, 110, 9, 13, 44].
			indexOf(evt.keyCode || evt.which) == -1)
			{
				evt.returnValue = false;
				if(evt.preventDefault){evt.preventDefault();}
			}
	}
	Number.prototype.format = function (n, x) {
		var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
		return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&\,');
		//return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&.');
	};	
	$("input[name='plus4']").keyup(function(e) {
		vv = $( this ).val();
		var target = e.target,
			position = target.selectionStart;
		var commaPos=vv.indexOf(".");
		if (commaPos==0) {
			$(this).val("0"+vv);
			return;
		}
		var numMod = vv.substr(commaPos+1,2);
		if (position>commaPos && commaPos!=-1) {
			var num = vv.substr(0,commaPos);
			vv = num . toString()+'.'+numMod.toString();
			$(this).val(vv);
			target.selectionEnd = position;
		} else {
			if (commaPos>0) {
				var vv = vv.substr(0,commaPos);
			}
			l = vv.length;
			vv = vv.replace(/,/g,"");
			vv = vv.replace(/\./g,"");
			vv = parseFloat(vv);
			vv = vv.format(0,3);

			if (vv!="NaN") {
				if ( commaPos > 0 ) {
					$(this).val(vv+','+numMod.toString());
				} else {
					$(this).val(vv);
				}
				if (((vv.length -l) == 1)) {
					target . selectionEnd = position+1;
				} else if (((vv.length-l ) == -1)) {
					target . selectionEnd = position-1;
				} else {
					target . selectionEnd = position;
				}
			}
		}
		return;
	});


    </script> -->

	



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