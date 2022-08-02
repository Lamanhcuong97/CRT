@extends('layouts.boymain')
@section('page_title', 'ເເລກປ່ຽນຂໍ້ມູນກັບບັນດາທະນາຄານ')
@section('content')

{{-- <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" type="text/css"> --}}


@if(Session::has('success'))
    <div class="alert alert-success">
        {!! Session::get('success') !!}
    </div>
@endif


@if(Session::has('error'))
    <div class="alert alert-danger">
        {!! Session::get('error') !!}
    </div>
@endif

<form method="POST" action="{{ url('reply-report') }}" enctype="multipart/form-data" class="container">
    {{ csrf_field() }}

    <div class="row col" style="margin-top: 10px; margin-left:0px;margin-bottom: 20px; background-color: #98b9ce;background-image: url('images/bg-images11.jpg'); background-size: 100%;height: 40px;color:white;font-size: 30px;">
       ສົ່ງເອກະສານຫາຫົວຫນ່ວຍທີ່ມີຫນ້າທີ່ລາຍງານ
    </div>

    <!-- Report information -->

    <input type="hidden" name="report_id" value={{ $report_id }}>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>ເອກະສານ ເລກທີ</label>
                <input type="text" name="report_number" class="form-control" placeholder="Enter report number" required>
            </div>
            <div class="form-group">
                <label>ເອກະສານເລື່ອງ</label>
                <input type="text" name="title" class="form-control" placeholder="Title" required>
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                <label>ມື້ລົງລາຍເຊັນ</label>
                <input type="date" name="sign_date" class="form-control" required>
            </div>
            <div class="form-group">
                <label>ປະເພດເອກະສານ</label>
                <select name="type" class="btn-outline-secondary form-control" required>
                    <option value="a">ເອກະສານທົ່ວໄປ</option>
                    <option value="b">ເອກະສານສຳຄັນ</option>
                </select>
            </div>
        </div>
    </div>



 <!-- Files -->
    <div class="row col">
        <div class="form-group" style="width: 50%">
            <label>ເອກະສານທີ່ມີລາຍເຊັນ</label>
            <input type="file" name="sign_file" class="btn-outline-secondary form-control" required>
        </div>
    </div>
    <div class="row col">
        <div class="form-group" style="width: 50%">
            <label>ເອກະສານຄັດຕິດ</label>
            <input type="file" name="attach_file[]" class="btn-outline-secondary form-control" multiple required>
        </div>
    </div>
    
    </div>




    <!-- Send button -->
    <div class="row col">
        <button type="submit" class="btn btn-primary" style="margin: auto;">Send</button>
    </div>
</form>
@endsection
