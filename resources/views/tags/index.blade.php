@extends('tags.master')


@section('content')

@if(!isset($_FILES))
	dd($_FILES);
@endif

<div class="row">
	<div class="col-lg-12">
		<h3>
			Tags Table
		</h3>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="full-right">
			<a class="btn btn-xs btn-success" href="{{ route('tags.create') }}">Create New Tag</a>
		</div>
	</div>
</div>


@if ($message = Session::get('success'))
	<div class="alert alert-success">
		<p>
			{{ $message }}
		</p>
	</div>

@endif




<table class="table table-bordered">
	<tr>
		<th>No.</th>
		<th>Title</th>
		<th>Image</th>
		<th>Link</th>
		<th width="300px">Actions</th>
	</tr>
<?php $i=0;?>
	@foreach($tags as $tag)
		<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $tag->title }}</td>
			<td>{{ $tag->image }}</td>
			<td>{{ $tag->link }}</td>
			<td>
				<a class="btn btn-xs btn-info" href="{{ route('tags.show', $tag->id) }}">Show</a>
				<a class="btn btn-xs btn-primary" href="{{ route('tags.edit', $tag->id) }}">Edit</a>

				{!! Form::open(['method'=> 'DELETE', 'route' => ['tags.destroy', $tag->id], 'style' => 'display:inline']) !!}
				{!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) !!}
				{!! Form::close() !!}


			</td>
		</tr>
	@endforeach
</table>


@endsection