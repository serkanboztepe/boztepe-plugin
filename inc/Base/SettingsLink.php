<?php

/**
 * @package  BoztepePlugin
 */

namespace Inc\Base;

class SettingsLink
{
    private string $plugin;

    function __construct() {
        $this->plugin = PLUGIN_BASENAME;
    }

    public function register(): void {
        add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
    }

    public function settings_link( $actions ): array {
        $actions[] = '<a href="admin.php?page=boztepe_plugin">Settings</a>';

        return $actions;
    }
}