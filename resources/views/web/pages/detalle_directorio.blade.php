@extends('web.layout')

@section('styles')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
	<style type="text/css">
		@media only screen and (min-width: 767px){
			.agent-single .agent-img {
			width: 35%;
			}
			.agent-single .agent-content {
			    width: 60%;
			}
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
		.property .property-img img{
		    height: 280px!important;
		    width: 100%
		}
		.property-content {
		    padding: 80px 5% 5%;
		}
		.property-title h4 {
		    width: 100%;
		    white-space: inherit;
		    overflow: inherit;
		    text-overflow: ellipsis;
		}
	</style>
@endsection

@section('content')
	<section class="subheader">
	  <div class="container">
	    <h1>Detalle de Inmobiliaria	</h1>
	    <div class="breadcrumb right">
	    	<a href="{{ route('index') }} ">Inicio</a> <i class="fa fa-angle-right"></i>
	    	<a href="{{ route('inmobiliarias')}}">Inmobiliarias</a> <i class="fa fa-angle-right"></i> <!--Aqui va el estado-->
	    	MCH INMOBILIARIA SAC <!--Nombre del Proyecto-->
	    </div>
	  </div>
	</section>

	<section class="module no-padding">
	  <div class="container">
	  
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

				<div class="agent agent-single">
			        <a href="#" class="agent-img">
			          <div class="img-fade"></div>
			          <img class="hex" src="images/hexagon.png" alt="" />
			          <img src="images/agent-img1.jpg" alt="" />
			        </a>
			        <div class="agent-content">
			              <div class="agent-details">
			                <h4><a href="#">Sarah Parker</a></h4>
			                <p><i class="fa fa-tag icon"></i>Title: <span>Selling Agent</span></p>
			                <p><i class="fa fa-envelope icon"></i>Email: <span>sparker@homely.com</span></p>
			                <p><i class="fa fa-phone icon"></i>Office: <span>(123) 456-6789 / (123) 456-6789</span></p>
			                <p><i class="fa fa-mobile icon"></i>Mobile: <span>(123) 456-6789</span></p>
			                <p><i class="fa fa-skype icon"></i>Skype: <span>sarah.parker</span></p>
			              </div>
			              <div class="center">
			                <ul class="social-icons circle">
			                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			                </ul>
			              </div><br/>
			              <div class="button alt button-icon"><i class="fa fa-home"></i>24 Assigned Properties</div>
			        </div>
			        <div class="clear"></div>
			    </div>

			    <div class="widget property-single-item agent-description content">
			        <h4>
			          <span>Descripción</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
			          <span class="divider-fade"></span>
			        </h4>
			        <p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam 
			        in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum.
			        </p>

			        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. 
			        Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. 
			        Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, 
			        a consequat purus viverra a.</p>
		      	</div><!-- end description -->


				<div class="widget property-single-item agent-properties">
			        <h4>
			          <span>Propiedades Asignadas</span> <img class="divider-hex" src="images/divider-half.png" alt="" />
			        </h4>

			        <div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
						          	<img class="item-slide" src="{{ asset('images/projects/portada/1.jpg') }}" alt="" />
						      	</a>
						    </div>						
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
						          	<img class="item-slide" src="{{ asset('images/projects/portada/2.jpg') }}" alt="" />
						      	</a>
						    </div>						
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
						          	<img class="item-slide" src="{{ asset('images/projects/portada/3.jpg') }}" alt="" />
						      	</a>
						    </div>						
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
						          	<img class="item-slide" src="{{ asset('images/projects/portada/3.jpg') }}" alt="" />
						      	</a>
						    </div>						
						</div>		
					</div>
			        
			      </div><!-- end agent properties -->
			
			</div><!-- end listing -->
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar sidebar-property-single">
				
				<div class="widget widget-sidebar recent-properties">
				  <h4><span>Recién Agregados</span> <img src="{{ asset('images/divider-half.png') }}" alt="" /></h4>
				  <div class="widget-content">

					<div class="recent-property">
					  <div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 text-center"><a href="#"><img src="{{ asset('images/projects/portada/1.jpg') }}" alt="" /></a></div>
						<div class="col-lg-8 col-md-8 col-sm-8">
							<h5><a href="#">RESIDENCIAL LAS TERRAZAS DE SAN ANDRES</a></h5>
	              			<p><i class="fa fa-calendar"></i> 07 de mayo del 2018</p>
						</div>
					  </div>
					</div>

					<div class="recent-property">
					  <div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 text-center"><a href="#"><img src="{{ asset('images/projects/portada/1.jpg') }}" alt="" /></a></div>
						<div class="col-lg-8 col-md-8 col-sm-8">
							<h5><a href="#">RESIDENCIAL LAS TERRAZAS DE SAN ANDRES</a></h5>
	              			<p><i class="fa fa-calendar"></i> 07 de mayo del 2018</p>
						</div>
					  </div>
					</div>

					<div class="recent-property">
					  <div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 text-center"><a href="#"><img src="{{ asset('images/projects/portada/1.jpg') }}" alt="" /></a></div>
						<div class="col-lg-8 col-md-8 col-sm-8">
							<h5><a href="#">RESIDENCIAL LAS TERRAZAS DE SAN ANDRES</a></h5>
	              			<p><i class="fa fa-calendar"></i> 07 de mayo del 2018</p>
						</div>
					  </div>
					</div>

				  </div><!-- end widget content -->
				</div><!-- end widget -->

	      <div class="widget widget-sidebar recent-posts">
	          <h4><span>Últimas Noticias</span> <img src="{{ asset('images/divider-half.png') }}" alt="" /></h4>
	          <div class="widget-content">

	          <div class="recent-property">
	            <div class="row">
	            <div class="col-lg-4 col-md-4 col-sm-4 text-center"><a href="#"><img src="{{ asset('images/blog-img1-thumb.jpg') }}" alt="" /></a></div>
	            <div class="col-lg-8 col-md-8 col-sm-8">
	              <h5><a href="#">VENTAJAS DE VIVIR EN LOS ÚLTIMOS P ...</a></h5>
	              <p><i class="fa fa-calendar-o"></i> 07 de mayo del 2018</p>
	            </div>
	            </div>
	          </div>

	          <div class="recent-property">
	            <div class="row">
	            <div class="col-lg-4 col-md-4 col-sm-4 text-center"><a href="#"><img src="{{ asset('images/blog-img2-thumb.jpg') }}" alt="" /></a></div>
	            <div class="col-lg-8 col-md-8 col-sm-8">
	              <h5><a href="#">VENTAJAS DE VIVIR EN LOS ÚLTIMOS P ... </a></h5>
	              <p><i class="fa fa-calendar-o"></i> 07 de mayo del 2018</p>
	            </div>
	            </div>
	          </div>

	          <div class="recent-property">
	            <div class="row">
	            <div class="col-lg-4 col-md-4 col-sm-4 text-center"><a href="#"><img src="{{ asset('images/blog-img3-thumb.jpg') }}" alt="" /></a></div>
	            <div class="col-lg-8 col-md-8 col-sm-8">
	              <h5><a href="#">VENTAJAS DE VIVIR EN LOS ÚLTIMOS P ... </a></h5>
	              <p><i class="fa fa-calendar-o"></i> 07 de mayo del 2018</p>
	            </div>
	            </div>
	          </div>

	          </div><!-- end widget content -->
	      </div><!-- end widget -->
			
			</div><!-- end sidebar -->
			
		</div><!-- end row -->

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