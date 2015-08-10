<?php

function ct_unit_override_footer_text( $footer_text ) {

	$site_url = 'https://www.competethemes.com/unit/';
	$footer_text = '<a href="' . esc_url( $site_url ) . '">Unit WordPress Theme</a> by Compete Themes.';
	return $footer_text;
}
add_filter( 'ct_founder_footer_text', 'ct_unit_override_footer_text' );