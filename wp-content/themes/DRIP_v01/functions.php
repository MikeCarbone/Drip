<?php

// Theme will only work for WordPress 4.9.6 or later.
if (version_compare($GLOBALS['wp_version'], '4.9.6', '<')) {
    die('This theme only works in WordPress 4.9.6 or later. ');
}

/**
 * This function will register the navigation menus.
 * You can call display the menu by calling wp_nav_menu() in your templates
 *
 * @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
 * @method register_nav_menus
 */
function register_menus()
{
    register_nav_menus([
        'main'   => __('Main Navigation')
    ]);
}

add_action('init', 'register_menus');

function load_theme_assets(){
	//name, where the file is located, 
	wp_enqueue_style('screen', get_template_directory_uri() . '/dist/css/screen.css');
	wp_enqueue_style('normalize', get_template_directory_uri() . '/dist/css/normalize.css');

	wp_enqueue_script('fancy', get_template_directory_uri() . '/dist/js/fancy.js');
}
add_action('wp_enqueue_scripts', 'load_theme_assets');
