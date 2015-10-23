<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Winegum_2.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
</div><!-- .col -->

<div class="col-md-4 col">
	<div id="secondary" class="widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
</div>