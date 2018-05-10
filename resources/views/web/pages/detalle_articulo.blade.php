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
	    <h1>Detalle de Noticia </h1>
	    <div class="breadcrumb right">
	    	<a href="{{ route('index') }} ">Inicio</a> <i class="fa fa-angle-right"></i>
	    	<a href="{{ route('noticias')}}">Noticias</a> <i class="fa fa-angle-right"></i> <!--Aqui va el estado-->
	    	Noticia 1 <!--Nombre del Proyecto-->
	    </div>
	  </div>
	</section>

	<section class="module no-padding">
	  <div class="container">
	  
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

				<div class="blog-post">
					<a href="#" class="blog-post-img">
						<div class="img-fade"></div>
						<img src="images/blog-img2.jpg" alt="" />
					</a>
					<div class="content blog-post-content">
						<h3><a href="#">6 Tips to help you sell your house</a></h3>
						<ul class="blog-post-details">
							<li><i class="fa fa-calendar"></i> 13 de marzo del 2018</li>
							<li><i class="fa fa-tags"></i> Que créditos prefieren los jovenes</li>
							<li><i class="fa fa-pencil"></i> Por: Jhonatan Marquina G.</li>
						</ul>
						
						@include('web.blocks.galeria_noticias')

						<div class="contenido">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim pretium dui a lobortis. Etiam vel ex bibendum, posuere 
							leo in, varius mauris. Vestibulum eget lacinia diam. In eu eros sodales, luctus urna nec, posuere lorem. Cum sociis natoque penatibus 
							et magnis dis parturient montes, nascetur ridiculus mus. Fusce at mauris eget risus vehicula vestibulum at sit amet dui. Cras luctus 
							urna libero, quis ullamcorper libero lacinia eget.</p>

							<p>Nam porttitor nunc volutpat, bibendum mauris quis, volutpat diam. Nullam vehicula urna id lectus commodo feugiat. Suspendisse sit 
							amet pretium nisi, at placerat lorem. Nunc placerat sapien lectus. Maecenas in elit vitae lacus lacinia convallis sed non lectus. 
							Integer blandit elementum ipsum, ornare porttitor nulla gravida at. Maecenas maximus ac nisl sed euismod. Morbi fermentum augue vitae 
							eleifend iaculis. Nulla egestas ullamcorper mi, id eleifend arcu dignissim vel.</p>

							<h5>This is a Sub-Heading</h5>
							<p>Cras quis lobortis leo, vel varius neque. Donec iaculis, turpis in mattis posuere, ipsum lacus luctus augue, ut tristique quam dui 
							non elit. In a libero magna. Proin lacinia nulla a enim tempor congue. Cras augue ligula, vehicula nec suscipit convallis, hendrerit 
							ut arcu. Fusce iaculis nibh euismod velit ornare convallis. Etiam eu facilisis justo. Interdum et malesuada fames ac ante ipsum primis 
							in faucibus.</p>

							<div class="quote">Cras quis lobortis leo, vel varius neque. Donec iaculis, turpis in mattis posuere, ipsum lacus luctus augue, ut 
							tristique quam.</div>

							<h5>This is another Sub-Heading</h5>
							<p>Cras quis lobortis leo, vel varius neque. Donec iaculis, turpis in mattis posuere, ipsum lacus luctus augue, ut tristique quam dui 
							non elit. In a libero magna. Proin lacinia nulla a enim tempor congue. Cras augue ligula, vehicula nec suscipit convallis, hendrerit 
							ut arcu. Fusce iaculis nibh euismod velit ornare convallis. Etiam eu facilisis justo. Interdum et malesuada fames ac ante ipsum primis 
							in faucibus.</p>

							<p>Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus risus urna, aliquet vitae turpis 
							eget, porttitor feugiat sem. Aliquam ultrices laoreet lorem, in condimentum turpis lobortis vel. Sed vestibulum augue sed massa 
							tincidunt iaculis. Cras eget efficitur ligula. Donec volutpat quam risus, vel vehicula ligula auctor non. In hac habitasse platea 
							dictumst. Donec at ipsum magna. Fusce consequat, ante commodo lacinia semper, magna diam aliquam lacus, in dictum est sem in turpis. 
							Vivamus leo turpis, commodo blandit egestas vel, blandit in quam. Nam id diam in arcu accumsan porta eget a nisi. Class aptent taciti 
							sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
						</div>
						

						<div class="blog-post-share">
							<div class="divider"></div>
							<span class="left"><strong>Compartir:</strong> </span>
							<ul class="social-icons circle">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>

					</div>
				</div><!-- end blog post -->

			    
			
			</div><!-- end listing -->
			
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 sidebar sidebar-property-single">
				
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
	<script type="text/javascript" src="{{ asset('assets/html5lightbox/html5lightbox.js') }}"></script>
	<script type="text/javascript">
		$(document).ready(function() {

			$('.galeria').owlCarousel({
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
		});
	</script>
@endsection