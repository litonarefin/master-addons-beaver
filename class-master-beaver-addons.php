<?php
namespace MasterAddonsBB;

if (!defined('ABSPATH')) { exit; } // No, Direct access Sir !!!

if( !class_exists('JLTMA_BB_Addons') ){
	final class JLTMA_BB_Addons {

		private static $instance = null;
		
		public static function get_instance() {
			if ( ! self::$instance ) {
				self::$instance = new self;
				self::$instance -> ma_el_init();
			}
			return self::$instance;
		}

	}

	JLTMA_BB_Addons::get_instance();
}