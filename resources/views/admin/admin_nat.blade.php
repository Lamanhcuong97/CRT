@extends('layouts.mainadmin')
@section('page_title', 'STR ALL')
@section('content')


<div class="space-10"></div>
<div class="row well animated fadeInRight" style="background-color: #98b9ce; background-image: url('/images/bg-images11.jpg'); background-size: 100%;">
  <blockquote  style="margin-bottom: -16px; margin-top: -16px; height: 40px;">
      <h2 class="text-lo text-nowrap" style="color: #ebf2f6; margin-top: -6px;"><strong>ໜ້າຈັດການຂໍ້ມູນ</strong> </h2>
  </blockquote>
</div>

<div class="row" style="background-color:#f2f2f2;">
@include('layouts.mainadminmenu')
  <div class="col-md-10" style="background-color:white;padding:20px;">
  <!-- ------------------- report msg ----------------- -->
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
  @endif
  @if (session('edit'))
    <div class="alert alert-success">
        {{ session('edit') }}
    </div>
  @endif
  @if (session('del'))
    <div class="alert alert-success">
        {{ session('del') }}
    </div>
  @endif
  <!-- ------------------- report msg ----------------- -->
  @if (isset($Get_edit))
  <a href="{{ url('/admin/nat')}}" class="btn btn-link btn-lg"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> ກັບຄືນ</a>
    <div class="alert alert-info">
    ແກ້ໄຂຂໍ້ມຸນປະເທດ
    </div>
  @endif
    <form method="POST" class="col-md-6" role="form" enctype="multipart/form-data" accept-charset="UTF-8" id="form_add">
     {{ csrf_field() }}
     @if (isset($Get_edit))
     <input type="hidden" id="idnationality" name="idnationality" value="{{$Nat_edit->idnationality}}">
     @endif
      <div class="form-group" >
        <label >ເລກລະຫັດປະເທດ</label>
        <input type="text" class="form-control" id="nationality_code" name="nationality_code" placeholder="ເລກລະຫັດປະເທດ"
        value="<?php if (isset($Get_edit)){echo $Nat_edit->nationality_code;} ?>">
      </div>
      <div class="form-group">
        <label>ຊື່ປະເທດ</label>
        <input type="text" class="form-control" id="nationality_name" name="nationality_name" placeholder="ຊື່ປະເທດ"
        value="<?php if (isset($Get_edit)){echo $Nat_edit->nationality_name;} ?>">
      </div>
      @if (isset($Get_edit))
        <button type="submit" class="btn btn-primary form_sub" data-action="{{ url('/admin/nat/edit/add')}}"> ແກ້ໄຂຂໍ້ມູນ</button>
      @else
        <button type="submit" class="btn btn-primary form_sub" data-action="{{ url('/admin/nat/add')}}"> ເພີ່ມຂໍ້ມູນ</button>
      @endif
    </form>
	@if (!isset($Get_edit))
    <div class="space-10"></div>

          <div class="row">
        <div class="col-md-offset-2 col-md-8">
        <form  class="form-horizontal" method="POST" action={{ url('/nationalityshow')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
        {{ csrf_field() }}
        </form>
      </div>
      </div>
        <div class="row animated fadeInRight">
          <div class="col-xs-12">
            <div class="clearfix">
              <div class="pull-right tableTools-container"></div>
            </div>

            <div style="background-color: #eee;">
              <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="center">ລ/ດ</th>
                    <th>ເລກລະຫັດປະເທດ</th>
                    <th>ຊື່ປະເທດ</th>
                    <th>ແກ້ໄຂ</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1;?>
                  @if(isset($Nats))
                    @if( count($Nats) > 0)
                      @foreach($Nats as $Nat)
                        <tr>
                          <td class="center">{{$i}}</td>
                          <td>{{$Nat->nationality_code}}</td>
                          <td>{{$Nat->nationality_name}}</td>
                          <form method="POST" action="{{ url('/admin/nat/del')}}" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
                            {{ csrf_field() }}
                            <input type="hidden" id="idnationality" name="idnationality" value="{{$Nat->idnationality}}">
                            <td width="9%"><a href="{{ url('/admin/nat/edit')}}/{{$Nat->idnationality}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>&nbsp;
                            <button type="submit" class="btn btn-danger btn-xs btn-del"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></input></td>
                          </form>
                        </tr>
                    <?php $i++;?>
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
	@endif
  </div>
</div>
@stop
