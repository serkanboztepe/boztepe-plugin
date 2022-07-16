<?php

/**
 * @package  BoztepePlugin
 */

namespace Inc\Base;

class Enqueue
{
    public function register(): void {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue' ) );
    }

    public function enqueue(): void {
        wp_enqueue_style( 'boztepe-plugin-assets' , PLUGIN_URL . 'assets/custom.css' );
        wp_enqueue_script( 'boztepe-plugin-assets' , PLUGIN_URL . 'assets/custom.js' );
    }
}