<?php

// ENQUEUE
function enqueue() {
	if ( !is_admin() ) {
		// scripts
		wpbp_enqueue_scripts( array( 'modernizr', 'jquery', 'wpbp', 'scrollTo', 'flexslider' ) );
		wp_enqueue_style('theme', THEME_URI . '/js/scripts.js', array('wpbp'));
		// styles
		wpbp_enqueue_styles( array( 'wpbp', 'flexslider' ) );
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
		background-attachment: <?php echo of_get_option('background_attachment', 'scroll'); ?>;
	}

	#wrap {
		border-top: 2px solid <?php echo of_get_option('color_light', '#000'); ?>;
	}

	#header #call .tel {
		color: <?php echo of_get_option('color_light', '#000'); ?>;
	}

	#banner {
		background-color: <?php echo of_get_option('color_dark', '#000'); ?>;
	}

	#main .cta h1 {
		color: <?php echo of_get_option('color_dark', '#000'); ?>;
	}

	#main .cta h2 {
		color: <?php echo of_get_option('color_light', '#000'); ?>;
	}

</style>
<?php
}
add_action('wpbp_head', 'capture_style');