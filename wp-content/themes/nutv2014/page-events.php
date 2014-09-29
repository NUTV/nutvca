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

	<h2>Upcoming Events</h2>

	<aside class="event-categories left">

		<ul class="events unstyled">

		 <?php 
		$args = array('taxonomy'   => 'nutv_event_category',
					  'hide_empty' => 1); 

		$event_categories=get_categories($args);
		foreach ($event_categories as $event_category) : ?>
			<li class="<?php if ($event_category->slug == $_GET['event_cat']) echo 'active'; ?>">
				<a href="/events/?event_cat=<?php echo $event_category->slug;?>"><?php echo $event_category->name;?></a>
			</li>
		<?php endforeach; ?>
				

		</ul>
	</aside>

	<section class="event-articles right">

	<?php
	
	$args = array(
		'numberposts' => -1,
	    'order'       => 'ASC',
	    'post_type'   => 'nutv_events'
	);

	if (!empty($_GET['event_cat'])) {
		
		$args['tax_query'] = array(
			array('taxonomy' => 'nutv_event_category',
				  'field'    => 'slug',
				  'terms'    => $_GET['event_cat']
				)
		);
	}

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
