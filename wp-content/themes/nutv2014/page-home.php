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

get_header( 'home' );

?>

<section class="left">

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

<div id="social-media-icons">
	<span class='st_email_large' displayText='Email'></span>
	<span class='st_facebook_large' displayText='Facebook'></span>
	<span class='st_linkedin_large' displayText='LinkedIn'></span>
	<span class='st_twitter_large' displayText='Tweet'></span>
	<span class='st_googleplus_large' displayText='Google +'></span>
	<span class='st_pinterest_large' displayText='Pinterest'></span>
</div>

</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
