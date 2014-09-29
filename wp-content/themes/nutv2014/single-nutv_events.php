<?php
/**
 * The template for displaying all single posts.
 *
 * @package nutv2014
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);
get_header(); ?>

<section class="left">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

	<?php endwhile; // end of the loop. ?>

</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>