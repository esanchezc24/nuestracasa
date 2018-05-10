<header class="header-classic">

  <div class="top-bar">
    <div class="container">
        <div class="top-bar-left left">
          <a href="mailto:nuestracasasac@hotmail.com" class="top-bar-item left"><i class="fa fa-envelope icon"></i> nuestracasasac@hotmail.com</a>
          <div class="top-bar-item left"><i class="fa fa-phone icon"></i> (+51) 978 434 390</div>
          <div class="clear"></div>
        </div>
        <div class="top-bar-right right">
          <a href="login.html" class="top-bar-item"><i class="fa fa-sign-in icon"></i>Ingresar</a>
          <a href="register.html" class="top-bar-item"><i class="fa fa-user-plus icon"></i>Registrar</a>
          <ul class="top-bar-item right social-icons">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul>
          <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
  </div>

	<div class="header-background">
		<div class="container">

		    <!-- logo -->
		    <div class="navbar-header">
		        <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.jpg')}}" alt="NuestraCasa"/></a>
		    </div>

		    <!-- nav toggle -->
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>

		    <!-- main menu -->
		    <div class="navbar-collapse collapse">
		      <div class="main-menu-wrap">
		        <div class="member-actions right">
		          <a href="#" class="button small alt button-icon"><i class="fa fa-plus"></i>Publicar Proyecto</a>
		        </div>
		        <ul class="nav navbar-nav right">
		          <li class="{{ Request::is('index') ? 'current-menu-item' : '' }}">
		            <a href="{{ route('index')}}">Inicio</a>
		          </li>
		          <li class="menu-item-has-children {{ Request::is('proyectos') ? 'current-menu-item' : '' }}">
		            <a href="#">Proyectos</a>
		            <ul class="sub-menu">
		            	<li><a href="{{ route('proyectos')}}">Proyectos</a></li>
		              <li><a href="#">Proyectos 360°</a></li>
		            </ul>
		          </li>
		          <li class="{{ Request::is('alquiler') ? 'current-menu-item' : '' }}">
		            <a href="{{ route('alquiler')}}">Alquiler</a>
		          </li>
		          <li class="{{ Request::is('venta') ? 'current-menu-item' : '' }}">
		            <a href="{{ route('venta')}}">Venta</a>
		          </li>
		          <li class="menu-item-has-children">
		            <a href="#">Directorio</a>
		            <ul class="sub-menu">
		              <li><a href="{{ route('constructoras')}}">Constructoras</a></li>
		              <li><a href="{{ route('inmobiliarias')}}">Inmobiliarias</a></li>
		              <li><a href="{{ route('proveedores')}}">Proveedores</a></li>
		            </ul>
		          </li>
		          <li class="">
		            <a href="#">Noticias</a>
		          </li>
		        </ul>
		        <div class="clear"></div>
		      </div>
		    </div>

		  </div><!-- end container -->
	</div>

  
</header>