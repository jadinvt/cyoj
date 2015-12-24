@extends('themes.Default.master')

@section('head')
@stop
@section('content')
<h2>{{ $choice->title }}<h2>
<h4>{{ $choice->summary }}<h4>
<h5>{{ $choice->content }}<h5>
<a href="{{ URL::action('ChoiceController@edit', $choice) }}">Edit</a>
@stop

@section('javascript')
@stop