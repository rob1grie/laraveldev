@extends('layouts.main')

@section('title', 'Create Task')



@foreach($errors->all() as $error)
<p>{{$error}}</p>
@endforeach

@section('content')
<h1>Create Task</h1>
	{!! Form::open(array('action' => 'TaskController@store')) !!}
	<p> {!! Form::text('name'); !!} </p>
	<p> {!! Form::select('category', array('Family' => 'Family', 'Work' => 'Work', 'Other' => 'Other')); !!} </p>
	<p> {!! Form::date('date'); !!} </p>
	<p> {!! Form::submit('Submit'); !!} </p>
	{!! Form::close() !!}
@stop