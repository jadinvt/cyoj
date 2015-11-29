@extends('themes.Default.master')

@section('head')
@stop

@section('content')
@include('statement.form', array('action'=>'StatementController@update', 'actionMethod'=>'patch', 'actionTag'=>'Edit', 'statement'=>$statement))
@stop

@section('javascript')
@stop