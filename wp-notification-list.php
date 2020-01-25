<?php
/**
 * Notification List
 *
 * @package     WPNotificationList
 * @author      Tremi Dkhar
 * @copyright   Copyright (c) Tremi Dkhar, 2020
 * @license     GPL-2.0+
 *
 * Plugin Name: WP Notification List
 * Plugin URI:  https://github.com/TremiDkhar/notification-list
 * Description: Display list of notification or information to the public.
 * Version:     0.1.0
 * Author:      Tremi Dkhar
 * Author URI:  https://github.com/TremiDkhar
 * License:     GPL-2.0+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wpnotificationlist
 */

/**
 * Main Notification List Instance
 *
 * @since 0.1.0
 * @return object Notification_list
 */
final class WPNotificationList {

	/**
	 * Holds instanfce of Notification_List
	 *
	 * @var object Notification_List
	 */
	public static $instance;

	/**
	 * Main Notification_List instance
	 *
	 * Insure that only one instance of Notification_List exists in memory at any one time.
	 * Also prevent needing to define globals all over the place.
	 *
	 * @since 0.1.0
	 * @return object Notification_List
	 */
	public static function instance() {

		if ( ! isset( self::$instance ) && ! ( self::$instance instanceof Notification_List ) ) {

			self::$instance = new self();
			self::$instance->constants();

		}

		return self::$instance;

	}

	/**
	 * Initialized constants required by the plugins.
	 *
	 * @since 0.1.0
	 * @return void
	 */
	public function constants() {

		// Plugin Version.
		if ( ! defined( 'WPNOTIFICATIONLIST_VERSION' ) ) {
			define( 'WPNOTIFICATIONLIST_VERSION', '0.1.0' );
		}

		// Plugin URI.
		if ( ! defined( 'WPNOTIFICATIONLIST_URI' ) ) {
			define( 'WPNOTIFICATIONLIST_URI', plugin_dir_url( __FILE__ ) );
		}

		// Plugin Path.
		if ( ! defined( 'WPNOTIFICATIONLIST_PATH' ) ) {
			define( 'WPNOTIFICATIONLIST_PATH', plugin_dir_path( __FILE__ ) );
		}

		// Plugin Apps FIle.
		if ( ! defined( 'WPNOTIFICATIONLIST_PLUGIN_FILE' ) ) {
			define( 'WPNOTIFICATIONLIST_PLUGIN_FILE', __FILE__ );
		}
	}
}

/**
 * Get the object from the main class and return the instance
 *
 * @since 0.1.0
 * @return object
 */
function WPNotificationList() {
	return WPNotificationList::instance();
}

// Get the notification list running.
WPNotificationList();