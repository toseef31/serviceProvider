@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 100px;">
  <div class="container">
		<div id="map">

  </div><br>
  <div class="text-center">
		<button type="button" id="area_btn_skill" class="btn btn-success" name="button">Increase Area</button>
	</div>
<div class="text-center">
  <h1>Search Results</h1>
</div>
	<div class="container" id="container">

	    <div class="row" id="show_all">

	    </div>

</div>
<input type="hidden" name="skill_send" value="<?php echo $_GET['skill'] ?>">

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places"
		async="" defer=""></script>


@endsection
