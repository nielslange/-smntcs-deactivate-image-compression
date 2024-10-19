<?php
/**
 * Plugin Name:           SMNTCS Deactivate Image Compression
 * Plugin URI:            https://github.com/nielslange/smntcs-deactivate-image-compression
 * Description:           Deactivate the WordPress default image compression.
 * Author:                Niels Lange
 * Author URI:            https://nielslange.de
 * Text Domain:           smntcs-deactivate-image-compression
 * Version:               1.9
 * Requires PHP:          5.6
 * Requires at least:     2.5
 * License:               GPL v2 or later
 * License URI:           https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package SMNTCS_Deactivate_Image_Compression
 */

defined( 'ABSPATH' ) || exit;

/**
 * Deactivate default image compression.
 *
 * @return int The image compression percentage.
 */
add_filter(
	'jpeg_quality',
	function() {
		return 100;
	}
);
