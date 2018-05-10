@extends('web.layout')

@section('styles')
	<style type="text/css">
		.property-img img {
		    max-width: 100%;
		    height: 210px!important;
		}
		.property-row, .property-row .property-content {
		    max-height: 210px!important;
		}
		.property-row-sidebar .property-img {
		    min-height: 210px!important;
		}
		.property-title {
    		border-bottom: none;
    	}
	</style>
@endsection

@section('content')
	<section class="subheader">
	  <div class="container">
	    <h1>{{ Request::is('noticias') ? 'Noticias' : (Request::is('alertaroja') ? 'Alerta Roja' : '') }}</h1>
	    <div class="breadcrumb right"><a href="{{ route('index') }} ">Inicio</a> <i class="fa fa-angle-right"></i> {{ Request::is('noticias') ? 'Noticias' : (Request::is('alertaroja') ? 'Alerta Roja' : '') }}</div>
	    <div class="clear"></div>
	  </div>
	</section>

	<section class="module no-padding">
	  <div class="container">
	  
		<div class="row">
			<div class="col-lg-8 col-md-8">
				
				<div class="property property-row property-row-sidebar shadow-hover">
					<a href="{{ route('detalle-articulo') }}" class="property-img text-center news">
						<div class="property-color-bar baltic-sea-background"></div>
						<img src="{{ asset('images/noticias/portada/1.jpg') }}" alt="" />
					</a>
					<div class="property-content">
						<div class="property-title">
							<h4><a class="baltic-sea" href="{{ route('detalle-articulo') }}">MCH INMOBILIARIA SAC</a></h4>
							<p class="property-address"><i class="fa fa-user icon"></i>Jhonatan Marquina G.</p>
							<div class="clear"></div>
							<p class="property-text">Somos MCH Grupo Inmobiliario, una institución dinámica e innovadora que pone especial énfasis en el impacto social que pueda tener todas y cada una de nuestras actividades a desarrollar, el respeto de los valores y principios por los que se rige y su profundo compromiso con sus clientes y grupos de interés que lo conforman p ...</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="property property-row property-row-sidebar shadow-hover">
					<a href="{{ route('detalle-articulo') }}" class="property-img text-center">
						<div class="property-color-bar baltic-sea-background"></div>
						<img src="{{ asset('images/noticias/portada/2.jpg') }}" alt="" />
					</a>
					<div class="property-content">
						<div class="property-title">
							<h4><a class="baltic-sea" href="{{ route('detalle-articulo') }}">MCH INMOBILIARIA SAC</a></h4>
							<p class="property-address"><i class="fa fa-user icon"></i>Jhonatan Marquina G.</p>
							<div class="clear"></div>
							<p class="property-text">Somos MCH Grupo Inmobiliario, una institución dinámica e innovadora que pone especial énfasis en el impacto social que pueda tener todas y cada una de nuestras actividades a desarrollar, el respeto de los valores y principios por los que se rige y su profundo compromiso con sus clientes y grupos de interés que lo conforman p ...</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="property property-row property-row-sidebar shadow-hover">
					<a href="{{ route('detalle-articulo') }}" class="property-img text-center">
						<div class="property-color-bar baltic-sea-background"></div>
						<img src="{{ asset('images/noticias/portada/3.jpg') }}" alt="" />
					</a>
					<div class="property-content">
						<div class="property-title">
							<h4><a class="baltic-sea" href="{{ route('detalle-articulo') }}">MCH INMOBILIARIA SAC</a></h4>
							<p class="property-address"><i class="fa fa-user icon"></i>Jhonatan Marquina G.</p>
							<div class="clear"></div>
							<p class="property-text">Somos MCH Grupo Inmobiliario, una institución dinámica e innovadora que pone especial énfasis en el impacto social que pueda tener todas y cada una de nuestras actividades a desarrollar, el respeto de los valores y principios por los que se rige y su profundo compromiso con sus clientes y grupos de interés que lo conforman p ...</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="property property-row property-row-sidebar shadow-hover">
					<a href="{{ route('detalle-articulo') }}" class="property-img text-center">
						<div class="property-color-bar baltic-sea-background"></div>
						<img src="{{ asset('images/noticias/portada/1.jpg') }}" alt="" />
					</a>
					<div class="property-content">
						<div class="property-title">
							<h4><a class="baltic-sea" href="{{ route('detalle-articulo') }}">MCH INMOBILIARIA SAC</a></h4>
							<p class="property-address"><i class="fa fa-user icon"></i>Jhonatan Marquina G.</p>
							<div class="clear"></div>
							<p class="property-text">Somos MCH Grupo Inmobiliario, una institución dinámica e innovadora que pone especial énfasis en el impacto social que pueda tener todas y cada una de nuestras actividades a desarrollar, el respeto de los valores y principios por los que se rige y su profundo compromiso con sus clientes y grupos de interés que lo conforman p ...</p>
						</div>
					</div>
					<div class="clear"></div>
				</div>

				<div class="property property-row property-row-sidebar shadow-hover">
					<a href="{{ route('detalle-articulo') }}" class="property-img text-center">
						<div class="property-color-bar baltic-sea-background"></div>
						<img src="{{ asset('images/noticias/portada/2.jpg') }}" alt="" />
					</a>
					<div class="property-content">
						<div class="property-title">
							<h4><a class="baltic-sea" href="{{ route('detalle-articulo') }}">MCH INMOBILIARIA SAC</a></h4>
							<p class="property-address"><i class="fa fa-user icon"></i>Jhonatan Marquina G.</p>
							<div class="clear"></div>
							<p class="property-text">Somos MCH Grupo Inmobiliario, una institución dinámica e innovadora que pone especial énfasis en el impacto social que pueda tener todas y cada una de nuestras actividades a desarrollar, el respeto de los valores y principios por los que se rige y su profundo compromiso con sus clientes y grupos de interés que lo conforman p ...</p>
						</div>
					</div>
					<div class="clear"></div>
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
			
			</div><!-- end listing -->
			
			<div class="col-lg-4 col-md-4 sidebar sidebar-property-single">
			
				<div class="widget widget-sidebar advanced-search">
				  <h4 class="green-light-background"><span>Anuncia con Nosotros</span> <img src="{{ asset('images/divider-half-white.png') }}" alt="" /></h4>
				  <div class="widget-content box">
					<form>
					  <div class="form-block border">
						<label for="property-location">Nombre</label>
						<input type="text" class="border" name="nombre" placeholder="Nombre...">
					  </div>
					  <div class="form-block border">
						<label for="property-location">Teléfono</label>
						<input type="text" class="border" name="telefono" placeholder="Teléfono..." pattern="^[0-9]{9}">
					  </div>
					  <div class="form-block border">
						<label for="property-location">Email</label>
						<input type="email" class="border" name="email" placeholder="Email..." pattern="[^ @]*@[^ @]*">
					  </div>
					  <div class="form-block border">
						<label for="property-location">Mensaje</label>
						<textarea class="border" name="mensaje" placeholder="..."></textarea>
					  </div>

					  <div class="form-block">
						<input type="submit" class="button green-lightn-button" value="Enviar" />
					  </div>
					</form>
				  </div><!-- end widget content -->
				</div><!-- end widget -->
				
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
	          <h4><span>Últimas {{ Request::is('noticias') ? 'Noticias' : (Request::is('alertaroja') ? 'Alerta Roja' : '') }}</span> <img src="{{ asset('images/divider-half.png') }}" alt="" /></h4>
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