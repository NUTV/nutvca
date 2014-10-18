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

<?php

	$sponsors = get_bookmarks( array('category_name' => 'Sponsors'));

	if (count($sponsors) > 0) {

		echo '<div id="sponsors">';

		foreach ($sponsors as $sponsor) {
			
			echo '<a href="'.$sponsor->link_url.'" target="'.$sponsor->link_target.'">';
			if ($sponsor->link_image !== '') {
				echo '<img src="'.$sponsor->link_image.'" />';
			} else {
				echo $sponsor->link_name;
			}
			echo '</a>';
		}

		echo '</div>';
	}

?>

</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
