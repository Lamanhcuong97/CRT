@extends('layouts.main_user_sent')
@section('page_title', 'ເອກະສານຂາອອກທັງຫມົດ')
@section('content')

<div class="space-10"></div>

<div class="space-10"></div>

<div class="row">
  <div class="col-md-offset-2 col-md-8">
  <form  class="form-horizontal" method="POST" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
  {{ csrf_field() }}


            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

</div>
  <div class="container">
  <div class="row animated fadeInRight">
    <div class="col-xs-12">
        <div class="clearfix">
            <div class="pull-right tableTools-container"></div>
        </div>
        <div class="table-header" style="background-color: #98b9ce; background-image: url('images/bg-images11.jpg'); background-size: 100%;">
            ເອກະສານຂາອອກທັງຫມົດ
        </div>

      <div style="background-color: #eee;">
        <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                   <thead class="thead-light">
        <tr>
            <th scope="col">ເລກທີເອກະສານ</th>
            <th scope="col">ມື້ລົງລາຍເຊັນ</th>
            <th scope="col">ເລື່ອງ</th>
           {{--  <th scope="col">ປະເພດ</th> --}}
            <th scope="col">ລາຍລະອຽດ</th>
        </tr>
    </thead>
    <tbody>
        @foreach($replys as $reply)
        <tr>
            <td>{{ $reply->report_number }}</td>
            <td>{{ $reply->sign_date->format('d-m-Y') }}</td>
            <td>{{ $reply->title }}</td>
         {{--    <td>{{ $reply->type }}</td> --}}
            <td><a href="reply-user-detail-{{ $reply->id }}">ລາຍລະອຽດ</a></td>
        </tr>
        @endforeach
    </tbody>
                </table>
        
      </div>
    </div>
  </div>
  </div>



@stop
