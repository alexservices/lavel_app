@extends('layouts.admin')
	@include('alerts.success')
	@section('content')
		<table class="table">
			<thead>
				<th>Name</th>
				<th>Genre</th>
				<th>Direction</th>
				<th>Cover</th>
				<th>Operations</th>
			</thead>
			@foreach($movies as $movie)
				<tbody>
					<td>{{$movie->name}}</td>
					<td>{{$movie->genre}}</td>
					<td>{{$movie->direction}}</td>
					<td>
						<img src="movies/{{$movie->path}}" alt="" style="width:150px;"/>
					</td>
					<td>
					{!!link_to_route('movie.edit', $title = 'Edit', $parameters = $movie->id, $attributes = ['class'=>'btn btn-primary'])!!}
					</td>
					{{ csrf_field() }}
				</tbody>
			@endforeach
		</table>
		{{ $movies->links() }}
	@endsection