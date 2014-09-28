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
			<li class="active">Greenlite</li>
			<li>Another Event</li>
		</ul>
	</aside>

	<section class="event-articles right">

		<article class="event odd">
			<h5 class="right">28 September 2014</h5>
			<h3>Some event</h3>
			
			<p>Some stuff about the event, something about a curry, hipsters and bacon. All described in faux latin. 
			   Some stuff about the event, something about a curry, hipsters and bacon. All described in faux latin. </p>
		</article>

		<article class="event">
			<h5 class="right">28 September 2014</h5>
			<h3>Some event</h3>
			
			<p>Some stuff about the event, something about a curry, hipsters and bacon. All described in faux latin. 
			   Some stuff about the event, something about a curry, hipsters and bacon. All described in faux latin. </p>
		</article>

		<article class="event odd">
			<h5 class="right">28 September 2014</h5>
			<h3>Some event</h3>
			
			<p>Some stuff about the event, something about a curry, hipsters and bacon. All described in faux latin. 
			   Some stuff about the event, something about a curry, hipsters and bacon. All described in faux latin. </p>
		</article>

	</section>

</section>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
