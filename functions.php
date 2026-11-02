<?php
/**
 * Theme setup and assets.
 *
 * @package Accessible_Forums
 */

function accessible_forums_setup() {
	load_theme_textdomain( 'accessible-forums', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'bbpress' );
	add_theme_support( 'custom-logo', array( 'height' => 80, 'width' => 240, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary navigation', 'accessible-forums' ),
		)
	);
}
add_action( 'after_setup_theme', 'accessible_forums_setup' );

function accessible_forums_enqueue_styles() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'accessible-forums-style', get_stylesheet_uri(), array(), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'accessible_forums_enqueue_styles' );
