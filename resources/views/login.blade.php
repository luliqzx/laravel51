@extends('templates/t_index')
@section('content')

<div class="container">
	
	<p></p>

	<div class="panel panel-default">

		<div class="panel-heading">
			<span class="glyphicon glyphicon-user"></span>Login
			@if(Session::has('message'))
			<span class="label label-debger">{{  Session::get('message') }}</span>
			@endif
		</div>

		<div class="panel-body">

			{!! Form::open(['url' => '/login'])  !!}
			Username : 
			
			{!! Form::text('username', '', ['placeholder'=>'Username', 'class'=>'form-control'])  !!}
			<p></p>

			Password : 
			
			{!! Form::password('password',  ['placeholder'=>'Password', 'class'=>'form-control'])  !!}

<p></p>

{!!  Form::submit('Login', ['class'=>'btn btn-danger'])   !!}

<p></p>

<a href="{{ URL('register') }}">Daftar</a>  

{!! Form::close() !!}



		</div>

	</div>

</div>

@stop