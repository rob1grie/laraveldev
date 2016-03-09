{!! Form::open(array('action' => 'TaskController@store')) !!}
<p> {!! Form::text('name'); !!} </p>
<p> {!! Form::select('category', array('Family' => 'Family', 'Work' => 'Work', 'Other' => 'Other')); !!} </p>
<p> {!! Form::date('name'); !!} </p>
<p> {!! Form::submit('Submit'); !!} </p>
{!! Form::close() !!}