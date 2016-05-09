<?php
/**
 * Plugin Name: WP-API Basic Authentication
 * Description: WP-API Basic Authentication handler for the JSON API, used for development and debugging purposes
 * Author: WordPress Richard Miles
 * Author URI: https://github.com/richlloydmiles/wp-api-basic-auth
 * Version: 0.1
 * Plugin URI: https://github.com/richlloydmiles/wp-api-basic-auth
 */

function json_basic_auth_handler( $user ) {
	return 1;
}
