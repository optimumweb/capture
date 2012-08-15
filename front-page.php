<?php get_header('front-page'); ?>

	<?php get_template_part('banner'); ?>

    <?php wpbp_content_before(); ?>
	<section id="content">
    	<div class="container <?php wpbp_option('container_class'); ?>">
			<?php wpbp_main_before(); ?>
			<section id="main" role="main">
				<?php wpbp_main_inside_before(); ?>
				<div class="container">
					<?php get_template_part('loop', 'front-page'); ?>
				</div>
				<?php wpbp_main_inside_after(); ?>
			</section>
			<?php wpbp_main_after(); ?>
		</div>
	</section>
	<?php wpbp_content_after(); ?>

	<aside id="sidebar">
		<div class="container <?php wpbp_option('container_class'); ?>">
			<?php get_sidebar('front-page'); ?>
		</div>
	</aside>

<?php get_footer(); ?>