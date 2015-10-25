<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Winegum_2.0
 */

?>
				</div><!-- .col -->
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-menu">
			<div class="container">
				HERE COMES THE MENU
			</div><!-- .container -->
		</div><!-- #footer-menu -->
		
		<div id="footer-line">
			<div class="container">
				<div class="site-info">
					<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'winegum' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'winegum' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'winegum' ), 'winegum', '<a href="http://lgk.io" rel="designer">LGK</a>' ); ?>
				</div><!-- .site-info -->
			</div><!-- .container -->
		</div><!-- #footer-line -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.3.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/winegum.js"></script>

</body>
</html>
