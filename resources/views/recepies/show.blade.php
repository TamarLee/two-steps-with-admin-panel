@extends('recepies.master')

@section('content')

<div class="row">
	<div class="col-lg-15">
		<div class="pull-left">
			<h3>Show Recepie </h3> <p><a class="btn btn-xs btn-primary" href="{{ route('recepies.index') }}">Back</a></p>
		</div>
	</div>
</div>


<div class="row">

	

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Image : </strong></p>
			<img src="../img/{{ $recepie->image }}"> 
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Title : </strong></p>
			{{ $recepie->title }}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Ingredients : </strong></p>
			{!! $recepie->ingredients !!}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Description : </strong></p>
			{{ $recepie->description }}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Link : </strong></p>
			{{ $recepie->link }}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Tag : </strong></p>
			{{ $recepie->tag }}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<p><strong>Author : </strong></p>
			{{ $recepie->author }}
		</div>
	</div>

</div>






@endsection