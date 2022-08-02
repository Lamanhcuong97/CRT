
{{--
@if(isset($data))
  @foreach($data as $d)
    {{ $d->foo }}
  @endforeach
@endif
--}}
@if(isset($data))
  {{ $data }}
@endif
