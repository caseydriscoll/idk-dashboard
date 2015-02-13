<?php

/**
 * Plugin Name: iDK Dashboard
 * Plugin URI:
 * Description: The central dashboard for the iDK
 * Author: Casey Patrick Driscoll
 * Author URI: http://caseypatrickdriscoll.com
 */

include 'idk-dashboard-shortcodes.php';

class iDK_Dashboard {


	function __construct() {

		add_action( 'init', array( $this, 'register_idk_sidebar' ) );

	}


	function register_idk_sidebar() {
		register_sidebar( array(
			'id' => 'idk-dashboard',
			'name' => 'iDK Dashboard',
			'description' => __( 'Displayed in the iDK Dashboard.', 'idk' ),
		) );
	}

}

new iDK_Dashboard();