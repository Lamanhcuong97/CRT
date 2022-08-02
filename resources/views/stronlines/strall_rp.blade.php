@extends('layouts.main_strall_rp')
@section('page_title', 'STR ALL')
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
  <form  class="form-horizontal" method="POST" action={{ url('/nationalityshow')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  {{ csrf_field() }}

  </form>
</div>
</div>
  <div class="row animated fadeInRight">
    <div class="col-xs-12 text-lo">
  		<div class="clearfix">
  			<div class="pull-right tableTools-container"></div>
  		</div>
  		<div class="table-header" style="background-color: #98b9ce; background-image: url('{{ url( 'images/bg-images11.jpg')}}'); background-size: 100%;">
  			ລາຍການ ການແຈ້ງທຸລະກຳທີ່ພາໃຫ້ສົງໄສ
  		</div>

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th class="center">ລ/ດ</th>
							<th>ເລກທີ</th>
							<th>ຜູ້ຖືກລາຍງານ</th>
              <th>ປະເພດການລາຍງານ</th>
              <th><i class="fa fa-download"></i> ໂອນຂໍ້ມູນລົງ</th>
              <th>ແຈ້ງເມື່ອ</th>
						</tr>
					</thead>

					<tbody>
            @if(isset($stralls))
              @if( count($stralls) > 0)
                @foreach($stralls as $strall => $name)
                  <tr>
                    <td class="center">{{ $strall+1 }}</td>
                    @if($name->str_stt !== '0')
          						<td><a href="{{ url('strreceive/' . $name->idstr_form) }}" style="color: purple;">@if($name->str_no !== null) {{ $name->str_no }} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</a></td>
                    @else
                      <td><a href="{{ url('strreceive/' . $name->idstr_form) }}">@if($name->str_no !== null) {{ $name->str_no }} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</a></td>
                    @endif
                    <td>@if($name->personnel_name !== null) {{ $name->personnel_name }} @else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</td>
                    <td>{{ $name->personnel_or_entity }}</td>
                    <td>
                      <div style="margin: -6px 0 -8px 0;">
                        <form  class="form-horizontal" method="POST" action={{ url('/strpdf')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
                        {{ csrf_field() }}
                          <input type="hidden" name="idstr" value="{{ $name->idstr_form }}" />
                          <button type="submit" class="btn btn-xs"><i class="fa fa-file-pdf-o"></i> ກົດທີ່ນີ້</button>
                        </form>
                      </div>
                    </td>
                    <td>@if($name->created_at !== null){{ date('d/m/Y', strtotime($name->created_at)) . ' (' . $name->created_at->diffForHumans() . ')' }}@else {{ 'ບໍ່ມີຂໍ້ມູນ' }} @endif</td>
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
