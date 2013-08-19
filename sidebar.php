<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Adam Wills
 */
?>
	<div id="secondary" class="widget-area large-4 columns" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
		<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

			

		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
