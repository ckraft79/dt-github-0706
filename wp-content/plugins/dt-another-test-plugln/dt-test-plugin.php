<?php
 /**
 * @package DT_Another_Test_Plugin
 * @version 1.0
 */
/*
 
Plugin Name: DT Another Test Plugin
 
Plugin URI: https://developertown.com
 
Description: Plugin for general testing.
 
Version: 1.0
 
Author: Chris Kraft
 
Author URI: https://kriggity.com/
 
License: GPLv2 or later
 
*/
function hello_developertown () {
    return "<div>Hello Developertown!</div>";
};
add_shortcode('hello-dt','hello_developertown');