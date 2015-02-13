<?php

class iDK_Dashboard_Shortcodes {


	function __construct() {

		add_shortcode( 'idk-dashboard', array( $this, 'idk_dashboard' ) );

	}

	function idk_dashboard( $atts ) {

		if ( is_array( $atts ) ) extract( $atts );

		dynamic_sidebar('idk-dashboard');

	}
}

new iDK_Dashboard_Shortcodes();