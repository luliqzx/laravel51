@extends('templates/t_index')
@section('content')

@if(Session::has('message'))

<span class="label label-success">{{ Session::get('message') }}</span>

@endif

@stop