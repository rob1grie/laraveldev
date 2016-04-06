@extends('layouts.main')

@section('title', 'My Tasks')

@section('content')
<h1>{{$heading}}</h1>
<ul>
	@foreach($tasks as $key => $task)
	<li><a href='/task/{{$key}}'>{{$task}}</a></li>
	@endforeach
</ul>
@stop