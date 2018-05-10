@extends('web.layout')

@section('styles')
	<style type="text/css">
		.subheader{
			margin-bottom: 0;
		}
	</style>
@endsection

@section('content')
	<section class="subheader google-maps">
  		<div id="map-canvas"></div>
	</section>
	
	<!--Mensaje Bienvenida-->
	<section class="module cta newsletter">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 text-center">
					<h2 class="white"><strong>PODRÁS TENER </strong>A LA MANO </h2>
					<h3>EL MÁS COMPLETO SISTEMA PUBLICITARIO INTEGRAL INMOBILIARIO</h3>
				</div>	    
			</div>
		</div>
	</section>
	
@endsection

@section('scripts')
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&amp;sensor=false"></script>
	<script src="{{ asset('js/map.js') }}"></script> 
@endsection