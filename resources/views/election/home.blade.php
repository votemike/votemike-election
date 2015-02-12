@extends('votemike')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Election</div>

				<div class="panel-body">
					<h1>Election Page!</h1>

					<p>Voting is important, but reading through party manifestos is boring! Save yourself some time and zip though these main policies to see which party you should vote for in the general election.</p>
					<p><a href="{{ url('election/policies') }}">Start choosing policies</a></p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
