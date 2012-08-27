<?php

// ENQUEUE
function enqueue() {
	if ( !is_admin() ) {
		// scripts
		wpbp_enqueue_scripts( array( 'modernizr', 'jquery', 'wpbp', 'flexslider' ) );
		wp_enqueue_script('theme', THEME_URI . '/js/scripts.js', array('wpbp'));
		// styles
		wpbp_enqueue_styles( array( 'wpbp', 'flexslider' ) );
		wp_enqueue_style('theme', THEME_URI . '/css/master.css', array('wpbp'));
	}
}
add_action('init', 'enqueue');

// Load theme textdomain (for translation)
load_theme_textdomain('capture', THEME_DIRECTORY . '/lang');

// Add widget area
wpbp_register_sidebars( array( 'Footer' ) );

function capture_style()
{
?>
<style>

	body {
		<?php if ( of_get_option('background_image') ) : ?>
		background-image: url(<?php echo of_get_option('background_image'); ?>);
		<?php endif; ?>
		background-position: <?php echo of_get_option('background_position', 'center center'); ?>;
		background-color: <?php echo of_get_option('background_color', '#fff'); ?>;
		background-repeat: <?php echo of_get_option('background_repeat', 'repeat'); ?>;
		background-attachment: <?php echo of_get_option('background_attachment', 'scroll'); ?>;
	}

	a {
		color: <?php echo of_get_option('color_dark', '#000'); ?> !important;
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

	.iphorm-group-title {
		color: <?php echo of_get_option('color_dark', '#000'); ?> !important;
	}

	#sidebar .widget-title {
		color: <?php echo of_get_option('color_contrast', '#000'); ?> !important;
	}

</style>
<?php
}
add_action('wpbp_head', 'capture_style');