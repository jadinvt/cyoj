<div class="form-group">
{!! Form::model($choice, array('action'=>array($action, $choice), 'method'=>'patch' )) !!}
    <div class="form-group">
        {!! Form::label('content', 'Enter choice Title') !!}
        {!! Form::text('title', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('content', 'Enter choice') !!}
        {!! Form::text('content', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('summary', 'Enter Summary (optional)') !!}
        {!! Form::text('summary', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit($actionTag . ' choice', ['class'=>'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
    <a class="btn btn-default" href="{{ URL::action('ChoiceController@index') }}">Cancel</a>
</div>