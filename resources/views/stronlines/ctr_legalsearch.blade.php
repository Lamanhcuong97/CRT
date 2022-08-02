@extends('layouts.main_ctrlegalstats')
@section('page_title', 'Comment report')
@section('content')

<div class="space-5"></div>





  <div >
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  	 
     
    <div class="row">
  <div class="col-md-12">
  <form  class="form-horizontal" method="GET" action={{ url('ctrlegalsearch')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  {{ csrf_field() }}
  <div class="widget-box" >
  		<div class="widget-header widget-header-blue widget-header-flat" >
  			<h4 class="widget-title lighter text-lo" style="font-family:Phetsarath OT">ການຄົ້ນຫາຂໍ້ມູນ CTR ບຸກຄົນ </h4>

  			<div class="widget-toolbar" >
  			</div>
  		</div>

  		<div class="widget-body" >
  			<div class="widget-main" style="height:auto;" >
  				<div id="fuelux-wizard-container">
  					<div>
</div>
             

              <div class="form-group ">
                <label class="col-sm-1 control-label no-padding-right" for="name"></label>
                <div  id="sdate">
                      <input name="name" class="col-lg-4" type="text" placeholder="ຄົ້ນຫາຕາມຊື່" >
                  </div>
              
                <label class="col-sm-2 control-label no-padding-right" for="identity_card"></label>
                <div id="sdate">
                      <input name="identity_card" class="col-lg-4"  type="text" placeholder="ຄົ້ນຫາຕາມເລກຢັ້ງຢືນຕົວຕົນ"   >
                </div><br><br>
                <div class="text-center">
                  <button type="submit" class="btn btn-sm btn-primary" style="width:85px;">ຄົ້ນຫາ</button>
                </div>
                
              </div>
<!-- comment  table-bordered-->
<table class="table ">
			<tr>
				<th  class="bg-primary" >ລຳດັບ</th>
				<th  class="bg-primary" >ຊື່ ແລະ ນາມສະກຸນ</th>
				<th  class="bg-primary" >ເລກຢັ້ງຢືນຕົວຕົນ</th>
				<th class="bg-primary" >ລາຍລະອຽດ</th>
			</tr>
			@if($ctrlegalstats->count())
				@foreach($ctrlegalstats as $ctrlegalstat)
				<tr>
					<td>{{ $ctrlegalstat->id }}</td>
					<td>{{ $ctrlegalstat->name }}</td>
					<td>{{ $ctrlegalstat->identity_card }}</td>
					<td><a href="#">{{ 'ລາຍລະອຽດເພີ່ມເຕີມ' }}</a></td>

				</tr>
				@endforeach
			@else
			<tr>
				<td colspan="3">Result not found.</td>
			</tr>
			@endif
		</table>
        <div>
            <b>{{ 'ການຄົ້ນຫາມີທັງຫມົດ '. number_format($ctrlegalstats->total()) .' ລາຍຊື່ທີ່ໃກ້ຄຽງ'}}</b>
        </div>

        <div class="d-flex justify-content-center">
        
            {{ $ctrlegalstats->appends(request()->except('page'))->links() }}
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

    
    </div>
  </div>
  </div>


@stop
