<?php

// ENQUEUE
function enqueue() {
	if ( !is_admin() ) {
        // librairies
        wpbp_enqueue_lib( array( 'modernizr', 'jquery', 'wpbp', 'flexslider' ) );
		// scripts
		wp_enqueue_script('theme', THEME_URI . '/js/scripts.js', array('wpbp'));
		// styles
		wp_enqueue_style('theme', THEME_URI . '/css/master.css', array('wpbp'));
	}
}
add_action('init', 'enqueue');

// Load theme textdomain (for translation)
load_theme_textdomain('capture', THEME_DIRECTORY . '/lang');

// Add widget area
wpbp_register_sidebars( array( 'Footer' ) );

// register 'slide' post type for slider
function capture_register_slides() {
    register_post_type(
        'slide',
        array(
            'label'               => 'Slides',
            'public'              => true,
            'exclude_from_search' => true,
            'publicly_queryable'  => false,
            'show_in_nav_menus'   => false,
            'capability_type'     => 'page',
            'supports'            => array('title', 'editor', 'custom-fields', 'page-attributes')
        )
    );
}
add_action('init', 'capture_register_slides');

function capture_get_slides($n = -1) {
    return get_posts(array(
        'numberposts' => $n,
        'post_type'   => 'slide',
        'orderby'     => 'menu_order'
    ));
}

function capture_style() {
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