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

		],'public/css/app.css')
    .scripts([ /* scripts Index*/
    	'resources/js/jquery-3.1.1.min.js',
		'resources/assets/web/assets/jquery-ui-1.12.1/jquery-ui.min.js',
		'resources/js/bootstrap.min.js',
		'resources/assets/web/assets/slick-1.6.0/slick.min.js',
		'resources/assets/web/assets/chosen-1.6.2/chosen.jquery.min.js',
		'resources/js/isotope.min.js',
		'resources/js/wNumb.js',
		'resources/js/nouislider.min.js',
		'resources/js/global.js',
		], 'public/js/app.js')    
	