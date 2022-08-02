@extends('layouts.main_user_boy')
@section('page_title', 'ເເລກປ່ຽນຂໍ້ມູນກັບບັນດາທະນາຄານ')
@section('content')

{{-- <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" type="text/css"> --}}




<div class="space-10"></div>
<br>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ຮ່າງແບບພິມແຈ້ງຕອບສຳນັກງານຂໍ້ມູນຕ້ານການຟອກເງິນ *</strong> </h2>
  </blockquote>
</div>
<br>

<form  class="form-horizontal" method="POST" action={{ route('reply-report')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
{{ csrf_field() }}
  <div class="row">
  	<div class="widget-box animated fadeInRight">
  		<div class="widget-header">
  			<h4 class="widget-title text-lo" style="color: #426f8c;">ແບບຟອມແຈ້ງຕອບ</h4>
  		</div>
      <div class="widget-body">
				<div class="widget-main">
        
@if(Session::has('success'))
    <div class="alert alert-success text-center" style="font-size: 30px;">
        {!! Session::get('success') !!}
    </div>
@endif


@if(Session::has('error'))
    <div class="alert alert-danger  text-center"  style="font-size: 30px;">
        {!! Session::get('error') !!}
    </div>
@endif
<div id="accordion" class="accordion-style1 panel-group text-lo">
<input type="hidden" name="report_id" value={{ $report_id }}>
<!-- 
			<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເນື້ອໃນເອກະສານ</label>
					<div class="col-sm-8">
						<input type="text" class="col-xs-12" name="suspicious_transaction_title" required />
					</div>
			</div>


			<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">ເອກະສານຕິດຄັດບໍ່ເກີນ 20 MB</label>
					<div class="col-sm-8">
						<input type="file" name="suspicious_transaction_describe_file" id="id-input-file-3" required />
					</div>
			</div>
			<div class="form-group">
			<label class="col-sm-8 control-label no-padding-right" style="color:red">ກະລຸນາຕັ້ງຊື່ເອກະສານຕິດຄັດ (File Upload) ເປັນຕົວອັກສອນພາສາອັງກິດເທົ່ານັ້ນ</label>
			
			</div> -->

	    <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style = "color:red">ເອກະສານ ເລກທີ: (*)</label>
          <div class="col-sm-3">
            <input type="text" name="report_number" class="col-xs-12 col-sm-12" required/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1" style = "color:red">ເອກະສານເລື່ອງ: (*)</label>
          <div class="col-sm-3">
            <input type="text" name="title" class="col-xs-12 col-sm-12" />
          </div>
        </div>

		<div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style = "color:red">ມື້ລົງລາຍເຊັນ (*)</label>
          <div class="col-sm-3">
            <input type="date" name="sign_date" class="col-xs-12 col-sm-12" required/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1" style = "color:red">ປະເພດເອກະສານ (*)</label>
          <div class="col-sm-3">
          <select name="type" class="col-xs-12 col-sm-12" required>
                    <option value="ດ່ວນ">ດ່ວນ</option>
                    <option value="ທຳມະດາ">ທຳມະດາ</option>
          </select>
          </div>
        </div>


      <!-- Send files -->
      <div class="form-group">
          <label class="col-sm-3 control-label no-padding-right" for="form-field-1" style = "color:red">ເອກະສານທີ່ມີລາຍເຊັນ (*)</label>
          <div class="col-sm-3">
            <input type="file" name="sign_file" class="col-xs-12 col-sm-12" required/>
          </div>
          <label class="col-sm-2 control-label no-padding-right" for="form-field-1" style = "color:red">ເອກະສານຄັດຕິດ </label>
          <div class="col-sm-3">
            <input type="file" name="attach_file[]" class="col-xs-12 col-sm-12" multiple="" />
          </div>
      </div>

        <div class="clearfix form-actions">
					<div class="col-sm-offset-1 col-sm-10 text-center">
						<button class="btn" type="reset">
							<i class="ace-icon fa fa-undo bigger-110"></i>
							ຍົກເລີກ
						</button>
            &nbsp; &nbsp; &nbsp;
       
						<button class="btn btn-primary" type="submit">
							<i class="ace-icon fa fa-check bigger-110"></i>
							ຕອບກັບ
						</button>
					</div>
				</div>
      </div><!-- end accordion -->
			</div>
		</div>
  </div>
</div>


</form>


   
@endsection
