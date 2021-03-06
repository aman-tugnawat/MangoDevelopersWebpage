<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Klean_Blog
 * @since Klean Blog 1.0
 */
?>

	</div><!-- .site-content -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'klean-blog' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'klean-blog' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->
</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
