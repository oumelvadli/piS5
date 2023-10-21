<?php
/*
Plugin Name: monplugin
 * Plugin Name:       My Basics Plugin

 * Description:       test de plugin.
 * Version:           6.2.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            oumelvadhli
 * Author URI:        https://monplogun.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */

// function hello_word(){
//     echo ("hello world");
// }


function test_plugin(){
    echo 'hiiii oumelvadhli';
}
add_action('wp_header','test_plugin');