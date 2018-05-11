@extends('web.layout')

@section('styles')
	<style type="text/css">			
		.dropdown-menu{
			max-width: 160px;
			min-width: 0; 
		}		
		.dropdown-menu>li>a{
			padding: 3px 8px;
		}
		.dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover{
			background-color: white;
		}
	</style>
@endsection

@section('content')
	<section class="subheader">
	  <div class="container">
	    <h1>Detalle de Proyecto</h1>
	    <div class="breadcrumb right">
	    	<a href="{{ route('index') }} ">Inicio</a> <i class="fa fa-angle-right"></i>
	    	<a href="#">Alquiler</a> <i class="fa fa-angle-right"></i> <!--Aqui va el estado-->
	    	RESIDENCIAL LAS TERRAZAS DE SAN ANDRES <!--Nombre del Proyecto-->
	    </div>
	    <div class="clear"></div>
	  </div>
	</section>

	@include('web.buscador')

	<section class="module">
	  <div class="container">
	  
		<div class="row">
			<div class="col-lg-8 col-md-8">
			
				<div class="property-single-item property-main">
					<div class="property-header">
						<div class="property-title">
							<h4>RESIDENCIAL LAS TERRAZAS DE SAN ANDRES</h4>
							<p class="property-address"><i class="fa fa-map-marker icon"></i>Trujillo - La Libertad - Perú</p>
	            			<div class="clear"></div>
						</div>
						<div class="property-single-tags">
							<div class="property-tag button alt featured">
								<a href="">
									<i class="fa fa-print"></i> Imprimir
								</a>
							</div>
							<div class="property-tag status btn-group">
								<a href="" class="button property-tag dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<i class="fa fa-share-alt"></i>
								</a>								
								<ul class="dropdown-menu">
									<li>
										<a href="#">
											<span class="property-tag facebook"><i class="fa fa-facebook"></i></span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="property-tag twitter"><i class="fa fa-twitter"></i></span>
										</a>
									</li>
								</ul>
							</div>
							<div class="property-price-single right">$255,000</div>
						</div>
					</div>
					<table class="property-details-single">
						<tr>
							<td><i class="icon icon-apartment"></i> <span>Casa</span> </td>
							<td><i class="fa fa-bed"></i> <span>3</span> Camas</td>
							<td><i class="fa fa-bath"></i> <span>2</span> Baños</td>
							<td><i class="fa fa-expand"></i> <span>25,000</span> m<sup>2</sup></td>
							<td><i class="icon icon-garage"></i> <span>1</span> Garage</td>
						</tr>
					</table>
			        <div class="property-gallery">
						<div class="slider-nav slider-nav-property-gallery">
							<span class="slider-prev"><i class="fa fa-angle-left"></i></span>
							<span class="slider-next"><i class="fa fa-angle-right"></i></span>
						</div>
						<div class="slide-counter"></div>
						<div class="slider slider-property-gallery">
							<div class="slide"><img src="{{ asset('images/property-img5.jpg') }}" alt="" /></div>
							<div class="slide"><img src="{{ asset('images/property-img6.jpg') }}" alt="" /></div>
							<div class="slide"><img src="{{ asset('images/property-img3.jpg') }}" alt="" /></div>
							<div class="slide"><img src="{{ asset('images/property-img4.jpg') }}" alt="" /></div>
							<div class="slide"><img src="{{ asset('images/property-img1.jpg') }}" alt="" /></div>
							<div class="slide"><img src="{{ asset('images/property-img2.jpg') }}" alt="" /></div>
							<div class="slide"><img src="{{ asset('images/property-img3.jpg') }}" alt="" /></div>
						</div>
						<div class="slider property-gallery-pager">
							<a class="property-gallery-thumb"><img src="{{ asset('images/property-img5.jpg') }}" alt="" /></a>
							<a class="property-gallery-thumb"><img src="{{ asset('images/property-img6.jpg') }}" alt="" /></a>
							<a class="property-gallery-thumb"><img src="{{ asset('images/property-img3.jpg') }}" alt="" /></a>
							<a class="property-gallery-thumb"><img src="{{ asset('images/property-img4.jpg') }}" alt="" /></a>
							<a class="property-gallery-thumb"><img src="{{ asset('images/property-img1.jpg') }}" alt="" /></a>
							<a class="property-gallery-thumb"><img src="{{ asset('images/property-img2.jpg') }}" alt="" /></a>
							<a class="property-gallery-thumb"><img src="{{ asset('images/property-img3.jpg') }}" alt="" /></a>
						</div>
			        </div>
				</div><!-- end property title and gallery -->

				<div class="widget property-single-item property-description content">
					<h4>
						<span>DETALLES DEL INMUEBLE</span> 
						<img class="divider-hex" src="{{ asset('images/divider-half.png') }}" alt="" />
						<div class="divider-fade"></div>
					</h4>
					<div>
						<p>Ut euismod ultricies sollicitudin. Curabitur sed dapibus nulla. Nulla eget iaculis lectus. Mauris ac maximus neque. Nam 
						in mauris quis libero sodales eleifend. Morbi varius, nulla sit amet rutrum elementum, est elit finibus tellus, ut 
						tristique elit risus at metus. Sed fermentum, lorem vitae efficitur imperdiet, neque velit tristique turpis, et iaculis 
						mi tortor finibus turpis.
						</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. 
						Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. 
						Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, 
						a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper 
						placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. 
						Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet 
						tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.</p>
					</div>					

					<div class="tabs">
						<ul>
							<li><a href="#tabs-1"><i class="fa fa-pencil icon"></i>Detalles Adicionales</a></li>
							<li><a href="#tabs-2"><i class="fa fa-crop icon"></i>Planos</a></li>
							<li><a href="#tabs-3"><i class="fa fa-files-o icon"></i>Archivos Adjuntos</a></li>
						</ul>
						<div id="tabs-1" class="ui-tabs-hide">
							<ul class="additional-details-list ">
								<li><i class="icon-garage"></i> Garage para 1 carro</li>
								<li><i class="fa fa-bank"></i> BANCO DE CRÉDITO DEL PERÚ</li>
								<li><i class="icon-land"></i>CERCA de Parque</li>
								<li><a href="http://www.nuestracasa.pe/index.php/public/casatv/proyectos"><i class="fa fa-youtube-play"></i> Ver NUESTRACASA TV</a></li>
								<li><i class="icon-sale-sign"></i> En ALQUILER</li>
								<li><i class="icon-house-usd"></i> Pago Flexible</li>
								<li><i class="icon-bedrooms"></i> 3 habitacion(es)</li>
								<li><i class="icon-bathrooms"></i> 4 Baño(s)</li>
							</ul>
						</div>
						<div id="tabs-2" class="ui-tabs-hide">
							<a href="#"><img src="{{ asset('images/floor-plan1.jpg') }}" alt="" /></a>
						</div>
						<div id="tabs-3" class="ui-tabs-hide">
							<a href="#"><i class="fa fa-file-o icon"></i> Lease Agreement</a><br/><br/>
							<a href="#"><i class="fa fa-file-o icon"></i> Brochure</a><br/><br/>
							<a href="#"><i class="fa fa-file-o icon"></i> Property Details</a>
						</div>
				    </div>
				</div><!-- end description -->

				<div class="widget property-single-item property-location">
					<h4>
						<span>Ubicación</span> <img class="divider-hex" src="{{ asset('images/divider-half.png') }}" alt="" />
						<div class="divider-fade"></div>
					</h4>
					<div id="map-single"></div>
				</div><!-- end location -->

			</div><!-- end col -->
			
			<div class="col-lg-4 col-md-4 sidebar sidebar-property-single">
			
				<div class="widget widget-sidebar advanced-search">
				  <h4 class="green-light-background"><span>Solicitar Información</span> <img src="{{ asset('images/divider-half-white.png') }}" alt="" /></h4>
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
						<div class="col-lg-4 col-md-4 col-sm-4 text-center"><a href="#"><img src="{{ asset('images/projects/portada/2.jpg') }}" alt="" /></a></div>
						<div class="col-lg-8 col-md-8 col-sm-8">
							<h5><a href="#">RESIDENCIAL LAS TERRAZAS DE SAN ANDRES</a></h5>
	              			<p><i class="fa fa-calendar"></i> 07 de mayo del 2018</p>
						</div>
					  </div>
					</div>

					<div class="recent-property">
					  <div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 text-center"><a href="#"><img src="{{ asset('images/projects/portada/3.jpg') }}" alt="" /></a></div>
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
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&amp;sensor=false"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*informacion mapa*/
				//intialize the map
				function initialize() {
				  var mapOptions = {
				    zoom: 13,
				    scrollwheel: false,
				    center: new google.maps.LatLng(39.29000, -76.5000)
				  };

				var map = new google.maps.Map(document.getElementById('map-single'),
				      mapOptions);


				// MARKERS
				/****************************************************************/

				//add a marker1
				var marker = new google.maps.Marker({
				    position: map.getCenter(),
				    map: map,
				    icon: '{{ asset('images/pin.png') }}'
				});


				// INFO BOXES
				/****************************************************************/

				//show info box for marker1
				var contentString = '<div class="info-box"><img src="{{ asset('images/property-img1.jpg') }}" class="info-box-img" alt="" /><h4>587 Smith Avenue</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in ultrices metus' + 
				                    ' sit amet [...]</p><a href="property_single.html" class="button small">View Details</a><br/></div>';

				var infowindow = new google.maps.InfoWindow({ content: contentString });

				google.maps.event.addListener(marker, 'click', function() {
				    infowindow.open(map,marker);
				  });

				}

				google.maps.event.addDomListener(window, 'load', initialize);
			/*Fin informacion mapa*/

			var id;
		    $(window).resize(function() {
		        clearTimeout(id);
		        id = setTimeout( actualizarBusines, 50);    
		    });

		    function actualizarBusines(){
		        $('.business').css('bottom', parseInt($('.property-content').css('height')) + parseInt($('.property-footer').css('height')) + 10 );
		    }
		});
	</script>
@endsection