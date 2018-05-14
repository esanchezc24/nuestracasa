@extends('web.layout')

@section('styles')
@endsection

@section('content')
	<section class="module no-padding bcp">
		<!--Cabecera-->
		<div class="head">
			<div class="bcp-bg-color">
				<img src="{{asset('images/bancos/logos/banner/bcp.png')}}">
			</div>
			<div class="bcp-img">
				<img src="{{ asset('images/bancos/portadas/bcp.jpg')}}">
			</div>

			@include('web.blocks.bancos.bcp.botones') <!--En caso sea BCP-->
		</div>
	</section>
	
	@include('web.blocks.bancos.bcp.banner_1')

	@include('web.blocks.bancos.proyectos')

	@include('web.blocks.bancos.bcp.banner_2')

	@include('web.blocks.bancos.formulario')

	@include('web.blocks.bancos.bcp.banner_3')

	@include('web.blocks.bancos.calculadora')
	

	
@endsection

@section('scripts')
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&amp;sensor=false"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*Accion botones*/
			$(".botonCalculadora").on("click", function(){
	            $('html, body').animate({ scrollTop: $("#Calculadora").offset().top}, 2000);
	    	});
		    $(".botonProyectos").on("click", function(){
	            $('html, body').animate({ scrollTop: $("#Proyectos").offset().top}, 1500);
	    	});
		    $(".botonCredito").on("click", function(){
	            $('html, body').animate({ scrollTop: $("#Credito").offset().top}, 1500);
	    	});

	    	/*carousel*/
	    	$('.carousel-proyectos').owlCarousel({
			    loop:true,
			    margin:10,
			    autoplay:true,
			    autoplayTimeout:3000,
			    dots: false,
			    responsive:{
			        0:{
			            items:1
			        },
			        480:{
			            items:1
			        },
			        600:{
			            items:1
			        },
			        1000:{
			            items:1
			        }
			    }
			});


	    	/*Mapa google*/
	    	//intialize the map
			function initialize() {
			  var mapOptions = {
			    zoom: 13,
			    scrollwheel: false,
			    center: new google.maps.LatLng(39.29000, -76.5000)
			  };

			var map = new google.maps.Map(document.getElementById('map-banco'),
			      mapOptions);


			// MARKERS
			/****************************************************************/

			//add a marker1
			var marker = new google.maps.Marker({
			    position: map.getCenter(),
			    map: map,
			    icon: 'images/pin.png'
			});

			//add a marker2
			var marker2 = new google.maps.Marker({
			    position: new google.maps.LatLng(39.2833, -76.5267),
			    map: map,
			    icon: 'images/pin.png'
			});

			//add a marker3
			var marker3 = new google.maps.Marker({
			    position: new google.maps.LatLng(39.2833, -76.5567),
			    map: map,
			    icon: 'images/pin.png'
			});

			//add a marker4
			var marker4 = new google.maps.Marker({
			    position: new google.maps.LatLng(39.3133, -76.5597),
			    map: map,
			    icon: 'images/pin.png'
			});

			//add a marker5
			var marker5 = new google.maps.Marker({
			    position: new google.maps.LatLng(39.2933, -76.5650),
			    map: map,
			    icon: 'images/pin.png'
			});

			//add a marker6
			var marker6 = new google.maps.Marker({
			    position: new google.maps.LatLng(39.2723, -76.5400),
			    map: map,
			    icon: 'images/pin.png'
			});



			// INFO BOXES
			/****************************************************************/

			//show info box for marker1
			var contentString = '<div class="info-box"><img src="images/property-img1.jpg" class="info-box-img" alt="" /><h4>587 Smith Avenue</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ultrices metus' + 
			                    ' sit amet [...]</p><a href="property_single.html" class="button small">View Details</a><br/></div>';

			var infowindow = new google.maps.InfoWindow({ content: contentString });

			google.maps.event.addListener(marker, 'click', function() {
			    infowindow.open(map,marker);
			  });


			//show info box for marker2
			google.maps.event.addListener(marker2, 'click', function() {
			    infowindow.open(map,marker2);
			  });

			//show info box for marker3
			google.maps.event.addListener(marker3, 'click', function() {
			    infowindow.open(map,marker3);
			  });

			//show info box for marker4
			google.maps.event.addListener(marker4, 'click', function() {
			    infowindow.open(map,marker4);
			  });

			//show info box for marker5
			google.maps.event.addListener(marker5, 'click', function() {
			    infowindow.open(map,marker5);
			  });

			//show info box for marker6
			google.maps.event.addListener(marker6, 'click', function() {
			    infowindow.open(map,marker6);
			  });

			}

			google.maps.event.addDomListener(window, 'load', initialize);
					});
	</script>
@endsection