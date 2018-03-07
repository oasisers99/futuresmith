@extends('layouts.app')

@section('title', 'Home | ' . config('app.name'))

@section('page-resources')
	<!-- Slick CSS -->
	<link rel="stylesheet" media="all" href="{{ asset('/plugins/slick/slick.css') }}" type="text/css"/>
	<!-- Slick Theme CSS -->
	<link rel="stylesheet" media="all" href="{{ asset('/plugins/slick/slick-theme.css') }}" type="text/css"/>
@endsection
@section('body-content')
	<div class="container-fluid text-center">
		<div class="row" id="main-content-row">
        	<div class="col">
				<!-- Header -->
				<div class="row header-row">
					<div class="col-12 col-md-6 text-center text-md-right pb-3 pb-md-0">
						<h1 class="font-weight-bold">Volunteer the way
							<br/>
							YOU want to</h1>
							<p>FutureSmiths allows you to apply your skills and years of experience in a way that matters</p>
							<a class="btn btn-primary theme-blue btn-outline-primary hover-white">Participate</a>
						</div>
						<div class="col-12 col-md-6 align-self-center text-center">
							<iframe width="400" height="200" src="//www.youtube-nocookie.com/embed/FVpdUthXY2I" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
						</div>
				</div>
				<!-- /. Header -->
				<!-- Sub Header -->
				<div class="row bg-theme-gray p-3 m-0">
					<div class="col-12">
						<h2 class="font-weight-bold pb-3">How it works</h2>
						<div class="row">
							<div class="col-12 col-md-3">
								<h2>1.</h2>
								<p class="small">Join Future Smiths & meet like-minded people.</p>
							</div>
							<div class="col-12 col-md-3">
								<h2>2.</h2>
								<p class="small">Join Tribes where people have similar skills as you.</p>
							</div>
							<div class="col-12 col-md-3">
								<h2>3.</h2>
								<p class="small">Explore ongoing projects &amp; participate in the ones that you are interested in.</p>
							</div>
							<div class="col-12 col-md-3">
								<h2>4.</h2>
								<p class="small">Contribute your skills and time. Make a difference one project at a time.</p>
							</div>
						</div>
					</div>
				</div>
				<!-- /. Sub Header-->
			</div>
		</div>
		<!-- Project Section -->
		<div id='hideuntilloaded' style="display: none;">
			@include('pages.front.projects')
			<!-- /. Project Section -->
			<!-- Tribe Section -->
			@include('pages.front.tribe')
			<!-- /. Tribe Section -->
		</div>
		<!-- Footer -->
		@include('pages.sections.footer')
		<!-- /. Footer -->
	</div>
@endsection
@section('page-scripts')
	@parent
<!-- Custom Scripts -->
<!-- Slick JS -->
<script type="text/javascript" src="{{ asset('/plugins/slick/slick.min.js') }}"></script>
<!-- Page Script -->
<script type="text/javascript" src="{{ asset('/js/frontpage.js') }}"></script>
<script>
	$("#hideuntilloaded").css('display','block');
</script>
@endsection
