<?php
/**
 * Template Name: no-sidebar.php
 *
 * This is the template that displays all pages without a sidebar
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

if (is_front_page()) :
		get_header('home');
else:
	get_header();
endif; 
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			if (is_front_page()) :
					get_template_part( 'notitle', 'page' );
				else:
					get_template_part( 'template-parts/content', 'page' );
				endif;

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
