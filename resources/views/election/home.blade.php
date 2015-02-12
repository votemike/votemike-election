@extends('election.election')

@section('electioncontent')
	<h1>Election Page!</h1>

	<p>Voting is important, but reading through party manifestos is boring! Save yourself some time and zip though these main policies to see which party you should vote for in the general election.</p>
	<p><a href="{{ url('election/policies') }}">Start choosing policies</a></p>
@endsection
