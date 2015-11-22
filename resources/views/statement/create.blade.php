@extends('themes.Default.master')

@section('head')
@stop

@section('content')
<div class="form-group">
{!! Form::model($statement, array('action' => 'StatementController@store')) !!}
    <div class="form-group">
        {!! Form::label('content', 'Enter Statement Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'Enter Statement') !!}
        {!! Form::text('content', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('summary', 'Enter Summary (optional)') !!}
        {!! Form::text('summary', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Create Statement', ['class'=>'btn btn-primary form-control']) !!}
    </div>
{!! Form::close() !!}
</div>
@stop

@section('javascript')
@stop
@stop