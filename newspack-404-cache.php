<?php
/**
 * Plugin Name:       Newspack 404 Cache
 * Description:       Removes headers which prevent caching 404 responses.
 * Version:           0.0.1
 * Author:            Automattic
 * Author URI:        https://automattic.com
 * Text Domain:       newspack-404-cache
 * Domain Path:       /languages
 */

add_filter(
        'nocache_headers',
        function( $headers ) {
                if ( is_404() ) {
                        unset( $headers['Cache-Control'] );
                        unset( $headers['Expires'] );
                }
                return $headers;
        }
);

