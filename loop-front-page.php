<?php while ( have_posts() ) : the_post(); ?>
	<?php wpbp_post_before(); ?>
		<?php the_content(); ?>
	<?php wpbp_post_after(); ?>
<?php endwhile; // End the loop ?>