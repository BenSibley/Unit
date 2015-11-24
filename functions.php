<?php

function ct_unit_after_setup_theme() {
	load_child_theme_textdomain( 'unit', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'ct_unit_after_setup_theme' );

function ct_unit_enqueue_styles() {

	$parent_style = 'ct-founder-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.min.css' );
	wp_enqueue_style( 'ct-unit-style',
		get_stylesheet_directory_uri() . '/style.min.css',
		array( $parent_style )
	);
}
add_action( 'wp_enqueue_scripts', 'ct_unit_enqueue_styles' );

function ct_unit_override_footer_text( $footer_text ) {
	$site_url = 'https://www.competethemes.com/unit/';
	$footer_text = sprintf( __( '<a href="%s">Unit WordPress Theme</a> by Compete Themes', 'unit' ), esc_url( $site_url ) );
	return $footer_text;
}
add_filter( 'ct_founder_footer_text', 'ct_unit_override_footer_text' );