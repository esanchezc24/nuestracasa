@extends('web.layout')

@section('styles')
	<style type="text/css">
		.property-content{	
			padding: 3%;			
		}
		.property-title{
			border-bottom: 0;
			margin-bottom: 0;
			padding-bottom: 0;
			color: white!important;
		}
		.property-tag {
		    position: absolute;
		    padding: 8px 20px;
		    font-size: 17px;
		    z-index: 25;
		}
		.property-img {
		    padding: 80px 25px 25px 25px;
		    min-height: 225px;
		    max-height: 225px;
		}
		.property-color-bar{
			left: 0;
		}
		.fa{
			color: white!important;
			margin-right: 5px;
		}
	</style>
@endsection

@section('content')
	<section class="subheader">
	  <div class="container">
	    <h1>Listado de Bancos</h1>
	    <div class="breadcrumb right"><a href="{{ route('index') }} ">Inicio</a> <i class="fa fa-angle-right"></i> Bancos</div>
	    <div class="clear"></div>
	  </div>
	</section>

	<section class="module white-background">
	  <div class="container">
	    
	    	<!--BCP-->
	        <div class="col-lg-6 col-md-6">
	          <div class="property shadow-hover">
	            <a href="{{ route('bcp')  }}" class="property-img text-center athens-gray-background">
	              <div class="property-label property-label-after blue-background">
						<span><i class="fa fa-bank"></i>Banco</span> 	
					</div>
	              <div class="property-tag button status blue-button">Visitar</div>	              
	              <div class="property-color-bar big-stone-background"></div>
	              <img class="banco-img" src="{{ asset('images/bancos/logos/bcp.jpg') }}" alt="" />
	            </a>
	            <div class="property-content blue-background">
	              	<div class="property-title ">
              			<a href="{{ route('bcp')  }}">Banco de Crédito del Perú</a>
              			<p><i class="fa fa-user"></i> Sandra Morales</p> 
              			<p><i class="fa fa-phone"></i> 968 745 440</p> 
              			<p><i class="fa fa-envelope-o"></i> bcp@nuestracasa.pe</p> 
              		</div>
	            </div>
	          </div>
	        </div>
	        <!--Fin BCP-->
			<!--Scotiabank-->
	        <div class="col-lg-6 col-md-6">
	          <div class="property shadow-hover">
	            <a href="{{ route('scotia')  }}" class="property-img text-center athens-gray-background">
	              <div class="property-label property-label-after blue-background">
						<span><i class="fa fa-bank"></i>Banco</span> 	
					</div>
	              <div class="property-tag button status blue-button">Visitar</div>	              
	              <div class="property-color-bar big-stone-background"></div>
	              <img class="banco-img" src="{{ asset('images/bancos/logos/scotia.jpg') }}" alt="" />
	            </a>
	            <div class="property-content blue-background">
	              	<div class="property-title ">
              			<a href="{{ route('scotia')  }}">Scotiabank</a>
              			<p><i class="fa fa-user"></i> Margarita Nole</p> 
              			<p><i class="fa fa-phone"></i> 980 586 392</p> 
              			<p><i class="fa fa-envelope-o"></i> scotiabank@nuestracasa.pe</p> 
              		</div>
	            </div>
	          </div>
	        </div>
	        <!--Fin Scotiabank-->
			<!--Interbank-->
	        <div class="col-lg-6 col-md-6">
	          <div class="property shadow-hover">
	            <a href="{{ route('interbank')  }}" class="property-img text-center athens-gray-background">
	              <div class="property-label property-label-after blue-background">
						<span><i class="fa fa-bank"></i>Banco</span> 	
					</div>
	              <div class="property-tag button status blue-button">Visitar</div>	              
	              <div class="property-color-bar big-stone-background"></div>
	              <img class="banco-img" src="{{ asset('images/bancos/logos/interbank.jpg') }}" alt="" />
	            </a>
	            <div class="property-content blue-background">
	              	<div class="property-title ">
              			<a href="{{ route('interbank')  }}">Interbank</a>
              			<p><i class="fa fa-user"></i> Ursula Chavez</p> 
              			<p><i class="fa fa-phone"></i> 48 27 35 Anexo 66 16 02</p> 
              			<p><i class="fa fa-envelope-o"></i> interbank@nuestracasa.pe</p> 
              		</div>
	            </div>
	          </div>
	        </div>
	        <!--Fin Interbank-->
			<!--GNB-->
	        <div class="col-lg-6 col-md-6">
	          <div class="property shadow-hover">
	            <a href="{{ route('gnb')  }}" class="property-img text-center athens-gray-background">
	              <div class="property-label property-label-after blue-background">
						<span><i class="fa fa-bank"></i>Banco</span> 	
					</div>
	              <div class="property-tag button status blue-button">Visitar</div>	              
	              <div class="property-color-bar big-stone-background"></div>
	              <img class="banco-img" src="{{ asset('images/bancos/logos/gnb.jpg') }}" alt="" />
	            </a>
	            <div class="property-content blue-background">
	              	<div class="property-title ">
              			<a href="{{ route('gnb')  }}">Banco de Crédito del Perú</a>
              			<p><i class="fa fa-user"></i> Fernando Perauna</p> 
              			<p><i class="fa fa-phone"></i> 988 894 475</p> 
              			<p><i class="fa fa-envelope-o"></i> gnb@nuestracasa.pe</p> 
              		</div>
	            </div>
	          </div>
	        </div>
	        <!--Fin GNB-->
			<!--BBVA-->
	        <div class="col-lg-6 col-md-6">
	          <div class="property shadow-hover">
	            <a href="{{ route('bbva')  }}" class="property-img text-center athens-gray-background">
	              <div class="property-label property-label-after blue-background">
						<span><i class="fa fa-bank"></i>Banco</span> 	
					</div>
	              <div class="property-tag button status blue-button">Visitar</div>	              
	              <div class="property-color-bar big-stone-background"></div>
	              <img class="banco-img" src="{{ asset('images/bancos/logos/bbva.jpg') }}" alt="" />
	            </a>
	            <div class="property-content blue-background">
	              	<div class="property-title ">
              			<a href="{{ route('bbva')  }}">Banco de Crédito del Perú</a>
              			<p><i class="fa fa-user"></i> Sandra Morales</p> 
              			<p><i class="fa fa-phone"></i> 968 745 440</p> 
              			<p><i class="fa fa-envelope-o"></i> bcp@nuestracasa.pe</p> 
              		</div>
	            </div>
	          </div>
	        </div>
	        <!--Fin BBVA-->
			<!--Banco de la Nacion-->
	        <div class="col-lg-6 col-md-6">
	          <div class="property shadow-hover">
	            <a href="{{ route('bn')  }}" class="property-img text-center athens-gray-background">
	              <div class="property-label property-label-after blue-background">
						<span><i class="fa fa-bank"></i>Banco</span> 	
					</div>
	              <div class="property-tag button status blue-button">Visitar</div>	              
	              <div class="property-color-bar big-stone-background"></div>
	              <img class="banco-img" src="{{ asset('images/bancos/logos/bn.png') }}" alt="" />
	            </a>
	            <div class="property-content blue-background">
	              	<div class="property-title ">
              			<a href="{{ route('bn')  }}">Banco de Crédito del Perú</a>
              			<p><i class="fa fa-user"></i> Sandra Morales</p> 
              			<p><i class="fa fa-phone"></i> 968 745 440</p> 
              			<p><i class="fa fa-envelope-o"></i> bcp@nuestracasa.pe</p> 
              		</div>
	            </div>
	          </div>
	        </div>
	        <!--Fin Banco de la Nacion-->
			<!--Banbif-->
	        <div class="col-lg-6 col-md-6">
	          <div class="property shadow-hover">
	            <a href="{{ route('banbif')  }}" class="property-img text-center athens-gray-background">
	              <div class="property-label property-label-after blue-background">
						<span><i class="fa fa-bank"></i>Banco</span> 	
					</div>
	              <div class="property-tag button status blue-button">Visitar</div>	              
	              <div class="property-color-bar big-stone-background"></div>
	              <img class="banco-img" src="{{ asset('images/bancos/logos/banbif.png') }}" alt="" />
	            </a>
	            <div class="property-content blue-background">
	              	<div class="property-title ">
              			<a href="{{ route('banbif')  }}">Banco de Crédito del Perú</a>
              			<p><i class="fa fa-user"></i> Sandra Morales</p> 
              			<p><i class="fa fa-phone"></i> 968 745 440</p> 
              			<p><i class="fa fa-envelope-o"></i> bcp@nuestracasa.pe</p> 
              		</div>
	            </div>
	          </div>
	        </div>
	        <!--Fin Banbif-->
			<!--Mi Banco-->
	        <div class="col-lg-6 col-md-6">
	          <div class="property shadow-hover">
	            <a href="{{ route('mibanco')  }}" class="property-img text-center athens-gray-background">
	              <div class="property-label property-label-after blue-background">
						<span><i class="fa fa-bank"></i>Banco</span> 	
					</div>
	              <div class="property-tag button status blue-button">Visitar</div>	              
	              <div class="property-color-bar big-stone-background"></div>
	              <img class="banco-img" src="{{ asset('images/bancos/logos/mibanco.png') }}" alt="" />
	            </a>
	            <div class="property-content blue-background">
	              	<div class="property-title ">
              			<a href="{{ route('mibanco')  }}">Banco de Crédito del Perú</a>
              			<p><i class="fa fa-user"></i> Sandra Morales</p> 
              			<p><i class="fa fa-phone"></i> 968 745 440</p> 
              			<p><i class="fa fa-envelope-o"></i> bcp@nuestracasa.pe</p> 
              		</div>
	            </div>
	          </div>
	        </div>
	        <!--Fin Mi Banco-->

	  </div><!-- end container -->
	</section>
	
@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {

		});
	</script>
@endsection