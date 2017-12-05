<?php
/**
 * Custom WP Login plugin
 *
 * @package     PurpleProdigy\CustomWPLogin;
 * @author      Purple Prodigy
 * @licence     GPL-2.0+
 * @link        https://purpleprodigy.com
 */
/*
 * @wordpress-plugin
 * Plugin Name:     Custom WP Login
 * Plugin URI:      https://github.com/purpleprodigy/CustomWPLogin
 * Description:     Custom WP Login is a plugin for Purple Prodigy client websites.
 * Version:         1.0.0
 * Author:          Purple Prodigy
 * Author URI:      https://purpleprodigy.com
 * Text Domain:     custom-wp-login
 * Requires WP:     4.7
 * Requires PHP:    5.6
 */
/*
	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

namespace PurpleProdigy\CustomWPLogin;

if ( ! defined( 'ABSPATH' ) ) {
	die( "Nothing to see here." );
}

define( 'CUSTOM_WP_LOGIN_PLUGIN', __FILE__ );
define( 'CUSTOM_WP_LOGIN_DIR', plugin_dir_path( __FILE__ ) );
$plugin_url = plugin_dir_url( __FILE__ );
if ( is_ssl() ) {
	$plugin_url = str_replace( 'http://', 'https://', $plugin_url );
}
define( 'CUSTOM_WP_LOGIN_URL', $plugin_url );
define( 'CUSTOM_WP_LOGIN_DOMAIN', 'custom_wp_login' );

include( __DIR__ . '/src/plugin.php' );
