<?php get_template_part('head'); ?>
	<?php wpbp_wrap_before(); ?>
	<div id="wrap" role="document">
		<?php wpbp_header_before(); ?>
		<header id="header" role="banner">
			<?php wpbp_header_inside_before(); ?>
            <div class="container <?php wpbp_option('container_class'); ?>">
            	<div class="grid_6">
					<section id="site-title">
						<h1><a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
						<h3><?php bloginfo('description'); ?></h3>
					</section>
			    </div>
			    <div class="grid_6">
					<?php dynamic_sidebar('Header'); ?>
			    </div>
            </div>
            <?php wpbp_header_inside_after(); ?>
		</header>
		<?php wpbp_header_after(); ?>