@extends('tags.master')

@section('content')

<div class="row">
	<div class="col-lg-15">
		<div class="pull-left">
			<h3>Show Tag </h3> <p><a class="btn btn-xs btn-primary" href="{{ route('tags.index') }}">Back</a></p>
		</div>
	</div>
</div>


<div class="row">

	

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Image : </strong></p>
			<img src="../img/{{ $tag->image }}"> 
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Title : </strong></p>
			{{ $tag->title }}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Link : </strong></p>
			{{ $tag->link }}
		</div>
	</div>

</div>






@endsection