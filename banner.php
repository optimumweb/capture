<section id="banner">
	<div class="container <?php wpbp_option('container_class'); ?>">
		<div class="flexslider">
			<ul class="slides">
				<?php if ( of_get_option('slide_1') ) : ?>
					<li><img src="<?php echo of_get_option('slide_1'); ?>" /></li>
				<?php endif; ?>
				<?php if ( of_get_option('slide_2') ) : ?>
					<li><img src="<?php echo of_get_option('slide_2'); ?>" /></li>
				<?php endif; ?>
				<?php if ( of_get_option('slide_3') ) : ?>
					<li><img src="<?php echo of_get_option('slide_3'); ?>" /></li>
				<?php endif; ?>
				<?php if ( of_get_option('slide_4') ) : ?>
					<li><img src="<?php echo of_get_option('slide_4'); ?>" /></li>
				<?php endif; ?>
				<?php if ( of_get_option('slide_5') ) : ?>
					<li><img src="<?php echo of_get_option('slide_5'); ?>" /></li>
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>