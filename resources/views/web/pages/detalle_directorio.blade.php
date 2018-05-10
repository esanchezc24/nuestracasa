@extends('web.layout')

@section('styles')
	<style type="text/css">
		.property .property-img img{
		    height: 280px!important;
		    width: 100%
		}
		.button{
			cursor: inherit;
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

				<!--Begin Datos Empresa-->
				<div class="agent agent-single">
			        <a href="#" class="agent-img text-center">
			          <img class="hex" src="{{ asset('images/hexagon.png') }}" alt="" />
			          <img src="{{ asset('images/inmobiliarias/logo/1.jpg') }}" alt="" />
			        </a>
			        <div class="agent-content">
			              <div class="agent-details">
			                <h4><a href="#">MCH INMOBILIARIA SAC</a><p><small>Trujillo - Peru</small></p></h4>
			                <p><i class="fa fa-map-marker icon"></i>Dirección: <span>Av. América Norte N°1550 - Urb. Las Quintanas</span></p>
			                <p><i class="fa fa-envelope icon"></i>Correo: <span><a href="mailto:ventas@repalsaperu.com">ventas@repalsaperu.com</a></span></p>
			                <p><i class="fa fa-phone icon"></i>Teléfono: <span>(123) 456-6789 / (123) 456-6789</span></p>
			                <p><i class="fa fa-mobile icon"></i>Celular: <span>(123) 456-6789</span></p>
			              </div>
			              <div class="center">
			                <ul class="social-icons circle">
			                	<li><a href="#"><i class="fa fa-globe"></i></a></li>
			                	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			                	<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			                </ul>
			              </div><br/>
			              <div class="button alt button-icon"><i class="fa fa-home"></i>24 Propiedades Asignadas</div>
			        </div>
			        <div class="clear"></div>
			    </div>
			    <!--End Datos Empresa-->

				<!--Begin Description-->
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
		      	</div>
		      	<!-- End description -->

				@include('web.blocks.propiedades_asignadas')

				@include('web.blocks.publicidad')

			    
			
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