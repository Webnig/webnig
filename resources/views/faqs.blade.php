@extends('layouts.app')

@section('title')
FAQs
@endsection

@section('body')

<div class="container-fluid top_margin">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="text-center">
				<h3>Frequently Asked Questions</h3>
				<form action="" role="form" class="form-inline">
					<div class="form-group">
						<input type="search" name="matID" placeholder="Enter MatID" class="form-control">
					</div>
					<div class="form-group">
						<button id="mediumButton" class="btn btn-info">Search</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<hr class="small">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-12">
				<h3 class="fine">Registration</h3>
				<p><a href="#" class="text-primary">How to register?</a></p>
				<p><a href="#" class="text-primary">What is profile validation?</a></p>
				<p><a href="#" class="text-primary">On what criteria is a profile validated?</a></p>
				<p><a href="#" class="text-primary">Single registration - multiple domains</a></p>

				<br>

				<h3 class="fine">Extras</h3>
				<p><a href="#" class="text-primary">How to register?</a></p>
				<p><a href="#" class="text-primary">What is profile validation?</a></p>
				<p><a href="#" class="text-primary">On what criteria is a profile validated?</a></p>
				<p><a href="#" class="text-primary">Single registration - multiple domains</a></p>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
				<h3 class="fine">Creating My Profile</h3>
				<p><a href="#" class="text-primary">How to register?</a></p>
				<p><a href="#" class="text-primary">What is profile validation?</a></p>
				<p><a href="#" class="text-primary">On what criteria is a profile validated?</a></p>
				<p><a href="#" class="text-primary">Single registration - multiple domains</a></p>

				<br>

				<h3 class="fine">Memberships</h3>
				<p><a href="#" class="text-primary">How to register?</a></p>
				<p><a href="#" class="text-primary">What is profile validation?</a></p>
				<p><a href="#" class="text-primary">On what criteria is a profile validated?</a></p>
				<p><a href="#" class="text-primary">Single registration - multiple domains</a></p>

				<br>

				<h3 class="fine">Miscellaneous</h3>
				<p><a href="#" class="text-primary">How to register?</a></p>
				<p><a href="#" class="text-primary">What is profile validation?</a></p>
				<p><a href="#" class="text-primary">On what criteria is a profile validated?</a></p>
				<p><a href="#" class="text-primary">Single registration - multiple domains</a></p>
			</div>
			<div class="col-md-4">
				<h3 class="fine">Ways to contact</h3>
				<p><a href="#" class="text-primary">How to register?</a></p>
				<p><a href="#" class="text-primary">What is profile validation?</a></p>
				<p><a href="#" class="text-primary">On what criteria is a profile validated?</a></p>
				<p><a href="#" class="text-primary">Single registration - multiple domains</a></p>

				<br>

				<h3 class="fine">Search Profile</h3>
				<p><a href="#" class="text-primary">How to register?</a></p>
				<p><a href="#" class="text-primary">What is profile validation?</a></p>
				<p><a href="#" class="text-primary">On what criteria is a profile validated?</a></p>
				<p><a href="#" class="text-primary">Single registration - multiple domains</a></p>
			</div>
		</div>
	</div>
</div>

@endsection