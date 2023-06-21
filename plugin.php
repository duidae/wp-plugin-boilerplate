<?php
/**
 * Plugin Name:       Plugin boilerplate
 * Description:       React boilerplate for WordPress plugin development.
 * Requires at least: 6.2
 * Requires PHP:      7.0
 * Version:           1.0.0
 * Author:            duidae
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       plugin boilerplate
 */

add_action( 'admin_menu', function() {
    add_menu_page(
        __( 'Plugin boilerplate', 'jobplace'),
        __( 'Plugin boilerplate', 'jobplace'),
        'publish_pages',
        'plugin-boilerplate',
        function () {
            require_once plugin_dir_path( __FILE__ ) . 'templates/plugin-page.php';
        },
        'dashicons-admin-post',
        '2.1'
    );
} );

add_action( 'admin_enqueue_scripts', function() {
    wp_enqueue_style( 'jobplace-style', plugin_dir_url( __FILE__ ) . 'build/index.css' );
    wp_enqueue_script( 'jobplace-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
} );
