@extends('themes.Default.master')

@section('head')
@stop
@section('content')
<h2>{{ $statement->title }}<h2>
<h4>{{ $statement->summary }}<h4>
<h5>{{ $statement->content }}<h5>
<a href="{{ URL::action('StatementController@edit', $statement) }}">Edit</a>
@stop

@section('javascript')
@stop