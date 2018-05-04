@extends('web.layout')

@section('styles')
	<style type="text/css">
		.services{
			padding-top: 40px;
		}
		.white{
			color: white;
		}
		.module-header {
		    margin-bottom: 20px;
		    text-align: center;
		}
		.item-slide{
			height: 250px!important;
		}
		.properties .item-slide{
			height: 250px!important;
		}
		.property-price{
			position: absolute;
		    top: 10px;
		    left: -5px;
		    bottom: inherit;
		    background-color: #df4a43;
		    color: #fff;
		    padding: 2px 20px 2px 10px;
		    z-index: 10;
		    -webkit-border-radius: 0 4px 4px 0;
		    -moz-border-radius: 0 4px 4px 0;
		    border-radius: 0 4px 4px 0;
		}
		.property-price i {
		    margin-right: 8px;
		    -webkit-opacity: 0.6;
		    -moz-opacity: 0.6;
		    opacity: 0.6;
		}
		.property-price:before {
		    content: " ";
		    position: absolute;
		    left: 0;
		    bottom: -6px;
		    border-color: rgba(0, 0, 0, 0) #751814 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0);
		    border-style: solid;
		    border-width: 0 6px 6px 0;
		    height: 0;
		    width: 0;
		}
		.property-price{
			font-size: 14px;
		}
		.property-price span{
			display: block;
		    font-size: 16pt;
		    font-weight: 700;
		    margin-top: -4px;
		}
		.property-content {
		    padding: 80px 5% 5%;
		}
		.property.property-hidden-content .property-content h4{
			font-size: 15px!important;
		}
		.property.property-hidden-content .property-content {
		    transition: all 0.4s;
		    position: absolute;
		    bottom: 0;
		    width: 100%;
		    height: 100%;
		    opacity: 0;
		    background: rgba(26,43,63, 0.7);
		    z-index: 10;
		    color: white;
		    display: block;
		}
		.property-color-bar {
    		background: #df4a43; 
    	}
    	.property-cat{
    		background-size: 100% 100%;
    		height: 280px;
    	}
    	.property .property-img img{
		    height: 280px!important;
		    width: 100%
		}
    	.more-properties-btn{
    		background-color: #df4a43!important;
    	}
    	.nosotros {
		    background-image: url(images/servicios/01.jpg);
		}
		.revista {
		    background-image: url(images/servicios/02.jpg);
		}
		.nuestracasa-tv {
		    background-image: url(images/servicios/03.jpg);
		}
		.alertaroja{
			background-image: url(images/servicios/04.jpg);
		}

		.news .property-content{
			padding: 5%;
		}

		.news .property-content .property-title{
			margin-bottom: 0;
			padding-bottom: 0;
			border-bottom: 0px solid rgba(0, 0, 0, 0.09);
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
					          	<div class="property-price">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
					          	</div>
					          	<div class="property-color-bar"></div>
					          	<img class="item-slide" src="images/projects/1.jpg" alt="" />
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
					          	<div class="property-price">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span>
					          	</div>
					          	<div class="property-color-bar"></div>
					          	<img class="item-slide" src="images/projects/2.jpg" alt="" />
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
					          	<div class="property-price">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span>
					          	</div>
					          	<div class="property-color-bar"></div>
					          	<img class="item-slide" src="images/projects/3.jpg" alt="" />
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
					          	<div class="property-price">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span>
					          	</div>
					          	<div class="property-color-bar"></div>
					          	<img class="item-slide" src="images/projects/4.jpg" alt="" />
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
					          	<div class="property-price">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span>
					          	</div>
					          	<div class="property-color-bar"></div>
					          	<img class="item-slide" src="images/projects/5.jpg" alt="" />
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
					          	<div class="property-tag button alt featured">Featured</div>
					          	<div class="property-tag button status">For Sales</div>
					          	<div class="property-price">
					          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span>
					          	</div>
					          	<div class="property-color-bar"></div>
					          	<img class="item-slide" src="images/projects/1.jpg" alt="" />
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
				          	<div class="property-price">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar"></div>
				          	<img class="item-slide" src="images/projects/1.jpg" alt="" />
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
				          	<div class="property-price">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar"></div>
				          	<img class="item-slide" src="images/projects/2.jpg" alt="" />
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
				          	<div class="property-price">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar"></div>
				          	<img class="item-slide" src="images/projects/3.jpg" alt="" />
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
				          	<div class="property-price">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar"></div>
				          	<img class="item-slide" src="images/projects/4.jpg" alt="" />
				      	</a>
				    </div>						
				</div>				
			</div>
			<div class="center">
				<a href="#" class="button button-icon more-properties-btn"><i class="fa fa-angle-right"></i> View More Properties</a>
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
				          	<div class="property-price">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar"></div>
				          	<img class="item-slide" src="images/projects/1.jpg" alt="" />
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
				          	<div class="property-price">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar"></div>
				          	<img class="item-slide" src="images/projects/2.jpg" alt="" />
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
				          	<div class="property-price">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar"></div>
				          	<img class="item-slide" src="images/projects/3.jpg" alt="" />
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
				          	<div class="property-price">
				          		<i class="fa fa-home"></i>en PROYECTO<span>S/. 101.900</span> 	
				          	</div>
				          	<div class="property-color-bar"></div>
				          	<img class="item-slide" src="images/projects/4.jpg" alt="" />
				      	</a>
				    </div>						
				</div>				
			</div>
			<div class="center">
				<a href="#" class="button button-icon more-properties-btn"><i class="fa fa-angle-right"></i> View More Properties</a>
			</div>
		</div>
	</section>
	<!--End Destacados en Venta-->

	<section class="module property-categories">
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
	        <a href="#" class="property-cat alertaroja">
	        </a>
	      </div>
	      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	        <div class="owl-carousel owl-theme bancos">
			    <div class="item">
			    	<div class="property">
				      	<a href="#" class="property-img">
				          	<img class="" src="images/servicios/bancos/1.jpg" alt="" />
				      	</a>
				    </div>
			    </div>
			    <div class="item">
			    	<div class="property">
				      	<a href="#" class="property-img">
				          	<img class="" src="images/servicios/bancos/2.jpg" alt="" />
				      	</a>
				    </div>
				</div>
			    <div class="item">
			    	<div class="property">
				      	<a href="#" class="property-img">
				          	<img class="" src="images/servicios/bancos/3.jpg" alt="" />
				      	</a>
				    </div>
				</div>
			    <div class="item">
			    	<div class="property">
				      	<a href="#" class="property-img">
				          	<img class="" src="images/servicios/bancos/4.jpg" alt="" />
				      	</a>
				    </div>
				</div>
			    <div class="item">
			    	<div class="property">
				      	<a href="#" class="property-img">
				          	<img class="" src="images/servicios/bancos/5.jpg" alt="" />
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

	        <div class="col-lg-4 col-md-4">
	          <div class="property shadow-hover">
	            <a href="#" class="property-img">
	              <div class="img-fade"></div>
	              <div class="property-color-bar"></div>
	              <img src="images/property-img1.jpg" alt="" />
	            </a>
	            <div class="property-content">
	              <div class="property-title">
	              	<h4><a href="#">Noticia 1</a></h4>
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

	        <div class="col-lg-4 col-md-4">
	          <div class="property shadow-hover">
	            <a href="#" class="property-img">
	              <div class="img-fade"></div>
	              <div class="property-color-bar"></div>
	              <img src="images/property-img3.jpg" alt="" />
	            </a>
	            <div class="property-content">
	              <div class="property-title">
	              	<h4><a href="#">Noticia 1</a></h4>
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

	        <div class="col-lg-4 col-md-4">
	          <div class="property shadow-hover">
	            <a href="#" class="property-img">
	              <div class="img-fade"></div>
	              <div class="property-color-bar"></div>
	              <img src="images/property-img4.jpg" alt="" />
	            </a>
	            <div class="property-content">
	              <div class="property-title">
	              	<h4><a href="#">Noticia 1</a></h4>
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

	    <div class="center"><a href="#" class="button button-icon more-properties-btn"><i class="fa fa-angle-right"></i> View More Properties</a></div>

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