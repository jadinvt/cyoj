@extends('themes.Default.master')

@section('head')
@stop

@section('content')
@include('statement.form', array('action'=>'StatementController@store', 'actionTag'=>'Create'))
@stop

@section('javascript')
@stop