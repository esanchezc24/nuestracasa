@extends('web.layout')

@section('styles')
	<link type="text/css" href="{{ asset('assets/revista/css/style.css') }}" rel="stylesheet">
	<style type="text/css">
		#fb5{
            height:610px!important;
        }
        #fb5:-moz-full-screen {
		  	height:950px!important;
		}

		#fb5:-webkit-full-screen {
		  	height:950px!important;k;
		}

		#fb5:fullscreen {
		  	height:950px!important;
		}
	</style>
@endsection

@section('content')
	<section class="module no-padding">
	  	<div class="container">
	  		<div class="row">
	  			<!-- BEGIN FLIPBOOK STRUCTURE -->  
				<div id="fb5-ajax" >      
				    <!-- BEGIN HTML BOOK -->      
				    <div data-current="book5" class="fb5" id="fb5" style="height: 600px">      
				          
				          <!-- PRELOADER -->
				          <div class="fb5-preloader">
				                <div id="wBall_1" class="wBall">
				                      <div class="wInnerBall"></div>
				                </div>
				                <div id="wBall_2" class="wBall">
				                      <div class="wInnerBall"></div>
				                </div>
				                <div id="wBall_3" class="wBall">
				                      <div class="wInnerBall"></div>
				                </div>
				                <div id="wBall_4" class="wBall">
				                      <div class="wInnerBall"></div>
				                </div>
				                <div id="wBall_5" class="wBall">
				                      <div class="wInnerBall"></div>
				                </div>
				          </div>      
				    
				                
				          <!-- BACKGROUND FOR BOOK -->  
				          <div class="fb5-bcg-book"></div>                      
				          
				          <!-- BEGIN CONTAINER BOOK -->
				          <div id="fb5-container-book">

				                <!-- BEGIN deep linking -->
				                <section id="fb5-deeplinking">
				                      <ul>
				                            <li data-address="page1" data-page="1"></li>          
				                            @foreach ($contador as $i => $row[1])
				                                  <li data-address="page{{ $i }}-page{{ $i+1 }}" data-page="{{ $i }}"></li>
				                            @endforeach

				                            @php
				                                  $ultimo = count($galeria);
				                            @endphp

				                            <li data-address="end" data-page="{{ $ultimo }}"></li>                                   
				                      </ul>
				                </section>
				                <!-- END deep linking -->    
				          
				          
				                <!-- BEGIN BOOK -->
				                <div id="fb5-book">

				                      @foreach($galeria as $row)
				                            <!-- BEGIN PAGE -->          
				                            <div data-background-image="{{ asset('images/revista/paginas/'. $row->img)}}" class="">
				                                  
				                                  <!-- begin container page book --> 
				                                  <div class="fb5-cont-page-book">
				                                  
				                                                    <!-- description for page  --> 
				                                                    <div class="fb5-page-book">

				                                              </div> 
				                                              <!-- end description for page  -->           
				                                                    
				                                              <!-- number page and title -->                
				                                              <div class="fb5-meta">
				                                                    <span class="fb5-description"></span>
				                                                    <span class="fb5-num"></span>
				                                              </div>
				                                              <!-- end number page and title  -->  
				                                  </div> 
				                                  <!-- end container page book --> 
				                                        
				                            </div>
				                            <!-- END PAGE -->
				                      @endforeach     
				                
				                </div>
				                <!-- END BOOK -->

				                <!-- arrows -->
				                <a class="fb5-nav-arrow prev"></a>
				                <a class="fb5-nav-arrow next"></a>

				          </div>
				          <!-- END CONTAINER BOOK -->

				          <!-- BEGIN FOOTER -->
				          <div id="fb5-footer">
				    
				                <div class="fb5-bcg-tools"></div>
				          
				                <a id="fb5-logo" target="_blank" href="{{route('index')}}">
				                      <img alt="" src="{{ asset('images/logo.jpg') }}">
				                </a>
				          
				                <div class="fb5-menu" id="fb5-center">
				                      <ul>
				                            <!-- icon_zoom_in -->                              
				                            <li>
				                                  <a title="ZOOM IN" class="fb5-zoom-in"></a>
				                            </li>                               
				                            
				                            <!-- icon_zoom_out -->
				                            
				                            <li>
				                                  <a title="ZOOM OUT " class="fb5-zoom-out"></a>
				                            </li>                                
				                            
				                            <!-- icon_zoom_auto -->
				                            <li>
				                                  <a title="ZOOM AUTO " class="fb5-zoom-auto"></a>
				                            </li>                                
				                            
				                            <!-- icon_zoom_original -->
				                            <li>
				                                  <a title="ZOOM ORIGINAL (SCALE 1:1)" class="fb5-zoom-original"></a>
				                            </li>
				                                              
				                            
				                            <!-- icon_allpages -->
				                            <li>
				                                  <a title="SHOW ALL PAGES " class="fb5-show-all"></a>
				                            </li>
				                                                          
				                            
				                            <!-- icon_home -->
				                            <li>
				                                  <a title="SHOW HOME PAGE " class="fb5-home" href="{{route('index')}}"></a>
				                            </li>
				                                              
				                      </ul>
				                </div>
				          
				                <div class="fb5-menu" id="fb5-right">
				                      <ul> 
				                            <!-- icon page manager -->                 
				                            <li class="fb5-goto">
				                                  <label for="fb5-page-number" id="fb5-label-page-number">Pagina</label>
				                                  <input type="text" id="fb5-page-number">
				                                  <button type="button">Ir</button>
				                            </li>    
				                            
				                                              
				                            <!-- icon fullscreen -->                 
				                            <li>
				                                  <a title="FULL / NORMAL SCREEN" class="fb5-fullscreen"></a>
				                            </li>                                       
				                                        
				                      </ul>
				                </div>
				          </div>
				          <!-- END FOOTER -->    

				          <!-- BEGIN CONTACT FORM -->
				          <div id="fb5-contact" class="fb5-overlay">

				                <form>
				                      <a class="fb5-close">X</a>
				          
				                      <fieldset>
				                      <h3>CONTACT</h3>
				          
				                      <p>
				                            <input type="text" class="req" id="fb5-form-name" value="name...">
				                      </p>
				          
				                      <p>
				                            <input type="text" class="req" id="fb5-form-email" value="email...">
				                      </p>
				          
				                      <p>
				                            <textarea class="req" id="fb5-form-message">message...</textarea>
				                      </p>
				          
				                      <p>
				                            <button type="submit">SEND MESSAGE</button>
				                      </p>
				                      </fieldset>
				                      
				                      <fieldset class="fb5-thanks">
				                      <h1>Thanks for your email</h1>
				                      <p>Lorem ipsum dolor sit amet, vel ad sint fugit, velit nostro pertinax ex qui, no ceteros civibus explicari est. Eleifend electram ea mea, omittam reprehendunt nam at. Putant argumentum cum ex. At soluta principes dissentias nam, elit voluptatum vel ex.</p>    </fieldset>
				                </form>

				          </div>
				          <!-- END CONTACT FORM -->    

				          <!-- BEGIN ALL PAGES -->
				          <div id="fb5-all-pages" class="fb5-overlay">
				                <section class="fb5-container-pages">		          
				                      <div id="fb5-menu-holder">		          
				                            <ul id="fb5-slider">
				                                  @foreach($contador as $i => $row)
				                            
				                                        <li class="{{ $i }}">
				                                              <img alt="" data-src="{{ asset('images/revista/paginas/'. $row->img)}}">   
				                                        </li>
				                                  @endforeach       
				                            </ul>
				                      </div>
				                </section>
				          </div>
				          <!-- END ALL PAGES -->
				    </div>
				    <!-- END HTML BOOK -->
				</div>
				<!-- END FLIPBOOK STRUCTURE --> 
	  		</div>
	  	</div> 
	</section>
	
@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fb5').data('config',
				{
                  "page_width":"550",
                  "page_height":"715",
                  "email_form":"office@somedomain.com",
                  "zoom_double_click":"1",
                  "zoom_step":"0.06",
                  "double_click_enabled":"true",
                  "tooltip_visible":"true",
                  "toolbar_visible":"true",
                  "gotopage_width":"30",
                  "deeplinking_enabled":"true",
                  "rtl":"false",
                  'full_area':'true',
                  'lazy_loading_thumbs':'false',
                  'lazy_loading_pages':'false'
            	});
		});
	</script>
	<script src="{{ asset('assets/revista/js/turn.js') }}"></script>	             
	<script src="{{ asset('assets/revista/js/jquery.fullscreen.js') }}"></script>
	<script src="{{ asset('assets/revista/js/jquery.address-1.6.min.js') }}"></script>
	<script src="{{ asset('assets/revista/js/wait.js') }}"></script>
	<script src="{{ asset('assets/revista/js/onload.js') }}"></script>
	
@endsection