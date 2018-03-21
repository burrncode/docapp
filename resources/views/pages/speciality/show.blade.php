@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<h1>{{$speciality->name}}</h1>
		<div class="details">
			<h6>Updated at: {{$speciality->updated_at}}</h6>
		</div>
	</div>
</div>
@endsection