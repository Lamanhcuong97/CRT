@extends('layouts.main')
@section('page_title', 'Article Page')
@section('content')
<form  class="form-horizontal" method="POST" action={{ url('/store')}} role="form" enctype="multipart/form-data" accept-charset="UTF-8">
{{ csrf_field() }}
<div class="form-group">
  <label class="control-label">Title: </label>
  <input type="text" name="title" class="form-control">
</div>
  <div class="form-group">
    <label class="control-label">Sub Title: </label>
    <input type="text" name="subtitle" class="form-control">
  </div>
  <div class="form-group">
    <label class="control-label">Body: </label>
    <textarea type="textarea" name="body" class="form-control">
    </textarea>
  </div>
  <div class="form-group">
    <label class="control-label">Publish on: </label>
    <div id="published_at">
      <div class="input-medium">
        <div class="input-group clearfix text-lo">
            <input class="input-medium date-picker" name="published_at"  type="text" data-date-format="yyyy-mm-dd" placeholder="ປປປປ-ດດ-ວວ" />
            <span class="input-group-addon">
                <i class="ace-icon fa fa-calendar"></i>
            </span>
        </div>
      </div>
    </div>
  </div>
  <div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary" ><i class="fa fa-upload"></i> Submit</button>
  </div>
</form>
@stop
