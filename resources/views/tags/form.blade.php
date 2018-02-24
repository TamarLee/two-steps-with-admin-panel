

<div class="row">

	<div class="col-xs-12">
		<div class="form-group">
			<strong>Title : </strong>
			{!! Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<strong>Link : </strong>
			{!! Form::text('link', null, ['placeholder' => 'Link', 'class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<strong>Image : </strong>
			{!! Form::file('image', null) !!}
		</div>
	</div>


	<div class="col-xs-12">
		<a class="btn btn-xs btn-success" href="{{ route('tags.index') }}">Back</a>
		<button type="submit" name="button" class="btn btn-xs btn-primary">Submit</button>
	</div>
</div>

