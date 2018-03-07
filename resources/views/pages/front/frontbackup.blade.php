@extends('layouts.app')

@section('title', 'Home | Future Smiths')

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
					<iframe width="400" height="200" src="https://www.youtube-nocookie.com/embed/FVpdUthXY2I?rel=0&amp;showinfo=0" frameborder="0" allow="encrypted-media" allowfullscreen></iframe>
					<!--<img class="img-fluid" src="//via.placeholder.com/400x200" width="auto" height="auto" />-->
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
</div>
		{{-- Tribe Projects section --}}
		@include('pages.front.projects')
		@include('pages.front.tribe')


		{{-- <div class="fh5co-pricing-style-2" id="pricing-section">
			<div class="container">
				<div class="row">
					<div class="row p-b">
						<div class="col-md-6 col-md-offset-3 text-center">
							<h2 class="fh5co-heading wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">Pricing Plans</h2>
							<p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="pricing">
		            <div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
		                 <h3 class="pricing-title">Basic</h3>
		                 <p class="pricing-sentence">Little description here</p>
		                 <div class="pricing-price"><span class="pricing-currency">$</span>19<span class="pricing-period">/ month</span></div>
		                 <ul class="pricing-feature-list">
		                     <li class="pricing-feature">10 presentations/month</li>
		                     <li class="pricing-feature">Support at $25/hour</li>
		                     <li class="pricing-feature">1 campaign/month</li>
		                 </ul>
		                 <button class="btn btn-success btn-outline">Choose plan</button>
		             </div>
		             <div class="pricing-item pricing-item--featured wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
		                 <h3 class="pricing-title">Standard</h3>
		                 <p class="pricing-sentence">Little description here</p>
		                 <div class="pricing-price"><span class="pricing-currency">$</span>29<span class="pricing-period">/ month</span></div>
		                 <ul class="pricing-feature-list">
		                     <li class="pricing-feature">50 presentations/month</li>
		                     <li class="pricing-feature">5 hours of free support</li>
		                     <li class="pricing-feature">10 campaigns/month</li>
		                 </ul>
		                 <button class="btn btn-success btn-lg">Choose plan</button>
		             </div>
		             <div class="pricing-item wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.7s">
		                 <h3 class="pricing-title">Enterprise</h3>
		                 <p class="pricing-sentence">Little description here</p>
		                 <div class="pricing-price"><span class="pricing-currency">$</span>79<span class="pricing-period">/ month</span></div>
		                 <ul class="pricing-feature-list">
		                     <li class="pricing-feature">Unlimited presentations</li>
		                     <li class="pricing-feature">Unlimited support</li>
		                     <li class="pricing-feature">Unlimited campaigns</li>
		                 </ul>
		                 <button class="btn btn-success btn-outline">Choose plan</button>
		             </div>
		         </div>
		      </div>
			</div>
		</div> --}}

	{{--	<div class="fh5co-footer-style-3">
			<div class="container">
				<div class="row p-b">
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
						<div class="fh5co-logo"><span class="logo">FS</span> Future Smith</div>
						<p class="fh5co-copyright">&copy; 2017 Future Smith <br>All Rights Reserved. <br>Created by <a target="_blank" href=""> Awesome People</a> <br>
						</p>
					</div>
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay=".8s">
						<h3>Company</h3>
						<ul class="fh5co-links">
							<li><a href="#" data-toggle="modal" data-target="#tutorialModal">How Future Smith Works</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="{{ route('front.contact') }}">Contact Us</a></li>
						</ul>
					</div>
					<div class="clearfix visible-sm-block"></div>
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.1s">
						<h3>Connect</h3>
						<ul class="fh5co-links fh5co-social">
							<li><a href="#"><i class="icon icon-facebook2"></i> Facebook</a></li>
							{{-- <li><a href="#"><i class="icon icon-twitter"></i> Twitter</a></li> --}}
							<li><a href="https://www.linkedin.com/company/18041353/" target="_blank"><i class="icon icon-linkedin"></i> LinkedIn</a></li>
							{{-- <li><a href="#"><i class="icon icon-instagram"></i> Instagram</a></li> --}}
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 fh5co-footer-widget wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.4s">
						<h3>About</h3>
						<p>For people</p>
						<!-- <p><a href="#" class="btn btn-success btn-sm btn-outline">I'm a button</a></p> -->
					</div>
					<div class="clearfix visible-sm-block"></div>
				</div>
		{{-- 		<div class="row fh5co-made">
					<div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
						<p>Made with <i class="heart icon-heart"></i> in Philippines</p>
					</div>
				</div> --}}
			</div>
		</div>
		<!-- END footer -->
		  <!-- Modal --> --}}

	{{-- </div> --}}
	<!-- END page-->
@endsection
@section('page-scripts')
	@parent
<!-- Custom Scripts -->
<!-- Slick JS -->
<script type="text/javascript" src="{{ asset('/plugins/slick/slick.min.js') }}"></script>

<!-- Page Script -->
<script type="text/javascript" src="{{ asset('/js/frontpage.js') }}"></script>
@endsection
