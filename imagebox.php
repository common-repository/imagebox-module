<?php
/**
 * Plugin Name: Beaver Builder Imagebox 
 * Plugin URI: http://flickdevs.com/beaver-builder/
 * Description: Custom beaver builder module to display image Box.
 * Version: 1.3
 * Author: Flickdevs, Aezaz Shaikh
 * Author URI: http://flickdevs.com
 *
 * Text Domain: fd-bbm
 */
 
define( 'FD_BB_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'FD_BB_MODULES_URL', plugins_url( '/', __FILE__ ) );
define( 'FD_BBM', 'fd-bbm' );

/**
 * Include Custom modules file
 */
function fd_bb_load_module() {
    if ( class_exists( 'FLBuilder' ) ) {
        
		require_once 'imagebox/imagebox.php';
    }
}
add_action( 'init', 'fd_bb_load_module' );


/**
 * Custom field styles
 */
function fd_bb_custom_field_assets() {
    if ( class_exists( 'FLBuilderModel' ) && FLBuilderModel::is_builder_active() ) {
        wp_enqueue_style( 'fd-bb-custom-fields', FD_BB_MODULES_URL . '/assets/css/fields.css', array(),'');
    }
}
add_action( 'wp_enqueue_scripts', 'fd_bb_custom_field_assets' );

/**
 * Admin notices for activate  beaver builder plugin
 *
 */
 
function fd_bb_admin_notices(){
		if ( ! is_admin() ) {
			return;
		}
		else if ( ! is_user_logged_in() ) {
			return;
		}
		else if ( ! current_user_can( 'update_core' ) ) {
			return;
		}

		if ( !is_plugin_active( 'bb-plugin/fl-builder.php' ) ) {
			if ( !is_plugin_active( 'beaver-builder-lite-version/fl-builder.php' ) ) {
				echo sprintf('<div class="notice notice-error"><p>%s</p></div>', __('Please install and activate <a href="https://wordpress.org/plugins/beaver-builder-lite-version/" target="_blank">Beaver Builder Lite</a> or <a href="https://www.wpbeaverbuilder.com/pricing/" target="_blank">Beaver Builder Pro</a>.'));
			}
		}
	}
add_action( 'admin_notices', 'fd_bb_admin_notices' );
	