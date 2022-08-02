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
  <a href="{{ url('/admin/rep')}}" class="btn btn-link btn-lg"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> ກັບຄືນ</a>
    <div class="alert alert-info">
    ແກ້ໄຂຂໍ້ມຸນກຸ່ມລາຍງານ
    </div>
  @endif
    <form method="POST" class="col-md-6" role="form" enctype="multipart/form-data" accept-charset="UTF-8" id="form_add">
     {{ csrf_field() }}
     @if (isset($Get_edit))
     <input type="hidden" id="idreporter" name="idreporter" value="{{$Rep_edit->idreporter}}">
     @endif
      <div class="form-group" >
        <label >ຊື່ຜູ້ລາຍງານ</label>
        <input type="text" class="form-control" id="reporter_name" name="reporter_name" placeholder="ຊື່ຜູ້ລາຍງານ"
        value="<?php if (isset($Get_edit)){echo $Rep_edit->reporter_name;} ?>">
      </div>
      <div class="form-group">
        <label>ປະເພດຜູ້ລາຍງານ</label>
        <select class="form-control" id="reporter_type_idreporter_type" name="reporter_type_idreporter_type">
        @foreach($Rep_types as $Rep_type)
          <option value="{{$Rep_type->idreporter_type}}" <?php if (isset($Get_edit) && $Rep_type->idreporter_type == $Rep_edit->reporter_type_idreporter_type){echo "selected";} ?>
          >{{$Rep_type->reporter_type_title}}</option>
        @endforeach
        </select>
      </div>
      <div class="form-group">
        <label>ກຸ່ມທະນາຄານ</label>
        <select class="form-control" id="bank_group_idbank_group" name="bank_group_idbank_group"
        <?php if (isset($Get_edit) && $Rep_edit->reporter_type_idreporter_type != 1){echo "disabled";} ?> >
        @foreach($Rep_groups as $Rep_group)
          <option value="{{$Rep_group->idbank_group}}" <?php if (isset($Get_edit) && $Rep_group->idbank_group == $Rep_edit->bank_group_idbank_group){echo "selected";} ?>
          >{{$Rep_group->bank_group_title}}</option>
        @endforeach
        </select>
      </div>
      @if (isset($Get_edit))
        <button type="submit" class="btn btn-primary form_sub" data-action="{{ url('/admin/rep/edit/add')}}"> ແກ້ໄຂຂໍ້ມູນ</button>
      @else
        <button type="submit" class="btn btn-primary form_sub" data-action="{{ url('/admin/rep/add')}}"> ເພີ່ມຂໍ້ມູນ</button>
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
                    <th>ຊື່ຜູ້ລາຍງານ</th>
                    <th>ປະເພດຜູ້ລາຍງານ</th>
                    <th>ກຸ່ມທະນາຄານ</th>
                    <th>ແກ້ໄຂ</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $i = 1;?>
                  @if(isset($Reps))
                    @if( count($Reps) > 0)
                      @foreach($Reps as $Rep)
                        <tr>
                          <td class="center">{{$i}}</td>
                          <td>{{$Rep->reporter_name}}</td>
                          <td>{{$Rep->getRelation('Report_type')->reporter_type_title}}</td>
                            @if(isset($Rep->getRelation('Bank_group')->bank_group_title))
                              <td>{{$Rep->getRelation('Bank_group')->bank_group_title}}</td>
                            @else
                              <td> - </td>
                            @endif
                          <form method="POST" action="{{ url('/admin/rep/del')}}" role="form" enctype="multipart/form-data" accept-charset="UTF-8">
                            {{ csrf_field() }}
                            <input type="hidden" id="idreporter" name="idreporter" value="{{$Rep->idreporter}}">
                            <td width="9%"><a href="{{ url('/admin/rep/edit')}}/{{$Rep->idreporter}}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>&nbsp;
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
