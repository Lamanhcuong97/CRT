@extends('layouts.main_ctrstats')
@section('page_title', 'Comment report')
@section('content')

<div class="space-5"></div>





  <div>
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  	 
     
      <div class="row">
  <div class="col-md-12">
  <form  class="form-horizontal" method="GET" action={{ url('ctrstats')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  {{ csrf_field() }}
  <div class="widget-box">
  		<div class="widget-header widget-header-blue widget-header-flat">
  			<h4 class="widget-title lighter text-lo">ສັງລວມສະຖິຕິ CTR </h4>

  			<div class="widget-toolbar">
  			</div>
  		</div>

  		<div class="widget-body">
  			<div class="widget-main">
  				<div id="fuelux-wizard-container">
  					<div>
</div>

              <!-- reporter  -->
              <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right" for="form-field-1">ຊື່ຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ  </label>
              <div class="col-sm-6">
              <select name="reporter" class="col-xs-12 col-sm-12" required>
                  <option value="all_re" selected>ເລືອກຫົວຫນ່ວຍທັງຫມົດ</option>
                @foreach ($reporters as $reporter)
                    <option value="{{$reporter->idreporter}}">{{$reporter->reporter_name}}</option>
                @endforeach   
              </select>
              </div>
            </div> 


              <!-- date form  -->
              <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="sdate"> ເລີ່ມ </label>
                <div class="col-sm-2" id="sdate">
                      <input class="input-medium datepicker" name="sdate"  type="date" required >
                  </div>
              
                <label class="col-sm-1 control-label no-padding-right" for="edate">  ເຖິງ</label>
                <div class="col-sm-2" id="sdate">
                      <input class="input-medium datepicker" name="edate" type="date" required>
                </div>
                <div >
                  <button type="submit" class="btn btn-sm btn-primary" style="width:85px;">ຄົ້ນຫາ</button>
                </div>
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



      <div style="background-color: #F7F7F7; padding:1px 30px; font-size:16px;" >
      <h3 style="font-family:Phetsarath OT;" class="bg-primary text-center">ສະຖິຕິ CTR ບຸກຄົນ ມີທັງຫມົດ {{number_format($p_all_trans)}} ທຸລະກຳ ນັບແຕ່ {{ date('m/Y', strtotime($from_date)).' ຫາ '.date('m/Y', strtotime($to_date))}}</h3>

      <table class="table">
  <thead>
    <tr>
      <th scope="col" class="bg-primary">ລຳດັບ</th>
      <th scope="col" class="bg-primary">ສະກຸນເງິນ</th>
      <th scope="col" class="bg-primary">ຈຳນວນທຸລະກຳ</th>
      <th scope="col" class="bg-primary">ຈຳນວນເງິນ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>ກີບ</td>
      <td>{{number_format($pk_trans)}}</td>
      <td>{{number_format($pk_amount)}} ກີບ </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ບາດ</td>
      <td>{{ number_format($pb_trans) }}</td>
      <td>{{ number_format($pb_amount) }} ບາດ </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>ໂດລາ</td>
      <td>{{ number_format($pdl_trans) }}</td>
      <td>{{number_format($pdl_amount)}} ໂດລາ </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>ຢວນ</td>
      <td>{{ number_format($py_trans) }}</td>
      <td>{{ number_format($py_amount) }} ຢວນ </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>ດົງ</td>
      <td>{{ number_format($pd_trans) }}</td>
      <td>{{ number_format($pd_amount) }} ດົງ </td>
    </tr>
  </tbody>
</table>
      
     
<h3 style="font-family:Phetsarath OT;" class="bg-primary text-center">ສະຖິຕິ CTR ນິຕິບຸກຄົນ ມີທັງຫມົດ {{number_format($l_all_trans)}} ທຸລະກຳ ນັບແຕ່ {{ date('m/Y', strtotime($from_date)).' ຫາ '.date('m/Y', strtotime($to_date))}}</h3>
    
      <table class="table">
  <thead>
    <tr>
      <th scope="col" class="bg-primary">ລຳດັບ</th>
      <th scope="col" class="bg-primary" >ສະກຸນເງິນ</th>
      <th scope="col" class="bg-primary">ຈຳນວນທຸລະກຳ</th>
      <th scope="col" class="bg-primary">ຈຳນວນເງິນ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <tr>
      <th scope="row">1</th>
      <td>ກີບ</td>
      <td>{{number_format($pk_trans)}}</td>
      <td>{{number_format($pk_amount)}} ກີບ </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>ບາດ</td>
      <td>{{ number_format($pb_trans) }}</td>
      <td>{{ number_format($pb_amount) }} ບາດ </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>ໂດລາ</td>
      <td>{{ number_format($pdl_trans) }}</td>
      <td>{{number_format($pdl_amount)}} ໂດລາ </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>ຢວນ</td>
      <td>{{ number_format($py_trans) }}</td>
      <td>{{ number_format($py_amount) }} ຢວນ </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>ດົງ</td>
      <td>{{ number_format($pd_trans) }}</td>
      <td>{{ number_format($pd_amount) }} ດົງ </td>
    </tr>
  </tbody>
</table>

<!-- // Continue -->
<!-- <h3 style="font-family:Phetsarath OT;" class="bg-primary text-center">ລາຍຊື່ຫົວຫນ່ວຍທີ່ລາຍງານມາ {{$l_all_trans}} ທຸລະກຳ ນັບແຕ່ {{ date('m/Y', strtotime($from_date)).' ຫາ '.date('m/Y', strtotime($to_date))}}</h3>

    
      <h3 style="font-family:Phetsarath OT">ຫົວຫນ່ວຍທີ່ລາຍງານມາ ຊື່....... ຈຳນວນຄັ້ງ..............</h3>
      <h3 style="font-family:Phetsarath OT">ຫົວຫນ່ວຍທີ່ບໍ່ລາຍງານມາ ຊື່.....  ຈຳນວນຄັ້ງ.............</h3>

          -->
        
      </div>
    </div>
  </div>
  </div>



@stop
