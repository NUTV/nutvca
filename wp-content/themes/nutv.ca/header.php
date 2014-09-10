<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
  
  <head profile="http://gmpg.org/xfn/11">
    
    <meta http-equiv="content-type" 
          content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    
    <title><?php wp_title('-', true, 'right');
              echo wp_specialchars(get_bloginfo('name'), 1); ?></title>        

    <link rel="shortcut icon" href="http://nutv.ca/star.gif" type="image/vnd.microsoft.icon" />
    <link rel="icon" href="http://nutv.ca/star.gif" type="image/vnd.microsoft.icon" />      
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/nutv_main.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory') ?>/css/banner_rotator.css" type="text/css" media="screen" /> <!-- BANNER-ROTATOR :: this line needs to be set -->
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo('stylesheet_directory') ?>" />

    <!-- Include the Google Friend Connect javascript library. --> 
    <script type="text/javascript" src="http://www.google.com/friendconnect/script/friendconnect.js"></script> 
    <script type="text/javascript" src="http://www.google.com/friendconnect/script/friendconnect.js"></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory') ?>/javascript/jquery-1.3.1.min.js'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory') ?>/javascript/jquery.rotator.js'></script>
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory') ?>/javascript/swfobject.js'></script> <!-- BANNER-ROTATOR :: this line needs to be set -->
    <script type='text/javascript' src='<?php bloginfo('stylesheet_directory') ?>/javascript/nav.js'></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#rotator").rotator({ms : 7000});
      });		
    </script>
    <?php wp_head(); ?>
  </head>

  <body class="oneColFixCtr">
    <div id="rotator" style="display:block; margin:0 auto; width:870px; height: 90px; overflow:hidden;">
      <!-- Banner Rotater -->
      <?php
      global $post;
      $tmp_post = $post;
      $args = array( 'numberposts' => -1, 'post_type' => 'nutv_banners' );
      $banners = get_posts( $args );
      foreach( $banners as $post ) : setup_postdata($post);
        $href = get_post_meta($post->ID, 'nutv-banners-url', true);
        $a = (empty($href))?'':"<a href=\"{$href}\">";
        $_a = (empty($href))?'':"</a>";
        ?>
      
        <div style="height:90px; width:870px;"><?php echo $a ?><?php the_post_thumbnail('banner',array('alt'=>get_the_content(), 'title'=>  get_the_content())); ?><?php echo $_a ?></div>
      
      <?php endforeach; ?>
      <?php $post = $tmp_post; ?>
    </div>
      
    
    <!-- main wrapper -->
    <div id="container">
      <img alt="Top Backdrop Cap" 
          src="<?php bloginfo('stylesheet_directory') ?>/images/backdrop_top.jpg" />
      <div id="mainContent">
        <img style="position:relative; top:-3px;" 
            alt="Header Backdrop Image" 
            src="<?php bloginfo('stylesheet_directory'); ?>/images/title_banner_contests.jpg" />

        <div id="nav">
          <?php wp_nav_menu('primary'); ?>
        </div>