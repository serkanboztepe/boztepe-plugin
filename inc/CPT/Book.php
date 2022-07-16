<?php

/**
 * @package  BoztepePlugin
 */

namespace Inc\CPT;

class Book
{
    public function register(): void {
        add_action( 'init', array( $this, 'book' ) );
    }

    public function book() {
        register_post_type( 'book', [
                'post_type' => 'post',
                'public' => true,
                'label' => 'Books',
                'supports' => [ 'title', 'editor', 'thumbnail', 'custom-fields' ]
            ]
        );
    }
}