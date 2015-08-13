@extends('votemike')

@section('header')
	<header class="jumbotron">
		<h1>DB Helper</h1>
		<span>Some helpers to help tidy your DB</span>
	</header>
@endsection

@section('content')
	<div class="panel panel-default">
		<div class="panel-body">
			@yield('dbhelpercontent')
		</div>
	</div>
@endsection
