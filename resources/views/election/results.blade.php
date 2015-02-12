@extends('election.election')

@section('electioncontent')
	<h1>Results Page!</h1>

	@foreach($partyResults as $result)
		<p>{{ $result->party->name }} - You were shown <strong>{{ $result->shown }}</strong> {{ $result->party->name }} {{ $result->shown == 1 ? 'policy' : 'policies' }} and selected <strong>{{ $result->for }}</strong> of them.</p>
	@endforeach

	<a href="{{ url('election') }}">Try again</a>
@endsection
