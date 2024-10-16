<?php
/**
 * Class for the Redux importer.
 *
 * @see https://wordpress.org/plugins/redux-framework/
 *
 * @package Merlin WP
 */

/*
Importing NTRevulution.
*/

/**
 * Merlin NTRevolution importer.
 */
class Merlin_Ntrevolution_Importer {
	/**
	 * Import RevSlider data from a JSON file, generated by the RevSlider plugin.
	 *
	 * @param array $import_data Array of arrays. Child array contains 'option_name' and 'file_path'.
	 *
	 * @return boolean
	 */
	public static function import( $import_data ) {
		// Redux plugin is not active!
		if ( ! class_exists( 'RevSlider' ) ) {
			return false;
		}

		$slider = new RevSlider();

		foreach ( $import_data as $rev_item ) {

			$slider->importSliderFromPost( true, true, $rev_item['file_path'] );

		}

		return true;
	}
}
