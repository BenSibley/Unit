<?php

function ct_unit_after_setup_theme() {
	load_child_theme_textdomain( 'unit', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'ct_unit_after_setup_theme' );

function ct_unit_override_footer_text( $footer_text ) {

	$site_url = 'https://www.competethemes.com/unit/';
	$footer_text = '<a href="' . esc_url( $site_url ) . '">Unit WordPress Theme</a> by Compete Themes.';
	return $footer_text;
}
add_filter( 'ct_founder_footer_text', 'ct_unit_override_footer_text' );