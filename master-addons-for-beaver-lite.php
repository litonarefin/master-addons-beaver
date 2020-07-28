<?php
/**
 * Plugin Name: Master Addons for Beaver Builder
 * Description: Master Addons is easy and must have Addons Pack ffor Beaver Builder. It has Professional, Clean, Modern, Hand crafted designed Addons blocks.
 * Plugin URI: https://master-addons.com/beaver
 * Author: Jewel Theme
 * Version: 1.0.0
 * Author URI: https://master-addons.com/beaver
 * Text Domain: jltma-bb
 * Domain Path: /languages
 */

// No, Direct access Sir !!!
if ( !defined( 'ABSPATH' ) ) exit;


$plugin_data = get_file_data(__FILE__,  array('Version'=> 'Version','Plugin Name'=>'Plugin Name'),false);
$plugin_name = $plugin_data['Plugin Name'];
$plugin_version = $plugin_data['Version'];

// Define Constants
define('JLTMA_BB', $plugin_name);
define('JLTMA_BB_VERSION', $plugin_version);
define('JLTMA_BB_URL', untrailingslashit( plugin_dir_url( __FILE__ ) ));
define('JLTMA_BB_DIR', untrailingslashit( plugin_dir_path( __FILE__ ) ));
define('JLTMA_BB_TD', load_plugin_textdomain('jltma-bb'));
define('JLTMA_BB_ADDON', plugin_dir_path( __FILE__ ) . '/addon/' );
define('JLTMA_BB_PRO_URL', 'https://master-addons.com/beaver');


// Instantiate Master Addons Class
if ( !class_exists( '\\MasterAddonsBB\\JLTMA_BB_Addons' ) ) {
    require_once dirname( __FILE__ ) . '/class-master-beaver-addons.php';
}