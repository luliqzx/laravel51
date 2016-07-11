@extends('templates/t_index')
@section('content')

<div class="container">
	 
	<p></p>

	<div class="panel panel-default">
		<div class="panel-heading">
<div class="text-left, clearfix">		Tambah Data </div>
	
			<div class="text-right" ><a href="{{ URL('logout') }}">Logout</a></div>
		</div>

		<div class="panel-body">

			{!!	Form::open(['url'=>'/prosestambah']) !!}

			Nama : 
			{!! Form::text('nama', '', ['placeholder' => 'Nama', 'class' => 'form-control']) !!}

			Alamat : 
			{!! Form::text('alamat', '', ['placeholder' => 'Alamat', 'class' => 'form-control']) !!}

			Kelas : 
			{!! Form::text('kelas', '', ['placeholder' => 'Kelas', 'class' => 'form-control']) !!}

			<p></p>
			{!! Form::submit('Tambah Data', [ 'class' => 'btn btn-danger']) !!}



			{!! Form::close() !!}


		</div>

	</div>

</div>
@stop