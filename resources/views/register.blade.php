@extends('templates/t_index')
@section('content')

<div class="container">
	
	<p></p>

	<div class="panel panel-default">

		<div class="panel-heading">
			<span class="glyphicon glyphicon-user"></span>Register
			@if(Session::has('message'))
			<span class="label label-debger">{{  Session::get('message') }}</span>
			@endif
		</div>

		<div class="panel-body">

			{!! Form::open(['url' => '/tambahlogin'])  !!}
			Username : 
			@if($errors->has())
<br/>
<span class="label label-danger">{!! $errors->first('username')!!}</span>
<p></p> 
@endif
			{!! Form::text('username', '', ['placeholder'=>'Username', 'class'=>'form-control'])  !!}
			<p></p>

			Password : 
			@if($errors->has())
<br/>
<span class="label label-danger">{!! $errors->first('password')!!}</span>
<p></p> 
@endif
			{!! Form::password('password',  ['placeholder'=>'Password', 'class'=>'form-control'])  !!}

<p></p>

{!!  Form::submit('Register', ['class'=>'btn btn-danger'])   !!}
{!! Form::close() !!}

		</div>

	</div>

</div>

@stop