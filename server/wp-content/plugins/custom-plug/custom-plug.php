<?php
/*
 * @wordpress-plugin
 * Plugin Name:       Custom Plugin - remove p tag
 * Description:       Add custom code to remove p tag from response data
 * Author:            Kaddyp
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      5.6
 */

remove_filter('the_excerpt', 'wpautop');