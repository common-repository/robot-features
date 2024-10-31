<?php
/**
 * Plugin Name: Robot Features
 * Plugin URI:  http://webzakt.com/themes/robot-multipurpose-wordpress-theme/
 * Description: Robot Version plugin with Shortcodes.
 * Version: 1.0.0
 * Author: Webzakt
 * Author URI: http://www.webzakt.com
 */

class Robot_Features {

    function __construct()
    {
    	define( 'ROBOT_VERSION', '0.9' );

    	// Plugin folder path
    	if ( ! defined( 'ROBOT_PLUGIN_DIR' ) ) {
    		define( 'ROBOT_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
    	}

    	// Plugin folder URL
    	if ( ! defined( 'ROBOT_PLUGIN_URL' ) ) {
    		define( 'ROBOT_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
    	}
		
		function robot_features_filter_plugin_awesome_extensions($locations) {
			$locations[ dirname(__FILE__) . '/extensions' ]
			=
			plugin_dir_url( __FILE__ ) . 'extensions';
		
			return $locations;
		}
		add_filter('fw_extensions_locations', 'robot_features_filter_plugin_awesome_extensions');
	}

}
new Robot_Features();