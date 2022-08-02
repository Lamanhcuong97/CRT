@extends('layouts.main')
@section('page_title', 'Article Page')
@section('content')
<div class="text-right">
  <a href={{ url('articles/create') }} type="button" class="btn btn-primary">New Article</a>
</div>
<div style="padding: 10px 0 10px 0;"></div>
  @foreach($articles as $article)
    <div class="panel panel-default">
      <div class="panel-heading">
        <a href="{{ url('articles/' . $article->id) }}"> {{ $article->title }}</a>
      </div>
      <div class="panel-body">{{ $article->body }}</div>
      <div class="panel-footer">{{ $article->published_at->diffForHumans() }}</div>
    </div>
  @endforeach
@stop
