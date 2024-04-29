<?php
namespace Bricks;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class License {
	public static $license_key     = '';
	public static $license_status  = '';
	public static $remote_base_url = 'https://bricksbuilder.io/api/commerce/';

	public function __construct() {
		self::$license_key = '********************************';

		add_filter( 'pre_set_site_transient_update_themes', [ $this, 'check_for_update' ] );

		add_action( 'wp_ajax_bricks_activate_license', [ $this, 'activate_license' ] );
		add_action( 'wp_ajax_bricks_deactivate_license', [ $this, 'deactivate_license' ] );

		add_action( 'admin_notices', [ $this, 'admin_notices_license_activation' ] );
		add_action( 'admin_notices', [ $this, 'admin_notices_license_mismatch' ] );
	}

	/**
	 * Check remotely if newer version of Bricks is available
	 *
	 * @param string $transient Transient for WordPress theme updates.
	 */
	public static function check_for_update( $transient ) {
		return;
	}

	/**
	 * Check license status when loading builder
	 *
	 * @see template_redirect
	 */
	public static function license_is_valid() {
		return true;
	}

	/**
	 * Get license status (stored locally in transient: bricks_license_status)
	 *
	 * If transient has expired (after 168h) then get it remotely from Bricks server.
	 *
	 * @return array
	 */
	public static function get_license_status() {
		return 'active';
	}

	/**
	 * Save license status in transient (expires after 168 hours)
	 */
	public static function set_license_status( $license_status ) {
		return;
	}

	/**
	 * Activate license under "Bricks > License" (AJAX call on "Activate license" click)
	 *
	 * Also runs via PHP in 'get_license_status' to avoid having to deactivate & reactivate license (when cloning staging site, etc.)
	 *
	 * @return array
	 */
	public static function activate_license() {
		return [];
	}

	/**
	 * Deactivate license
	 *
	 * @return void
	 *
	 * @since 1.0
	 */
	public static function deactivate_license() {
		return;
	}

	/**
	 * Admin notice to activate license
	 *
	 * @return null/string
	 */
	public static function admin_notices_license_activation() {
		return;
	}

	/**
	 * Admin notice to activate license
	 *
	 * @return null/string
	 */
	public static function admin_notices_license_mismatch() {
		return;
	}

}
