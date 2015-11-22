@extends('themes.Default.master')

@section('head')
@stop

@section('content')
@foreach ($statements as $statement)
<h2>{{ $statement->title }}<h2>
<h4>{{ $statement->summary }}<h4>
<h5>{{ $statement->content }}<h5>
@endforeach
@stop

@section('javascript')
@stop
@stop