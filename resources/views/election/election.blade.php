@extends('votemike')

@section('header')
	<header class="jumbotron">
		<h1>Election</h1>
		<span>2015 UK General Election Decider</span>
	</header>
@endsection

@section('content')
	<div class="panel panel-default">
		<div class="panel-body">
			@yield('electioncontent')
		</div>
	</div>
@endsection
