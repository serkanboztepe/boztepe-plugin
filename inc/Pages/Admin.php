<?php

/**
 * @package  BoztepePlugin
 */

namespace Inc\Pages;

class Admin
{
    public function register(): void {
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
    }

    function add_admin_pages(): void {
        add_menu_page('Boztepe Plugin Page', 'Boztepe', 'manage_options', 'boztepe_plugin', array( $this, 'index' ), 'dashicons-store', 30);
    }

    function index(): void {
        require_once PLUGIN_PATH . '/templates/admin.php';
    }
}