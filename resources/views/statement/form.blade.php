<div class="form-group">
{!! Form::model($statement, array('action'=>array($action, $statement), 'method'=>'patch' )) !!}
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
        {!! Form::submit($actionTag . ' Statement', ['class'=>'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
    <a class="btn btn-default" href="{{ URL::action('StatementController@index') }}">Cancel</a>
</div>