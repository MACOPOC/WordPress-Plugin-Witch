<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://macopoc.com
 * @since      1.0.0
 *
 * @package    Witch-MACOPOC
 * @subpackage Witch-MACOPOC/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Witch-MACOPOC
 * @subpackage Witch-MACOPOC/includes
 * @author     Your Name <email@example.com>
 */
class Witch-MACOPOC_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'witch-macopoc',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
