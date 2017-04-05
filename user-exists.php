<?php
/**
 Plugin name: Roy Exists API Endpoint
 Version: 0.1.0
 */
add_action( 'rest_api_init', function(){
	register_rest_route( 'hi-roy', '/roy', [
		'callback' => function( $request ){
			return is_numeric( email_exists( 'roy@roysivan.com' ) );
		}
	]);
});
