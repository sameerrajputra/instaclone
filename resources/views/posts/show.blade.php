@extends('Layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-7">
			<img src="/storage/{{ $post->image }}" class="w-50 float-right">
		</div>
		<div class="col-5">
			<h3>{{ $post->user->username }}</h3>

			<p>{{ $post->caption }}</p>
		</div>
	</div>
</div>
@endsection