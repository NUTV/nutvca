<?php

global $post;
$sidebar = get_post_meta($post->ID, 'sidebar_selector_sidebars', true);

//dynamic sidebar
if ( !function_exists('dynamic_sidebar') || 
  !dynamic_sidebar($sidebar) ) {}

  
?>
