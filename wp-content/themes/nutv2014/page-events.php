 <?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package nutv2014
 */

get_header(); ?>

<section class="left">

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
