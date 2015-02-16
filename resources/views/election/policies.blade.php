@extends('election.election')

@section('electioncontent')
	<h1>Policy Page!</h1>
	<h2>{{ $issue->title }}</h2>
	<p>Choose the policy the most fits with your views.</p>

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form class="form-horizontal clearfix" role="form" method="POST" action="/election/policy">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		@foreach($policies as $policy)
			<div class="radio">
				<label for="{{ 'policy_'. $policy->id }}">
					<input type="radio" id="{{ 'policy_'. $policy->id }}" name="policy" value="{{ $policy->id }}">
					{{ $policy->description }}
				</label>
			</div>
		@endforeach

		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-primary" name="button" value="next">
				Next policy
			</button>
			<button type="submit" class="btn btn-primary" name="button" value="bored">
				Bored now, show me the results
			</button>
		</div>
	</form>
	<div class="clearfix">
		<h6>Sources</h6>
		<ul>
			<li><a href="http://www.bbc.co.uk/news/uk-politics-29642613">BBC News</a></li>
		</ul>
	</div>
@endsection
