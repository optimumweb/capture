<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_theme_data(STYLESHEETPATH . '/style.css');
	$themename = $themename['Name'];
	$themename = preg_replace("/\W/", "", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	$options = array(
		array(
			'name' => __("General", 'capture'),
			'type' => 'heading'
		),
		array(
			'name' => __("Color (dark)", 'capture'),
			'id'   => 'color_dark',
			'type' => 'color'
		),
		array(
			'name' => __("Color (light)", 'capture'),
			'id'   => 'color_light',
			'type' => 'color'
		),
		array(
			'name' => __("Logo", 'capture'),
			'id'   => 'logo',
			'type' => 'upload'
		),
		array(
			'name' => __("Background Image", 'capture'),
			'id'   => 'background_image',
			'type' => 'upload'
		),
		array(
			'name' => __("Background Tile", 'capture'),
			'id'   => 'background_repeat',
			'type' => 'select',
			'options' => array(
				'repeat'    => __("Repeat", 'capture'),
				'no-repeat' => __("No-repeat", 'capture')
			)
		),
		array(
			'name' => __("Background Attachment", 'capture'),
			'id'   => 'background_attachment',
			'type' => 'select',
			'options' => array(
				'scroll' => __("Scroll", 'capture'),
				'fixed'  => __("Fixed", 'capture')
			)
		)
	);

	return $options;
}

?>