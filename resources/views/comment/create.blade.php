@extends('layouts.main')
@section('page_title', 'FIR')
@section('content')
<div class="space-10"></div>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ກະລຸນາປະກອບຄຳເຫັນ ເພື່ອການພັດທະນາລະບົບໃຫ້ມີປະສິດຕິພາບຍິ່ງຂຶ້ນໃນຂ້າງໜ້າ</strong> </h2>
  </blockquote>
</div>


<form  class="form-horizontal" method="POST" action={{ url('/commentstore')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
{{ csrf_field() }}
  <div class="row">
  	<div class="widget-box animated fadeInRight">
  		<div class="widget-header">
  			<!-- <h4 class="widget-title">ການລາຍງານຕໍ່ເຈົ້າໜ້າທີ່</h4> -->
  		</div>
      <div class="widget-body">
				<div class="widget-main">

          <div class="form-group">
            <label class="col-sm-4 control-label no-padding-right" for="dob"> ລົງວັນທີ </label>
            <div class="col-sm-3" id="dob">
              <div class="input-medium">
                <div class="input-group clearfix text-lo">
                  <input class="input-medium date-picker" name="comment_form_date" value="@php echo date('Y-m-d'); @endphp"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex="1"/>
                  <span class="input-group-addon">
                      <i class="ace-icon fa fa-calendar"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
  					<label class="col-sm-4 control-label no-padding-right" for="form-field-comment">ຄຳເຫັນ</label>
  					<div class="col-sm-6">
  						<textarea class="form-control" name="comment_form_detail" id="form-field-8" placeholder="ປະກອບຄຳເຫັນ" rows="10" require></textarea>
  					</div>
  				</div>

          
          <div class="form-group">
            <div class="col-sm-4 col-sm-offset-4" >
  						<button class="btn btn-primary" type="submit">
  							<i class="ace-icon fa fa-check bigger-110"></i>
  							ບັນທຶກ
  						</button>
            </div>
          </div>
  					</div>
  				</div>

        </div>
      </div>
    </div>
  </div>


</form>

@stop
