<?php

// ENQUEUE
function enqueue() {
	if ( !is_admin() ) {
		// scripts
		wpbp_enqueue_scripts( array( 'modernizr', 'jquery', 'wpbp', 'scrollTo' ) );
		// styles
		wp_enqueue_style('wpbp');
		wp_enqueue_style('theme', THEME_URI . '/css/master.css', array('wpbp'));
	}
}
add_action('init', 'enqueue');

wpbp_register_sidebars( array( 'Header', 'Value', 'Footer' ) );

function capture_style()
{
?>
<style>
	body {
		background-image: url(<?php echo of_get_option('background_image', THEME_URI . '/img/background_image.jpg'); ?>);
		background-repeat: <?php echo of_get_option('background_repeat', 'repeat'); ?>;
		border-top: 2px solid <?php echo of_get_option('light_color', '#000'); ?>;
	}
	#banner {
		background-color: <?php echo of_get_option('dark_color', '#000'); ?>;
	}
</style>
<?php
}
add_action('wpbp_head', 'capture_style');