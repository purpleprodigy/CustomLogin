<?php
/**
 * Plugin Handler
 *
 * @package     PurpleProdigy\CustomWPLogin;
 * @since       1.0.0
 * @author      Purple Prodigy
 * @link        http://www.purpleprodigy.com
 * @licence     GNU General Public License 2.0+
 */

namespace PurpleProdigy\CustomWPLogin;

add_action( 'login_enqueue_scripts', __NAMESPACE__ . '\custom_wp_login_stylesheet' );
/**
 * Enqueue plugin stylesheet.
 *
 * @since 1.0.0
 *
 * @return void
 */
function custom_wp_login_stylesheet() {
	wp_enqueue_style( 'custom-wp-login-stylesheet', CUSTOM_WP_LOGIN_URL . 'assets/login-styles.css' );
}

add_filter( 'login_headerurl', __NAMESPACE__ . '\change_login_logo_url' );
/**
 * Change URL for Login page logo.
 *
 * @since 1.0.0
 *
 * @return string|void
 */
function change_login_logo_url() {
	return home_url();
}

add_filter( 'login_headertitle', __NAMESPACE__ . '\change_login_logo_url_title' );
/**
 * Change login logo url title.
 * This can be updated per client project.
 *
 * @since 1.0.0
 *
 * @return string
 */
function change_login_logo_url_title() {
	return 'Purple Prodigy'; // change to client name
}

add_filter( 'login_errors', __NAMESPACE__ . '\custom_error_message' );
/**
 * Returns a custom login error message.
 *
 * @since 1.0.0
 *
 * @return string
 */
function custom_error_message() {
	return 'Whoops, you got that wrong. Wanna try again?';
}

add_action( 'login_head', __NAMESPACE__ . '\remove_shake' );
/**
 * Remove the shake on invalid login.
 *
 * @since 1.0.0
 *
 * @return void
 */
function remove_shake() {
	remove_action( 'login_head', 'wp_shake_js', 12 );
}
