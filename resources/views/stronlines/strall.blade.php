@extends('layouts.main_strall')
@section('page_title', 'STR ALL')
@section('content')

<div class="space-10"></div>
<!-- <div class="center animated fadeInDown">
  <img src="{{ url('images/amlio_logo.png') }}" width="140" style="margin-top: -10px;"/>
</div> -->
<div class="space-10"></div>
<!-- <div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ການເກັບກຳສະຖິຕິລາຍງານຕໍ່ເຈົ້າໜ້າທີ່ຕ່ຳຫຼວດ</strong> </h2>
  </blockquote>
</div> -->
<div class="row">
  <div class="col-md-offset-2 col-md-8">
  <form  class="form-horizontal" method="POST" action={{ url('/strall/search')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  {{ csrf_field() }}
  <div class="widget-box">
  		<div class="widget-header widget-header-blue widget-header-flat">
  			<h4 class="widget-title lighter text-lo">ເລືອກຮູບແບບການຄົ້ນຫາ</h4>

  			<div class="widget-toolbar">
  			</div>
  		</div>

  		<div class="widget-body">
  			<div class="widget-main">
  				<div id="fuelux-wizard-container">
  					<div>

            <div class="form-group">
                <label class="col-sm-2 control-label no-padding-right" for="form-field-1">ຄຳຄົ້ນຫາ</label>
                <div class="col-sm-6">
                  <input type="text" name="search_txt" class="col-xs-12" tabindex="1" />
                </div>
              </div>
              <div class="form-group">

                <label class="col-sm-2 control-label no-padding-right" for="sdate"> ເລີ່ມ </label>
                <div class="col-sm-3" id="sdate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium datepicker" name="sdate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex="2" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <label class="col-sm-1 control-label no-padding-right" for="edate">  ເຖິງ </label>
                <div class="col-sm-3" id="edate">
                  <div class="input-medium">
                    <div class="input-group clearfix text-lo">
                      <input class="input-medium datepicker" name="edate"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" tabindex="3" readonly />
                      <span class="input-group-addon">
                          <i class="ace-icon fa fa-calendar"></i>
                      </span>
                    </div>
                  </div>
                </div>

                
                <div class="col-sm-offset-1 col-sm-2">
                  <button type="submit" class="btn btn-sm btn-primary" tabindex="4">ຄົ້ນຫາ</button>
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
    <div class="col-xs-12 text-lo">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  			ລາຍການ ການແຈ້ງທຸລະກຳທີ່ພາໃຫ້ສົງໄສ {{$stralls->count()}}{{' ຈາກ '}}{{$count_data}}
  		</div>

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-bordered table-striped display nowrap">
					<thead>
						<tr>
              <th class="center">ລ/ດ</th>
              <th style="color:blue">ລາຍງານໃນລະບົບລົງວັນທີ</th> 
							
              <th>ເອກະສານເລກທີ</th>
              <th>ເອກະສານລົງວັນທີ</th>
							<th>ຫົວໜ່ວຍລາຍງານ</th>
              <th>ຜູ້ຖືກລາຍງານ</th>
              <th>ສັນຊາດ</th>
              <th>ປະເພດ <br> ຜູ້ຖືກລາຍງານ</th>
              <th>ລັກສະນະທຸລະກຳ</th>

              <!-- nok hide -->
              <!-- <th>ເອກະສານຢັ້ງຢືນ</th>
              <th>ຈຳນວນເງິນເປັນກີບທັງໝົດ</th> -->
              
              <th style="width:350px">ອະທິບາຍກ່ຽວກັບທຸລະກຳ</th>
              <th style="width:350px">ເຫດຜົນທີ່ພາໃຫ້ສົງໄສ</th>  

							
              
              <th><i class="fa fa-download"></i> ໂອນຂໍ້ມູນລົງ</th>
                           
              <th>ເລກທີ່ STR ຂອງ ສຕຟງ </th>
              <th>ນັກວິເຄາະ <br> ຜູ້ຮັບຜິດຊອບ STR</th>
              

						</tr>
					</thead>

					<tbody>
          @if(isset($stralls))
            <!-- @php($i = 1) -->
              @if( count($stralls) > 0)
                @foreach($stralls as $strall=>$name)
                  <tr>
                    <td class="center">{{ $strall+1 }}</td>
                    <!-- <td class="center">{{ $i }}@php($i += 1)</td> -->
                    <td style="color:blue">@if($name->created_at !== null){{ date('d/m/Y', strtotime($name->created_at)) . ' (' . $name->created_at->diffForHumans() . ')' }}@else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</td>
                    <td>@if($name->str_no !== null) {{ $name->str_no }} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</td>
                    <td>@if($name->str_date !== null) {{ date('d/m/Y', strtotime($name->str_date))}} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</td>
                    @if($name->str_stt !== '0')
                      <td>
                        <a href="{{ url('strreceive/' . $name->idstr_form) }}" style="color: purple;">
                          @if($name->str_form_reporter_name !== null) 
                            {{ $idsenders[$name->reporter_idusr] }} 
                          @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</a>
                      </td>
                    @else
                      <td><a href="{{ url('strreceive/' . $name->idstr_form) }}">@if($name->str_form_reporter_name !== null) {{ $idsenders[$name->reporter_idusr] }} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</a></td>
                    @endif
                      
                      <td>@if($name->personnel_name !== null) {{ $name->personnel_name }} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</td>
                      <td>@if($name->nationality_name !== null) {{ $name->nationality_name }} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</td>
                      <td>{{ $name->personnel_or_entity }}</td>

                      <td>@if($name->transaction_type !== null) {{ $name->transaction_type }} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</td>


                      <!-- nok hide -->
                      <!--<td>@if($name->personnel_proof_no !== null) {{ $name->personnel_proof_no }} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</td>
                      <td>@if($name->total_amount !== null) {{ $name->total_amount }} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</td> -->
                      
                      <td>@if($name->suspicious_transaction_describe !== null) {{ $name->suspicious_transaction_describe }} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</td>
                      <td>
					  @if($name->suspicious_clue !== null) 
						{{ $name->suspicious_clue }} 
						@else {{ 'ບໍ່ມີຂໍ້ມູນ' }} 
					  @endif
					  </td>  

                    

    
                      <td>
                        <div style="margin: -6px 0 -8px 0;">
						<!--@if(isset($name->idstr_form))-->
                          <form  class="form-horizontal" method="POST" action={{ url('/strpdf')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
                          {{ csrf_field() }}
                            <input type="hidden" name="idstr" value="{{ $name->idstr_form }}" />
                            <button type="submit" class="btn btn-xs" formtarget="_blank"><i class="fa fa-file-pdf-o"></i> ກົດທີ່ນີ້</button>
                          </form>
                        </div>
						<!--@endif-->
                      </td>
                      
                  

                      <td>
					   <!--@if(isset($amliostrno))
                        @foreach($amliostrno as $rp)
                          @if($rp->idstr_form == $name->idstr_form)
                          {{$rp->amliostr_no}}
                            @break
                          @endif
                        @endforeach
                      @endif -->
					  @if(isset($name->amliostr_no))
                         {{$name->amliostr_no}}
					 @endif
                      @if (Auth::user()->idusr == 1016)

                      <button data-id="{{$name->idstr_form}}" class="btn btn-xs bt_amliostrno" type="button" data-toggle="modal" data-target="#exampleModal2" >+</button>
                      @endif
                    </td>


                    <td>
                      @if(isset($responsibility))
                        @foreach($responsibility as $rp)
                          @if($rp->idstr_form == $name->idstr_form)
                            @foreach($usr as $u)
                              @if($u->idusr == $rp->idusr)
                                {{$u->usr_name}}
                              @endif
                            @endforeach
                          @endif
                        @endforeach
                      @endif
                      @if (Auth::user()->idusr == 1016)
                      <button data-id="{{$name->idstr_form}}" class="btn btn-xs bt_res" type="button" data-toggle="modal" data-target="#exampleModal" >+</button>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method='post' action="{{url('/responsibility')}}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="exampleFormControlSelect1"><b>ກະລຸນາເລືອກນັກວິເຄາະຜູ້ຈະຮັບຜິດຊອບ STR</b></label>
        <select name="uid" class="form-control" id="exampleFormControlSelect1">
          
          @foreach($usr as $u)
            <option value="{{$u->idusr}}" >{{$u->usr_name}} {{$u->usr_surname}}</option>
          @endforeach
          
        </select>
        <input type="hidden" name="form_id" id="form_id" />
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ປິດໜ້າຕ່າງນີ້</button>
        <button type="submit" class="btn btn-primary">ກຳນົດຜູ້ຮັບຜິດຊອບ</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>ດ
      </div>
      <div class="modal-body">
      <form class="form-horizontal" method='post' action="{{url('/amliostrno')}}">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="exampleFormControlSelect2" class="col-sm-4 control-label"><b>ກະລຸນາປ້ອນເລກທີ STR</b></label>
        <div class="col-sm-6">
          <input class="form-control" type="text" name="amliostrno" autocomplete="off"/>
          <input type="hidden" name="form_id2" id="form_id2" />
        </div>
      </div>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ປິດໜ້າຕ່າງນີ້</button>
        <button type="submit" class="btn btn-primary">ໃສ່ເລກທີ່ STR</button>
      </div>
      </form>
    </div>
  </div>
</div>
@stop
