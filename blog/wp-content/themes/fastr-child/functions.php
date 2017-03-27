<?php

$defaults = array(
	'default-image'          => get_template_directory_uri() . '-child/images/header.jpg',
	'random-default'         => false,
	'width'                  => 200,
	'height'                 => 200,
	'flex-height'            => false,
	'flex-width'             => false,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);

add_theme_support( 'custom-header', $defaults );
?>