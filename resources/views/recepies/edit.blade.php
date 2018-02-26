@extends('recepies.master')

@section('content')


<div class="row">
	<div class="col-lg-12">
		<div class="pull-left">
			<h3>Edit Recepie</h3>
		</div>
	</div>
</div>

@if(count($errors) > 0)
	<div class="alert alert-danger">
		<strong>უუუპს!!! </strong>აქ რაღაც შეცდომაა...<br>
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif


{!! Form::model($recepie, ['method' => 'PATCH', 'route' => ['recepies.update', $recepie->id], 'enctype' => 'multipart/form-data', 'files' => 'true']) !!}
@include('recepies.form')
{!! Form::close() !!}


@endsection