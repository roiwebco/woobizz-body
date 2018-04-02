<?php
/**
* Plugin Name: Woobizz Body
* Plugin URI: https://woobizz.com
* Description: Woocommerce BodyCustomiser
* Author: Woobizz
* Author URI: https://woobizz.com
* Version: 1.0.3
* Text Domain: woobizz-body
* Domain Path: /lang/
*/
//Prevent direct acces
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
//Load translation
add_action( 'plugins_loaded', 'woobizz_body_load_textdomain' );
function woobizz_body_load_textdomain() {
  load_plugin_textdomain( 'woobizz-body', false, basename( dirname( __FILE__ ) ) . '/lang' ); 
}
// The prefix Name
define('WOOBIZZBODY', 'woobizzbody');
// Include the Whitelabel plugin
include('admin/body-admin-page.php' );
// Include the $options array 
include( 'admin/body-options.php' );
// Include all sections php files
foreach ( glob( plugin_dir_path( __FILE__ ) . "/admin/sections/*.php" ) as $file ) {
    include_once $file;
}
// ADD OPTIONS AND SUBMENU
$options_page = new WoobizzBodyOptions( 'WooBizz Body', 'woobizz-body', WOOBIZZBODY, 'woobizz', null, 'read', null, true, false, true, $options );