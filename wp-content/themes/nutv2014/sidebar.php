<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package nutv2014
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }

?>

<aside class="right">

    <section class="show-description">
        <h2 class="secondary-title">NUTV’s programming</h2>
        awakens and engages the campus community while
        fostering innovation and learning in an accessible media arts environment.
    </section>

<?php
    global $post;
	$sidebar = get_post_meta($post->ID, 'sidebar_selector_sidebars', true);

	//dynamic sidebar
	if ( !function_exists('dynamic_sidebar') || 
	  !dynamic_sidebar($sidebar) ) {}

?>

</aside>
