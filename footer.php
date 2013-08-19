<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Adam Wills
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="row">
			<div class="large-6 columns">
				<div class="site-info">
					<?php do_action( 'adam_wills_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'adam-wills' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'adam-wills' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'adam-wills' ), 'Adam Wills', '<a href="http://adamwills.com" rel="designer">Adam Wills</a>' ); ?>
				</div><!-- .site-info -->
			</div>
			<div class="large-6 columns">
				<p>Some other stuff</p>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>