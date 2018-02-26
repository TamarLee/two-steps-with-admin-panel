@extends('recepies.master')


@section('content')


<div class="row">
	<div class="col-lg-12">
		<h3>
			Recepies Table
		</h3>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="full-right">
			<a class="btn btn-xs btn-success" href="{{ route('recepies.create') }}">Create New Recepie</a>
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
		<th>Ingredients</th>
		<th>Description</th>
		<th>Image</th>
		<th>Link</th>
		<th>Tag</th>
		<th>Author</th>
		<th width="300px">Actions</th>
	</tr>
<?php $i=0;?>
	@foreach($recepies as $recepie)
		<tr>
			<td>{{ ++$i }}</td>
			<td>{{ $recepie->title }}</td>
			<td>{{ $recepie->ingredients }}</td>
			<td>{{ $recepie->description }}</td>
			<td>{{ $recepie->image }}</td>
			<td>{{ $recepie->link }}</td>
			<td>{{ $recepie->tag }}</td>
			<td>{{ $recepie->author }}</td>
			<td>
				<a class="btn btn-xs btn-info" href="{{ route('recepies.show', $recepie->id) }}">Show</a>
				<a class="btn btn-xs btn-primary" href="{{ route('recepies.edit', $recepie->id) }}">Edit</a>

				{!! Form::open(['method'=> 'DELETE', 'route' => ['recepies.destroy', $recepie->id], 'style' => 'display:inline']) !!}
				{!! Form::submit('Delete', ['class' => 'btn btn-xs btn-danger']) !!}
				{!! Form::close() !!}


			</td>
		</tr>
	@endforeach
</table>
{!! $recepies->links() !!}

@endsection