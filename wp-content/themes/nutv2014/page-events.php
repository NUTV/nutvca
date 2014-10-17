 <?php
/**
 * The template for displaying Events.
 *
 *
 * @package nutv2014
 */

get_header(); ?>

<section class="left">

	<aside class="event-categories left">

		<h3>Special Events</h3>

		<ul class="unstyled">
			<li><a href="/greenlite">Greenlite</a></li>
		</ul>

	</aside>

	<section class="event-articles right">

		<h2>Upcoming Events</h2>

	<?php
	
	$args = array(
		'numberposts' => -1,
	    'order'       => 'ASC',
	    'post_type'   => 'nutv_events'
	);

	// show events
	query_posts($args);

	$event_count = 1;

	if (have_posts()) : while (have_posts()) : the_post(); ?>
	              
	    <article class="event <?php if ($event_count++ % 2 !== 0) echo 'odd';?>" data-category="<?php echo $category; ?>">

	    	<h5 class="right"><?php echo get_post_meta($post->ID, 'nutv-event-date', true); ?></h5>
	        
	        <h3><?php the_title(); ?></h3> 

	        <p><?php the_content(); ?></p>

	    </article>
	              
	<?php endwhile; endif; ?>

	</section>

</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
