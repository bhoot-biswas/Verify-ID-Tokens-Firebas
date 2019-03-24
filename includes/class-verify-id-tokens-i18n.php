<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://bengal-studio.com/
 * @since      1.0.0
 *
 * @package    Verify_Id_Tokens
 * @subpackage Verify_Id_Tokens/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Verify_Id_Tokens
 * @subpackage Verify_Id_Tokens/includes
 * @author     Mithun Biswas <bhoot.biswas@gmail.com>
 */
class Verify_Id_Tokens_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'verify-id-tokens',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
