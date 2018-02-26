@extends('recepies.master')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="pull-left">
			<h3>Add New Recepie</h3>
		</div>
	</div>
</div>
 
@if(count($errors) > 0)
	<div class="alert alert-danger">
		<strong>უუუუპს!!! </strong>აქ რაღაც პრობლემაა...<br>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif


{!! Form::open(['route' => 'recepies.store', 'method' => 'POST', 'files' => 'true', 'enctype' => 'multipart/form-data']) !!}
@include('recepies.form')
{!! Form::close() !!}


@endsection