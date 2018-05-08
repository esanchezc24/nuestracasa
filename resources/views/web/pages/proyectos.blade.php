@extends('web.layout')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/projects.css')}}">
@endsection

@section('content')
	<section class="subheader">
	  <div class="container">
	    <h1>Listado de Proyectos</h1>
	    <div class="breadcrumb right"><a href="{{ route('index') }} ">Inicio</a> <i class="fa fa-angle-right"></i> {{ Request::is('proyectos') ? 'Proyectos' : (Request::is('alquiler') ? 'Alquiler' : (Request::is('venta') ? 'Venta' : '')) }}</div>
	    <div class="clear"></div>
	  </div>
	</section>

	@include('web.buscador')

	<section class="module white-background">
	  <div class="container">
	    
	        <div class="col-lg-6 col-md-6">
	          <div class="property shadow-hover">
	            <a href="{{ route('detalle-proyecto')}}" class="property-img">
	              <div class="img-fade"></div>
	              <div class="property-label {{ Request::is('proyectos') ? 'orange-background' : (Request::is('alquiler') ? 'green-background' : (Request::is('venta') ? 'blue-background' : '')) }}">
						<span><i class="fa fa-home"></i>PROYECTO</span> 	
					</div>
	              <div class="property-tag button status {{ Request::is('proyectos') ? 'orange-button' : (Request::is('alquiler') ? 'green-button' : (Request::is('venta') ? 'blue-button' : '')) }}">Contactar</div>	              
	              <div class="property-color-bar"></div>
	              <img src="{{ asset('images/projects/portada/1.jpg') }}" alt="" />
	            </a>
	            <div class="business">
	            	<a href="index.html">
	            		<img src="{{ asset('images/inmobiliarias/logo/1.jpg') }}">
	            	</a>					
				</div>
	            <div class="property-content {{ Request::is('proyectos') ? 'orange-background' : (Request::is('alquiler') ? 'green-background' : (Request::is('venta') ? 'blue-background' : '')) }}">
	              	<div class="property-title">
              			<a href="#">ALQUILO DEPA AMOBLADO EN URB. EL GOLF <p>Trujillo - La Libertad - Perú</p></a>
                		<p class="property-price">$ 150,000</p>	              		
	              	</div>
	            </div>
	            <div class="property-footer">
					<table class="property-details">
						<tr>
						  <td><i class="fa fa-bed"></i> 3 camas</td>
						  <td><i class="fa fa-bath"></i> 2 baños</td>
						  <td><i class="fa fa-expand"></i> 25,000 m<sup>2</sup></td>
						</tr>
					</table>
	            </div>
	          </div>
	        </div>		
		
			<div class="pagination">
		        <div class="center">
		            <ul>
		              <li><a href="#" class="button small grey"><i class="fa fa-angle-left"></i></a></li>
		              <li class="current"><a href="#" class="button small grey">1</a></li>
		              <li><a href="#" class="button small grey">2</a></li>
		              <li><a href="#" class="button small grey">3</a></li>
		              <li><a href="#" class="button small grey"><i class="fa fa-angle-right"></i></a></li>
		            </ul>
		        </div>
		        <div class="clear"></div>
		    </div>

	  </div><!-- end container -->
	</section>
	
@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {

			$('.business').css('bottom', parseInt($('.property-content').css('height')) + parseInt($('.property-footer').css('height')) + 10 );
		});
	</script>
@endsection