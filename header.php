<?php get_template_part('head'); ?>
	<?php wpbp_wrap_before(); ?>
	<div id="wrap" role="document">
		<?php wpbp_header_before(); ?>
		<header id="header" role="banner">
			<?php wpbp_header_inside_before(); ?>
            <div class="container <?php wpbp_option('container_class'); ?>">
            	<div class="grid_6">
					<section id="site-title">
						<?php if ( of_get_option('logo') ) : ?>
							<h1>
								<a href="<?php echo home_url(); ?>/">
									<img id="logo" src="<?php echo of_get_option('logo'); ?>" alt="<?php bloginfo('name'); ?>" />
								</a>
							</h1>
						<?php else : ?>
							<h1>
								<a href="<?php echo home_url(); ?>/">
									<?php bloginfo('name'); ?>
								</a>
							</h1>
							<h3><?php bloginfo('description'); ?></h3>
						<?php endif; ?>
					</section>
			    </div>
			    <div class="grid_6">
			    	<section id="call">
						<?php dynamic_sidebar('Header'); ?>
					</section>
			    </div>
            </div>
            <?php wpbp_header_inside_after(); ?>
		</header>
		<?php wpbp_header_after(); ?>

		<?php if ( is_front_page() ) get_template_part('banner'); ?>
