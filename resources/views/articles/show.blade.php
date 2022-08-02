@extends('layouts.main')
@section('page_title', 'Show Article')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
     {{ $article->title }}
  </div>
  <div class="panel-body">{{ $article->body }}</div>
</div>

@stop
