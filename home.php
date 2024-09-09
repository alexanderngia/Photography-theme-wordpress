<?php
/**
 * The template for displaying all posts
 *
 * This is the template that displays all posts by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 *
 * @package Xspaco
 */

get_header();
?>

		 <main id="main" class="site-main-blog">

	<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', '' );

			// If comments are open or we have at least one comment, load up the comment template.

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
<?php get_footer();