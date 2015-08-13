@extends('dbhelper.dbhelper')

@section('dbhelpercontent')
	<h1>Database helper!</h1>

	@foreach($tables as $table)
		@include('dbhelper.table', ['table' => $table])
	@endforeach
@endsection
