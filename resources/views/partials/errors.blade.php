<div class="alert alert-danger text-center">
	@foreach($errors->all() as $error)
	    {{ $error }}
	@endforeach
</div>