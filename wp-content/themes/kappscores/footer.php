<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kappscores
 */

?>

	</div><!-- #content -->
        
        <?php get_sidebar('footer')?>;

	<footer id="colophon" class="site-footer">
            
                <?php
		// Make sure there is a social menu to display.
		if ( has_nav_menu( 'social' ) ) { ?>
		<nav class="social-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'social' ) ); ?>
		</nav><!-- .social-menu -->
		<?php } ?>
            
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://www.devian.co.za/', 'kappscores' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__('Powered by %s', 'kappscores' ), 'DKapp' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'kappscores' ), 'kappscores', '<a href="https://www.devian.co.za" rel="designer">Devian Kapp</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
