@extends('layouts.app')

@section('content')
 <!--
  Start Preloader
  ==================================== -->
  <div id="preloader">
    <div class='preloader'>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div> 
  <!--
End Fixed Navigation
==================================== -->

<section class="single-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>About Us</h2>
				<ol class="breadcrumb header-bradcrumb">
				  <li><a href="index.html">Home</a></li>
				  <li class="active">About Us</li>
				</ol>
			</div>
		</div>
	</div>
</section>

	<section class="buy-pro" style="padding: 100px 0;">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="pro-block text-center" style="padding: 20px 50px; background: white; box-shadow: 0px 2px 28px 0px #7777775e; border-radius: 5px;">
					<h2 style="font-size: 25px; line-height: 1;">You have downloaded free version of Bingo.</h2>
					<h4 style="padding: 10px 0 15px 0;">To get full access of this page please purchase the premium version</h4>
					<h4>Why Premium?</h4>
					<ul style="margin-bottom: 20px;">
						<li>Full Template Pack</li>
						<li>Priority Support</li>
						<li>Documentation Included</li>
						<li>Monthly Update</li>
						<li>Lifetime Download</li>
						<li>Personal and commercial Use</li>
						<li>One time payment</li>
					</ul>
					<a href="https://themefisher.com/products/bingo-bootstrap-business-template/" target="_blank" class="btn btn-main" style="margin-bottom: 20px;">Buy Premium Version</a>			
				</div>
			</div>
		</div>
	</div>
</section>
@endsection