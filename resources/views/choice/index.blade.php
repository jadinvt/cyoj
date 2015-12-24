@extends('themes.Default.master')

@section('head')
@stop
@section('content')
@foreach ($choices as $choice)
<div class='choice'>
<a href="{{ URL::action('ChoiceController@show', $choice) }}"><h2>{{ $choice->title }}</h2></a>
<h4>{{ $choice->summary }}</h4>
<h5>{{ $choice->content }}</h5>
</div>
@endforeach
@stop

@section('javascript')
@stop