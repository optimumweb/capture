		<?php wpbp_footer_before(); ?>
		<footer id="footer" role="contentinfo">
			<?php wpbp_footer_inside_before(); ?>
			<section id="footer-widgets">
				<div class="container <?php wpbp_option('container_class'); ?>">
					<?php dynamic_sidebar('Footer'); ?>
				</div>
			</section>
			<section id="sub-footer">
				<div class="container <?php wpbp_option('container_class'); ?>">
					<div class="grid_6">
						<nav id="footer-nav">
							<?php wp_nav_menu( array( 'theme_location' => 'secondary_navigation' ) ); ?>
							<div class="clear"></div>
						</nav>
					</div>
					<div class="grid_6">
						<div id="copy">
							&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> /
							<a class="powered-by-prospek" href="http://prospeksolutions.com" target="_blank"><?php _e("Powered by Prospek Solutions", 'capture'); ?></a>
						</div>
					</div>
				</div>
			</section>
			<?php wpbp_footer_inside_after(); ?>
		</footer>
		<?php wpbp_footer_after(); ?>
	</div>

<?php wp_footer(); ?>
<?php wpbp_footer(); ?>

</body>
</html>
