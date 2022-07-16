<?php

/**
 * @package  BoztepePlugin
 */

namespace Inc;

use Inc\CPT\Book;
use Inc\Base\Enqueue;
use Inc\Base\SettingsLink;
use Inc\Pages\Admin;

final class Init
{
    public static function get_services(): array {
        return [
            Admin::class,
            Enqueue::class,
            SettingsLink::class,
            Book::class
        ];
    }

    public static function register_services(): void {
        foreach ( self::get_services() as $class ) {
            $service = self::instantiate( $class );
            if ( method_exists( $service, 'register' ) ) {
                $service->register();
            }
        }
    }

    private static function instantiate( $class ) {
        return new $class();
    }
}