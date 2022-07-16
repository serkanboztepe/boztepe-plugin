<?php

/**
 * @package  BoztepePlugin
 */

/*
Plugin Name: Boztepe Plugin
Plugin URI: https://s-coder.com.tr
Description: Nesne Tabanlı Wordpress Eklentisi
Version: 0.0.1
Author: Serkan Boztepe
Author URI: https://s-coder.com.tr
Text Domain: boztepe-plugin
*/

use Inc\Base\Activate;
use Inc\Base\Deactivate;
use Inc\Base\Uninstall;
use Inc\Init;

defined( 'ABSPATH' ) or die( 'Burada ne yapıyorsun? Bu bir eklenti!' );

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

if ( class_exists( 'Inc\\Init' ) ) {
    Init::register_services();
}

register_activation_hook( __FILE__, array( Activate::class, 'activate' ) );
register_deactivation_hook( __FILE__, array( Deactivate::class, 'deactivate' ) );
register_uninstall_hook( __FILE__, array( Uninstall::class, 'uninstall' ) );
