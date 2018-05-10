@extends('web.layout')

@section('styles')
	<style type="text/css">
		.property-cat{
			background-size: 100% 100%;
			height: 280px;
		}
	</style>
@endsection

@section('content')
	@include('web.slider')
	
	@include('web.buscador')

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

	<!--Begin Carousel -->
	<section class="module">
		<div class="container">
			<div class="row">
				<div class="module-header">
					<h2><strong>ÚLTIMOS PROYECTOS EN VENTA</strong></h2>
					<img src="images/divider.png" alt="" />
				</div>
				<div class="owl-carousel owl-theme proyectos">
				    <div class="item">
				    	<div class="property property-hidden-content">
					      	<a href="#" class="property-content">
					        	<div class="property-title">
					          		<h4>Residencial La Torre de San Francisco</h4>
					          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
					        	</div>
					        	<table class="property-details">
					          		<tr>
					            		<td><i class="fa fa-bed"></i> 3 Beds</td>
					            		<td><i class="fa fa-tint"></i> 2 Baths</td>
					            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
					          		</tr>
					        	</table>
					      	</a>
					      	<a href="#" class="property-img">
					          	<div class="img-fade"></div>
					          	<!--div class="property-tag button alt featured">Featured</div-->
					          	<div class="property-tag button status">For Sales</div>
					          	<div class="property-label red-background">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
					          	</div>
					          	<div class="property-color-bar red-background"></div>
					          	<img class="item-slide" src="{{ asset('images/projects/portada/1.jpg') }}" alt="" />
					      	</a>
					    </div>
				    </div>
				    <div class="item">
				    	<div class="property property-hidden-content">
					      	<a href="#" class="property-content">
					        	<div class="property-title">
					          		<h4>Modern Family Home</h4>
					          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
					        	</div>
					        	<table class="property-details">
					          		<tr>
					            		<td><i class="fa fa-bed"></i> 3 Beds</td>
					            		<td><i class="fa fa-tint"></i> 2 Baths</td>
					            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
					          		</tr>
					        	</table>
					      	</a>
					      	<a href="#" class="property-img">
					          	<div class="img-fade"></div>
					          	<!--div class="property-tag button alt featured">Featured</div-->
					          	<div class="property-tag button status">For Sales</div>
					          	<div class="property-label red-background">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span>
					          	</div>
					          	<div class="property-color-bar red-background"></div>
					          	<img class="item-slide" src="{{ asset('images/projects/portada/2.jpg') }}" alt="" />
					      	</a>
					    </div>
					</div>
				    <div class="item">
				    	<div class="property property-hidden-content">
					      	<a href="#" class="property-content">
					        	<div class="property-title">
					          		<h4>Modern Family Home</h4>
					          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
					        	</div>
					        	<table class="property-details">
					          		<tr>
					            		<td><i class="fa fa-bed"></i> 3 Beds</td>
					            		<td><i class="fa fa-tint"></i> 2 Baths</td>
					            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
					          		</tr>
					        	</table>
					      	</a>
					      	<a href="#" class="property-img">
					          	<div class="img-fade"></div>
					          	<!--div class="property-tag button alt featured">Featured</div-->
					          	<div class="property-tag button status">For Sales</div>
					          	<div class="property-label red-background">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span>
					          	</div>
					          	<div class="property-color-bar red-background"></div>
					          	<img class="item-slide" src="{{ asset('images/projects/portada/3.jpg') }}" alt="" />
					      	</a>
					    </div>
					</div>
				    <div class="item">
				    	<div class="property property-hidden-content">
					      	<a href="#" class="property-content">
					        	<div class="property-title">
					          		<h4>Modern Family Home</h4>
					          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
					        	</div>
					        	<table class="property-details">
					          		<tr>
					            		<td><i class="fa fa-bed"></i> 3 Beds</td>
					            		<td><i class="fa fa-tint"></i> 2 Baths</td>
					            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
					          		</tr>
					        	</table>
					      	</a>
					      	<a href="#" class="property-img">
					          	<div class="img-fade"></div>
					          	<!--div class="property-tag button alt featured">Featured</div-->
					          	<div class="property-tag button status">For Sales</div>
					          	<div class="property-label red-background">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span>
					          	</div>
					          	<div class="property-color-bar red-background"></div>
					          	<img class="item-slide" src="{{ asset('images/projects/portada/4.jpg') }}" alt="" />
					      	</a>
					    </div>
					</div>
				    <div class="item">
				    	<div class="property property-hidden-content">
					      	<a href="#" class="property-content">
					        	<div class="property-title">
					          		<h4>Modern Family Home</h4>
					          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
					        	</div>
					        	<table class="property-details">
					          		<tr>
					            		<td><i class="fa fa-bed"></i> 3 Beds</td>
					            		<td><i class="fa fa-tint"></i> 2 Baths</td>
					            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
					          		</tr>
					        	</table>
					      	</a>
					      	<a href="#" class="property-img">
					          	<div class="img-fade"></div>
					          	<!--div class="property-tag button alt featured">Featured</div-->
					          	<div class="property-tag button status">For Sales</div>
					          	<div class="property-label red-background">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span>
					          	</div>
					          	<div class="property-color-bar red-background"></div>
					          	<img class="item-slide" src="{{ asset('images/projects/portada/5.jpg') }}" alt="" />
					      	</a>
					    </div>
					</div>
				    <div class="item">
				    	<div class="property property-hidden-content">
					      	<a href="#" class="property-content">
					        	<div class="property-title">
					          		<h4>Modern Family Home</h4>
					          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
					        	</div>
					        	<table class="property-details">
					          		<tr>
					            		<td><i class="fa fa-bed"></i> 3 Beds</td>
					            		<td><i class="fa fa-tint"></i> 2 Baths</td>
					            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
					          		</tr>
					        	</table>
					      	</a>
					      	<a href="#" class="property-img">
					          	<div class="img-fade"></div>
					          	<div class="property-tag button status">For Sales</div>
					          	<div class="property-label red-background">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span>
					          	</div>
					          	<div class="property-color-bar red-background"></div>
					          	<img class="item-slide" src="{{ asset('images/projects/portada/1.jpg') }}" alt="" />
					      	</a>
					    </div>
					</div>
				</div>
			</div>			
		</div>	
	</section>
	<!--End Carousel-->

	<!--Begin Destacados en Alquiler-->
	<section class="module no-padding properties">
		<div class="container">
			<div class="module-header">
			  	<h2><strong>PROPIEDADES DESTACADAS EN ALQUILER</strong></h2>
			  	<img src="images/divider.png" alt="" />
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="property property-hidden-content">
				      	<a href="#" class="property-content">
				        	<div class="property-title">
				          		<h4>Residencial La Torre de San Francisco</h4>
				          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
				        	</div>
				        	<table class="property-details">
				          		<tr>
				            		<td><i class="fa fa-bed"></i> 3 Beds</td>
				            		<td><i class="fa fa-tint"></i> 2 Baths</td>
				            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
				          		</tr>
				        	</table>
				      	</a>
				      	<a href="#" class="property-img">
				          	<div class="img-fade"></div>
				          	<!--div class="property-tag button alt featured">Featured</div-->
				          	<div class="property-tag button status">For Sales</div>
				          	<div class="property-label red-background">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar red-background"></div>
				          	<img class="item-slide" src="{{ asset('images/projects/portada/1.jpg') }}" alt="" />
				      	</a>
				    </div>						
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="property property-hidden-content">
				      	<a href="#" class="property-content">
				        	<div class="property-title">
				          		<h4>Residencial La Torre de San Francisco</h4>
				          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
				        	</div>
				        	<table class="property-details">
				          		<tr>
				            		<td><i class="fa fa-bed"></i> 3 Beds</td>
				            		<td><i class="fa fa-tint"></i> 2 Baths</td>
				            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
				          		</tr>
				        	</table>
				      	</a>
				      	<a href="#" class="property-img">
				          	<div class="img-fade"></div>
				          	<!--div class="property-tag button alt featured">Featured</div-->
				          	<div class="property-tag button status">For Sales</div>
				          	<div class="property-label red-background">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar red-background"></div>
				          	<img class="item-slide" src="{{ asset('images/projects/portada/2.jpg') }}" alt="" />
				      	</a>
				    </div>						
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="property property-hidden-content">
				      	<a href="#" class="property-content">
				        	<div class="property-title">
				          		<h4>Residencial La Torre de San Francisco</h4>
				          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
				        	</div>
				        	<table class="property-details">
				          		<tr>
				            		<td><i class="fa fa-bed"></i> 3 Beds</td>
				            		<td><i class="fa fa-tint"></i> 2 Baths</td>
				            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
				          		</tr>
				        	</table>
				      	</a>
				      	<a href="#" class="property-img">
				          	<div class="img-fade"></div>
				          	<!--div class="property-tag button alt featured">Featured</div-->
				          	<div class="property-tag button status">For Sales</div>
				          	<div class="property-label red-background">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar red-background"></div>
				          	<img class="item-slide" src="{{ asset('images/projects/portada/3.jpg') }}" alt="" />
				      	</a>
				    </div>						
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="property property-hidden-content">
				      	<a href="#" class="property-content">
				        	<div class="property-title">
				          		<h4>Residencial La Torre de San Francisco</h4>
				          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
				        	</div>
				        	<table class="property-details">
				          		<tr>
				            		<td><i class="fa fa-bed"></i> 3 Beds</td>
				            		<td><i class="fa fa-tint"></i> 2 Baths</td>
				            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
				          		</tr>
				        	</table>
				      	</a>
				      	<a href="#" class="property-img">
				          	<div class="img-fade"></div>
				          	<!--div class="property-tag button alt featured">Featured</div-->
				          	<div class="property-tag button status">For Sales</div>
				          	<div class="property-label red-background">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar red-background"></div>
				          	<img class="item-slide" src="{{ asset('images/projects/portada/4.jpg') }}" alt="" />
				      	</a>
				    </div>						
				</div>				
			</div>
			<div class="center">
				<a href="#" class="button button-icon more-properties-btn red-background"><i class="fa fa-angle-right"></i>Ver Más Proyectos</a>
			</div>
		</div>
	</section>
	<!--End Destacados en Alquiler-->

	<!--Begin Destacados en Venta-->
	<section class="module properties">
		<div class="container">
			<div class="module-header">
			  	<h2><strong>PROPIEDADES DESTACADAS EN VENTA</strong></h2>
			  	<img src="images/divider.png" alt="" />
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="property property-hidden-content">
				      	<a href="#" class="property-content">
				        	<div class="property-title">
				          		<h4>Residencial La Torre de San Francisco</h4>
				          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
				        	</div>
				        	<table class="property-details">
				          		<tr>
				            		<td><i class="fa fa-bed"></i> 3 Beds</td>
				            		<td><i class="fa fa-tint"></i> 2 Baths</td>
				            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
				          		</tr>
				        	</table>
				      	</a>
				      	<a href="#" class="property-img">
				          	<div class="img-fade"></div>
				          	<!--div class="property-tag button alt featured">Featured</div-->
				          	<div class="property-tag button status">For Sales</div>
				          	<div class="property-label red-background">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar red-background"></div>
				          	<img class="item-slide" src="{{ asset('images/projects/portada/1.jpg') }}" alt="" />
				      	</a>
				    </div>						
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="property property-hidden-content">
				      	<a href="#" class="property-content">
				        	<div class="property-title">
				          		<h4>Residencial La Torre de San Francisco</h4>
				          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
				        	</div>
				        	<table class="property-details">
				          		<tr>
				            		<td><i class="fa fa-bed"></i> 3 Beds</td>
				            		<td><i class="fa fa-tint"></i> 2 Baths</td>
				            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
				          		</tr>
				        	</table>
				      	</a>
				      	<a href="#" class="property-img">
				          	<div class="img-fade"></div>
				          	<!--div class="property-tag button alt featured">Featured</div-->
				          	<div class="property-tag button status">For Sales</div>
				          	<div class="property-label red-background">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar red-background"></div>
				          	<img class="item-slide" src="{{ asset('images/projects/portada/2.jpg') }}" alt="" />
				      	</a>
				    </div>						
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="property property-hidden-content">
				      	<a href="#" class="property-content">
				        	<div class="property-title">
				          		<h4>Residencial La Torre de San Francisco</h4>
				          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
				        	</div>
				        	<table class="property-details">
				          		<tr>
				            		<td><i class="fa fa-bed"></i> 3 Beds</td>
				            		<td><i class="fa fa-tint"></i> 2 Baths</td>
				            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
				          		</tr>
				        	</table>
				      	</a>
				      	<a href="#" class="property-img">
				          	<div class="img-fade"></div>
				          	<!--div class="property-tag button alt featured">Featured</div-->
				          	<div class="property-tag button status">For Sales</div>
				          	<div class="property-label red-background">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar red-background"></div>
				          	<img class="item-slide" src="{{ asset('images/projects/portada/3.jpg') }}" alt="" />
				      	</a>
				    </div>						
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<div class="property property-hidden-content">
				      	<a href="#" class="property-content">
				        	<div class="property-title">
				          		<h4>Residencial La Torre de San Francisco</h4>
				          		<p class="property-address"><i class="fa fa-map-marker icon"></i>123 Smith Dr, Annapolis, MD</p>
				        	</div>
				        	<table class="property-details">
				          		<tr>
				            		<td><i class="fa fa-bed"></i> 3 Beds</td>
				            		<td><i class="fa fa-tint"></i> 2 Baths</td>
				            		<td><i class="fa fa-expand"></i> 25,000 m2</td>
				          		</tr>
				        	</table>
				      	</a>
				      	<a href="#" class="property-img">
				          	<div class="img-fade"></div>
				          	<!--div class="property-tag button alt featured">Featured</div-->
				          	<div class="property-tag button status">For Sales</div>
				          	<div class="property-label red-background">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar red-background"></div>
				          	<img class="item-slide" src="{{ asset('images/projects/portada/4.jpg') }}" alt="" />
				      	</a>
				    </div>						
				</div>				
			</div>
			<div class="center">
				<a href="#" class="button button-icon more-properties-btn red-background"><i class="fa fa-angle-right"></i> Ver Más Proyectos</a>
			</div>
		</div>
	</section>
	<!--End Destacados en Venta-->

	<section class="module property-categories no-padding">
	  <div class="container">

	    <div class="module-header">
	      <h2><strong>NUESTROS SERVICIOS</strong></h2>
	      <img src="images/divider.png" alt="" />
	    </div>

		<div class="row">
	      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	      	<a href="#" class="property-cat revista">
	          <!--<h3>Family Homes</h3>
	          <div class="color-bar"></div>
	          <span class="button small">234 Properties</span>-->
	        </a>	        
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	        <a href="#" class="property-cat nosotros">
	          <!--<h3>Family Homes</h3>
	          <div class="color-bar"></div>
	          <span class="button small">234 Properties</span>-->
	        </a>
	      </div>
	    </div><!-- end row -->

	    <div class="row">
	      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	        <a href="#" class="property-cat nuestracasa-tv">
	        </a>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	        <a href="{{ route('alertaroja') }}" class="property-cat alertaroja">
	        </a>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	        <div class="owl-carousel owl-theme bancos">
			    <div class="item">
			    	<div class="property">
				      	<a href="#" class="property-img">
				          	<img class="" src="{{ asset('images/bancos/index/1.jpg') }}" alt="" />
				      	</a>
				    </div>
			    </div>
			    <div class="item">
			    	<div class="property">
				      	<a href="#" class="property-img">
				          	<img class="" src="{{ asset('images/bancos/index/2.jpg') }}" alt="" />
				      	</a>
				    </div>
				</div>
			    <div class="item">
			    	<div class="property">
				      	<a href="#" class="property-img">
				          	<img class="" src="{{ asset('images/bancos/index/3.jpg') }}" alt="" />
				      	</a>
				    </div>
				</div>
			    <div class="item">
			    	<div class="property">
				      	<a href="#" class="property-img">
				          	<img class="" src="{{ asset('images/bancos/index/4.jpg') }}" alt="" />
				      	</a>
				    </div>
				</div>
			    <div class="item">
			    	<div class="property">
				      	<a href="#" class="property-img">
				          	<img class="" src="{{ asset('images/bancos/index/5.jpg') }}" alt="" />
				      	</a>
				    </div>
				</div>
			</div>
	      </div>
	    </div><!-- end row -->

	    

	  </div><!-- end container -->
	</section>

	<section class="module properties news">
	  <div class="container">

	    <div class="module-header">
	      <h2><strong>NOTICIAS INMOBILIARIAS</strong></h2>
	      <img src="images/divider.png" alt="" />
	    </div>

	    <div class="row">

	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          <div class="property shadow-hover">
	            <a href="#" class="property-img">
	              <div class="img-fade"></div>
	              <div class="property-color-bar red-background"></div>
	              <img class="new-img" src="{{ asset('images/noticias/portada/1.jpg') }}" alt="" />
	            </a>
	            <div class="property-content">
	              <div class="property-title">
	              	<h4><a href="#" class="baltic-sea">Noticia 1</a></h4>
	                <p class="property-address">El día 30 de Abril del 2018 estuvimos acompañando a la empresa RAMVAL en su tarde deportiva e ...</p>
	              </div>
	            </div>
	            <div class="property-footer">
	              <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
	              <span class="right">
	                <a href="#"><i class="fa fa-heart-o icon"></i></a>
	                <a href="#"><i class="fa fa-share-alt"></i></a>
	              </span>
	              <div class="clear"></div>
	            </div>
	          </div>
	        </div>

	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          <div class="property shadow-hover">
	            <a href="#" class="property-img">
	              <div class="img-fade"></div>
	              <div class="property-color-bar red-background"></div>
	              <img class="new-img" src="{{ asset('images/noticias/portada/2.jpg') }}" alt="" />
	            </a>
	            <div class="property-content">
	              <div class="property-title">
	              	<h4><a href="#" class="baltic-sea">Noticia 1</a></h4>
	                <p class="property-address">El día 30 de Abril del 2018 estuvimos acompañando a la empresa RAMVAL en su tarde deportiva e ...</p>
	              </div>
	            </div>
	            <div class="property-footer">
	              <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
	              <span class="right">
	                <a href="#"><i class="fa fa-heart-o icon"></i></a>
	                <a href="#"><i class="fa fa-share-alt"></i></a>
	              </span>
	              <div class="clear"></div>
	            </div>
	          </div>
	        </div>

	        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	          <div class="property shadow-hover">
	            <a href="#" class="property-img">
	              <div class="img-fade"></div>
	              <div class="property-color-bar red-background"></div>
	              <img class="new-img" src="{{ asset('images/noticias/portada/3.jpg') }}" alt="" />
	            </a>
	            <div class="property-content">
	              <div class="property-title">
	              	<h4><a href="#" class="baltic-sea">Noticia 1</a></h4>
	                <p class="property-address">El día 30 de Abril del 2018 estuvimos acompañando a la empresa RAMVAL en su tarde deportiva e ...</p>
	              </div>
	            </div>
	            <div class="property-footer">
	              <span class="left"><i class="fa fa-calendar-o icon"></i> 5 days ago</span>
	              <span class="right">
	                <a href="#"><i class="fa fa-heart-o icon"></i></a>
	                <a href="#"><i class="fa fa-share-alt"></i></a>
	              </span>
	              <div class="clear"></div>
	            </div>
	          </div>
	        </div>
	    </div><!-- end row -->

	    <div class="center"><a href="#" class="button button-icon more-properties-btn red-background"><i class="fa fa-angle-right"></i> Ver Más Noticias</a></div>

	  </div><!-- end container -->
	</section>
	
@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#camera_wrap_1').camera({
				pagination: false, /*Deshabilita paginacion */
				fx: 'random', /*Transiciones aleatorias*/
				height: '29%', /*altura de imagen*/
				time: 4000, /*Tiempo de transicion*/
			});

			$('.proyectos').owlCarousel({
			    loop:true,
			    margin:10,
			    autoplay:true,
			    autoplayTimeout:3000,
			    responsive:{
			        0:{
			            items:1
			        },
			        480:{
			            items:2
			        },
			        600:{
			            items:3
			        },
			        1000:{
			            items:4
			        }
			    }
			});

			$('.bancos').owlCarousel({
			    loop:true,
			    margin:10,
			    autoplay:true,
			    autoplayTimeout:2000,
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
		});
	</script>
@endsection