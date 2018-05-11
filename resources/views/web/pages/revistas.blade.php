@extends('web.layout')

@section('styles')
	<style type="text/css">
		.agent-img img {
		    max-width: 100%;
		    height: 320px!important;
		}
		.agent-details {
		    border-bottom: 1px solid rgba(0, 0, 0, 0.09);
		    padding: 0;
		    margin-bottom: 0;
		    font-size: 14px;
		    line-height: 1.9;
		}
	</style>
@endsection

@section('content')
	<section class="subheader">
	  <div class="container">
	    <h1>Revistas Digitales</h1>
	    <div class="breadcrumb right"><a href="{{ route('index') }} ">Inicio</a> <i class="fa fa-angle-right"></i> Revistas</div>
	    <div class="clear"></div>
	  </div>
	</section>

	<section class="module no-padding">
	  <div class="container">
	  
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">

				<div class="row">
					<div class="col-lg-4 col-md-4">
					  <div class="agent shadow-hover">
						<a href="{{ route('detalle-revista', 1) }}" class="agent-img text-center">
						  <img src="{{ asset('images/revista/portadas/01.jpg')}}" alt="" />
						</a>
						<div class="agent-content text-center">
						  <div class="agent-details">
							<h4><a href="{{ route('detalle-revista', 1) }}">Revista Mayo</a></h4>
							<p>N° 71 - 2018</p>
						  </div>
						</div>
					  </div>
					</div>
					
					<div class="col-lg-4 col-md-4">
					  <div class="agent shadow-hover">
						<a href="{{ route('detalle-revista', 1) }}" class="agent-img text-center">
						  <img src="{{ asset('images/revista/portadas/02.jpg')}}" alt="" />
						</a>
						<div class="agent-content text-center">
						  <div class="agent-details">
							<h4><a href="{{ route('detalle-revista', 1) }}">Revista Mayo</a></h4>
							<p>N° 71 - 2018</p>
						  </div>
						</div>
					  </div>
					</div>
					
					<div class="col-lg-4 col-md-4">
					  <div class="agent shadow-hover">
						<a href="{{ route('detalle-revista', 1) }}" class="agent-img text-center">
						  <img src="{{ asset('images/revista/portadas/03.jpg')}}" alt="" />
						</a>
						<div class="agent-content text-center">
						  <div class="agent-details">
							<h4><a href="{{ route('detalle-revista', 1) }}">Revista Mayo</a></h4>
							<p>N° 71 - 2018</p>
						  </div>
						</div>
					  </div>
					</div>

					<div class="col-lg-4 col-md-4">
					  <div class="agent shadow-hover">
						<a href="{{ route('detalle-revista', 1) }}" class="agent-img text-center">
						  <img src="{{ asset('images/revista/portadas/04.jpg')}}" alt="" />
						</a>
						<div class="agent-content text-center">
						  <div class="agent-details">
							<h4><a href="{{ route('detalle-revista', 1) }}">Revista Mayo</a></h4>
							<p>N° 71 - 2018</p>
						  </div>
						</div>
					  </div>
					</div>
					
					<div class="col-lg-4 col-md-4">
					  <div class="agent shadow-hover">
						<a href="{{ route('detalle-revista', 1) }}" class="agent-img text-center">
						  <img src="{{ asset('images/revista/portadas/05.jpg')}}" alt="" />
						</a>
						<div class="agent-content text-center">
						  <div class="agent-details">
							<h4><a href="{{ route('detalle-revista', 1) }}">Revista Mayo</a></h4>
							<p>N° 71 - 2018</p>
						  </div>
						</div>
					  </div>
					</div>
					
					<div class="col-lg-4 col-md-4">
					  <div class="agent shadow-hover">
						<a href="{{ route('detalle-revista', 1) }}" class="agent-img text-center">
						  <img src="{{ asset('images/revista/portadas/06.jpg')}}" alt="" />
						</a>
						<div class="agent-content text-center">
						  <div class="agent-details">
							<h4><a href="{{ route('detalle-revista', 1) }}">Revista Mayo</a></h4>
							<p>N° 71 - 2018</p>
						  </div>
						</div>
					  </div>
					</div>

					<div class="col-lg-4 col-md-4">
					  <div class="agent shadow-hover">
						<a href="{{ route('detalle-revista', 1) }}" class="agent-img text-center">
						  <img src="{{ asset('images/revista/portadas/01.jpg')}}" alt="" />
						</a>
						<div class="agent-content text-center">
						  <div class="agent-details">
							<h4><a href="{{ route('detalle-revista', 1) }}">Revista Mayo</a></h4>
							<p>N° 71 - 2018</p>
						  </div>
						</div>
					  </div>
					</div>
					
					<div class="col-lg-4 col-md-4">
					  <div class="agent shadow-hover">
						<a href="{{ route('detalle-revista', 1) }}" class="agent-img text-center">
						  <img src="{{ asset('images/revista/portadas/02.jpg')}}" alt="" />
						</a>
						<div class="agent-content text-center">
						  <div class="agent-details">
							<h4><a href="{{ route('detalle-revista', 1) }}">Revista Mayo</a></h4>
							<p>N° 71 - 2018</p>
						  </div>
						</div>
					  </div>
					</div>
					
					<div class="col-lg-4 col-md-4">
					  <div class="agent shadow-hover">
						<a href="{{ route('detalle-revista', 1) }}" class="agent-img text-center">
						  <img src="{{ asset('images/revista/portadas/03.jpg')}}" alt="" />
						</a>
						<div class="agent-content text-center">
						  <div class="agent-details">
							<h4><a href="{{ route('detalle-revista', 1) }}">Revista Mayo</a></h4>
							<p>N° 71 - 2018</p>
						  </div>
						</div>
					  </div>
					</div>
				</div><!-- end row -->
			
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

		});
	</script>
@endsection