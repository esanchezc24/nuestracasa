let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([ /*estilos Index*/		
		'resources/assets/css/bootstrap.min.css',
		'resources/assets/web/assets/font-awesome-4.7.0/css/font-awesome.min.css',
		'resources/assets/web/assets/jquery-ui-1.12.1/jquery-ui.min.css',
		'resources/assets/web/assets/slick-1.6.0/slick.css',
		'resources/assets/web/assets/chosen-1.6.2/chosen.min.css',
		'resources/assets/css/nouislider.min.css',
		'resources/assets/css/style.css',
		'resources/assets/css/responsive.css',
		'resources/assets/css/fonts_familysquadaone.css',
		/*Camera Slider Plugin*/
		'resources/assets/plugins/camera_slider/css/camera.css',
		/*Owl Carousel */
		'resources/assets/plugins/carousel/css/owl.carousel.min.css',
		'resources/assets/plugins/carousel/css/owl.theme.default.min.css',

		],'public/css/app.css')
    .scripts([ /* scripts Index*/
    	'resources/assets/js/jquery-3.1.1.min.js',
		'resources/assets/web/assets/jquery-ui-1.12.1/jquery-ui.min.js',
		'resources/assets/js/bootstrap.min.js',
		'resources/assets/web/assets/slick-1.6.0/slick.min.js',
		'resources/assets/web/assets/chosen-1.6.2/chosen.jquery.min.js',
		'resources/assets/js/isotope.min.js',
		'resources/assets/js/wNumb.js',
		'resources/assets/js/nouislider.min.js',
		'resources/assets/js/global.js',
		/*Camera Slider Plugin*/
		/*'resources/assets/plugins/camera_slider/js/jquery.mobile.customized.min.js',*/
		'resources/assets/plugins/camera_slider/js/jquery.easing.1.3.js',
		'resources/assets/plugins/camera_slider/js/camera.min.js',
		/*Owl Carousel*/
		'resources/assets/plugins/carousel/js/owl.carousel.min.js',
		], 'public/js/app.js')    
	