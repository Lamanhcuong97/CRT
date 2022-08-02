@extends('layouts.main_user_boy')

@section('content')
<div class="space-10"></div>
<br>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ລາຍລະອຽດເອກະສານ</strong> </h2>
  </blockquote>
</div>
<br>

<div class="row">
  	<div class="widget-box animated fadeInRight">
  		<div class="widget-header">
  			<h4 class="widget-title text-lo" style="color: #426f8c;">ລາຍລະອຽດຂໍ້ມູນ</h4>
  		</div>
      <div class="widget-body">
				<div class="widget-main">
    
    <div class="col-5">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center bg-primary text-white" colspan="4"><b>ຂໍ້ມູນເອກະສານ</b></th>
                </tr>
                <tr>
                    <th scope="col">ເລກທີເອກະສານ</th>
                    <th scope="col">ເລື່ອງ</th>
                    <th scope="col">ມື້ລົງລາຍເຊັນ</th>
                    <th scope="col">ປະເພດເອກະສານ</th>
                   
                </tr>
            </thead>
            <tbody>
                    <tr>
                    <td>{{ $report->report_number }}</td>
                    <td>{{ $report->title}}</td>
                    <td>{{ $report->sign_date->format('d-m-Y') }}</td>
                    <td>{{ $report->type }}</td>
                    </tr>
            </tbody>
        </table>
    </div>

    
    <div class="col-7">
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center bg-primary text-white" colspan="3"><b>ເອກະສານຄັດຕິດ</b></th>
                </tr>
                <tr>
                    <th scope="col">ຊື່ໄຟລ໌</th>
                    <th scope="col">ປະເພດໄຟລ໌</th>
                    <th scope="col">ດາວໂຫລດ</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $sign_file->name }}</td>
                    <td>ໄຟລ໌ທີ່ມີລາຍເຊັນ</td>
                    <!-- <td><a href="{{ $sign_file->path }}" class="badge badge-primary" >ດາວໂຫຼດ</a></td> -->

                    <td><a href="{{ 'storage/'.$sign_file->path }}">ດາວໂຫລດ</a></td>
                </tr>
                @foreach($attach_files as $attach_file)
                <tr>
                    <td>{{ $attach_file->name }}</td>
                    <td>ໄຟລ໌ຄັດຕິດ</td>
                    <td><a href="download-{{ $attach_file->id }}">ດາວໂຫລດ</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


            <div class="col-7">
                <table class="table">
                     <thead>
                        <tr>
                            <th class="text-center bg-primary text-white" colspan="5"><b>ລາຍຊື່ບັນດາຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ</b></th>
                        </tr>
                        <tr>
                            <th scope="col">ຊື່ຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ</th>
                            <th scope="col">ປະເພດຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ</th>
                            <th scope="col">ມື້ສົ່ງ</th>
                            <th scope="col">ສະຖານະ</th>
                    
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bank_lists as $bank_list)
                        <tr>
                        <td>{{ $bank_list['reporter_name'] }}</td>
                        <td>{{ $bank_list['reporter_type_title'] }}</td>
                        <td>{{ $bank_list['send_day']->format('d-m-Y') }}</td>
                        <td style="color: blue;">
                            @if(trim($bank_list['status']) == 'ຕອບກັບແລ້ວ')
                            <a href="{{ action("Boys\AllInboxController@displayReportDetailScreen", ['report_id' => $report->replys->where('replier_id', $bank_list['reporter_id'])->first()->id]) }}" target="_blank">
                                {{ $bank_list['status'] }}
                            </a>
                            @else
                                {{ $bank_list['status'] }}
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>

<div class="w-100"></div>
</div></div>
@endsection