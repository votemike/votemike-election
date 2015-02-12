@extends('votemike')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Election</div>

				<div class="panel-body">
					<h1>Results Page!</h1>

					@foreach($partyResults as $result)
						<p>{{ $result->party->name }} - You were shown <strong>{{ $result->shown }}</strong> {{ $result->party->name }} {{ $result->shown == 1 ? 'policy' : 'policies' }} and selected <strong>{{ $result->for }}</strong> of them.</p>
					@endforeach

					<a href="{{ url('election') }}">Try again</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
