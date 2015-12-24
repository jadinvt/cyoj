@extends('themes.Default.master')

@section('head')
@stop

@section('content')
@include('choice.form', array('action'=>'ChoiceController@store', 'actionTag'=>'Create'))
@stop

@section('javascript')
@stop