@extends('election.election')

@section('electioncontent')
	<h1>Results Page!</h1>

	@foreach($partyResults as $result)
		<p>{{ $result->party->name }} - You were shown <strong>{{ $result->shown }}</strong> {{ $result->party->name }} {{ $result->shown == 1 ? 'policy' : 'policies' }} and selected <strong>{{ $result->for }}</strong> of them.</p>
	@endforeach

	<p><a href="https://twitter.com/share" class="twitter-share-button" data-url="{{ url('election') }}" data-text="This page reckons I should vote for {{ $partyResults[0]->party->name }}. What about you?" data-size="large" data-count="none" data-hashtags="ge2015,ukelection2015,ukge2015">Tweet your result</a></p>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<a href="{{ url('election') }}">Try again</a>
@endsection
