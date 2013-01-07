<?php
$slides = capture_get_slides();
if ( isset($slides) && count($slides) > 0 ) :
?>
<section id="banner">
	<div class="container <?php wpbp_option('container_class'); ?>">
		<div class="flexslider">
			<ul class="slides">
                <?php foreach ( $slides as $slide ) : ?>
                    <li class="<?php echo $slide->post_name; ?>">
                        <?php echo $slide->post_content; ?>
                    </li>
                <?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>
<?php endif; ?>