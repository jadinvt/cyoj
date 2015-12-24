@extends('themes.Default.master')

@section('head')
@stop

@section('content')
@include('choice.form', array('action'=>'ChoiceController@update', 'actionMethod'=>'patch', 'actionTag'=>'Edit', 'choice'=>$choice))
@stop

@section('javascript')
@stop