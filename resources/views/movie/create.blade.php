@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		  	{!!Form::open(['route'=>'movie.store', 'method'=>'POST','files' => true])!!}
		  		@include('movie.forms.movie')
				{!!Form::submit('Register',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
	@endsection