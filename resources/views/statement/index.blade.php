@extends('themes.Default.master')

@section('head')
@stop
@section('content')
@foreach ($statements as $statement)
<div class='statement'>
<a href="{{ URL::action('StatementController@show', $statement) }}"><h2>{{ $statement->title }}</h2></a>
<h4>{{ $statement->summary }}</h4>
<h5>{{ $statement->content }}</h5>
</div>
@endforeach
@stop

@section('javascript')
@stop