<?php

add_action( 'after_setup_theme', 'alcy_register_primary_menu' );

function alcy_register_primary_menu() {

	register_nav_menu( 'primary', esc_html__( 'Header Navigation Menu', 'alcy' ) );
}