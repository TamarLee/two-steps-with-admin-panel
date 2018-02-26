

<div class="row">

	<div class="col-xs-12">
		<div class="form-group">
			<strong>Title : </strong>
			{!! Form::text('title', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<strong>Ingredients : </strong>
			{!! Form::text('ingredient', null, ['placeholder' => 'Ingredients', 'class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<strong>Description : </strong>
			{!! Form::text('description', null, ['placeholder' => 'Description', 'class' => 'form-control']) !!}
		</div>
	</div>


	<div class="col-xs-12">
		<div class="form-group">
			<strong>Image : </strong>
			{!! Form::file('image', null) !!}
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
			<strong>Tag : </strong>
			{!! Form::text('tag', null, ['placeholder' => 'Tag', 'class' => 'form-control']) !!}
		</div>
	</div>

	<div class="col-xs-12">
		<div class="form-group">
			<strong>Author : </strong>
			{!! Form::text('author', null, ['placeholder' => 'Author', 'class' => 'form-control']) !!}
		</div>
	</div>


	<div class="col-xs-12">
		<a class="btn btn-xs btn-success" href="{{ route('recepies.index') }}">Back</a>
		<button type="submit" name="button" class="btn btn-xs btn-primary">Submit</button>
	</div>
</div>

