@extends('layouts.main0')
@section('page_title', 'FIR report')
@section('content')

<div class="space-10"></div>
<!-- <div class="center animated fadeInDown">
  <img src="{{ url('images/amlio_logo.png') }}" width="140" style="margin-top: -10px;"/>
</div> -->
<div class="space-10"></div>
<!-- <div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ການເກັບກຳສະຖິຕິລາຍງານຕໍ່ເຈົ້າໜ້າທີ່ຕ່ຳຫຼວດ</strong> </h2>
  </blockquote>
</div> -->
<div class="row">
  <div class="col-md-offset-2 col-md-8">
  <form  class="form-horizontal" method="POST" action={{ url('/firshow')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  {{ csrf_field() }}
    <div class="widget-box">
  		<div class="widget-header widget-header-blue widget-header-flat">
  			<h4 class="widget-title lighter text-lo">ເລືອກໄລຍະເວລາ</h4>

  			<div class="widget-toolbar">
  			</div>
  		</div>

  		<div class="widget-body">
  			<div class="widget-main">
  				<div id="fuelux-wizard-container">
  					<div>

              <div class="form-group">

                <label class="col-sm-2 control-label no-padding-right" for="sdate"> ເລີ່ມ </label>
                <div class="col-sm-3" id="sdate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium date-picker" name="sdate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" value="@if(isset($ssdate)){{ $ssdate }}@endif" tabindex="1" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <label class="col-sm-1 control-label no-padding-right" for="edate"> ເຖິງ </label>
                <div class="col-sm-3" id="edate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium date-picker" name="edate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" value="@if(isset($sedate)){{ $sedate }}@endif" tabindex="2" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="col-sm-offset-1 col-sm-2">
                  <button type="submit" class="btn btn-sm btn-primary" tabindex="3">ຄົ້ນຫາ</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

</div>
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  			ຜົນການຄົ້ນຫາລາຍງານ FIR
  		</div>

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">ລ/ດ</th>
							<th>ເລກທີ ແລະ ວັນທີສົ່ງບົດ FIR ຂອງ ສຕຟງ</th>
							<th>ຊື່ ແລະ ຂໍມູນຂອງຜູ່ຖືກລາຍງານ</th>
							<th>ທ/ຄ ທີ່ລາຍງານ</th>
							<th>ເຫດຜົນທີ່ສົ່ງບົດ FIR</th>
							<th>ຜູ່ວິເຄາະ</th>
              <th>ພາກສ່ວນຮັບບົດ FIR</th>
              <th>ໝາຍເຫດ</th>
              <th>Attach Files</th>
						</tr>
					</thead>

					<tbody>
            @if(isset($firreports))
              @if( count($firreports) > 0)
                @foreach($firreports as $firreport => $name)
                  <tr>
                    <td class="center">{{ $firreport+1 }}</td>
        						<td>{{ $name->fir_form_no . ', ລົງວັນທີ ' . date('d/m/Y', strtotime($name->fir_form_date)) }}</td>
                    <td>{{ $name->fir_form_to_be_report_info }}</td>
                    <td>{{ $name->reporter_name }}</td>
        						<td>{{ $name->fir_form_describe }}</td>
        						<td>{{ $name->usr_name }}</td>
        						<td>{{ $name->fir_form_receiver }}</td>
        						<td>{{ $name->fir_form_mark }}</td>

                    <td>
                            @if(isset($attch_files[$name->idfir_form]))
                                @php $i=1 @endphp
                                @foreach ($attch_files[$name->idfir_form] as $k => $atf)
                                <a href="{{asset($atf)}}">File_{{$i}}</a><br>
                                @php $i++ @endphp
                                @endforeach
                            
                            @endif                            
                            </td>
                    
        					</tr>
                @endforeach
              @endif
            @else
            <tr>
              <td colspan="8" class="center">ບໍ່ມີຂໍ້ມູນ</td>

            </tr>
            @endif
					</tbody>
				</table>
      </div>
    </div>
  </div>



@stop
