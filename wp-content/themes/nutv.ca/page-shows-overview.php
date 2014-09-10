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

    <!-- Banner Rotater -->
    <?php if (isset($banners) && count($banners) > 0): ?>
      <?php if (count($banners) > 1): ?>
        <div id="rotator" style="display:block; margin:0 auto; width:870px; height: 90px; overflow:hidden;">
          <?php foreach ($banners as $banner): ?>	
            <div style="height:90px; width:870px;"><a href="<?php echo $banner['url']; ?>"><img alt="advertisement" src="<?php echo $config['resourceDirExt'] . 'banner_ads/' . $banner['image_filename']; ?>" /></a></div>
          <?php endforeach; ?>    
        </div>
      <?php else: ?>
        <div style="display:block; margin:0 auto; width:870px; height: 90px; overflow:hidden;">	
          <div style="height:90px; width:870px;"><a href="<?php echo $banners[0]['url']; ?>"><img alt="advertisement" src="<?php echo $config['resourceDirExt'] . 'banner_ads/' . $banners[0]['image_filename']; ?>" /></a></div>
        </div>
      <?php endif; ?>
    <?php endif; ?> <!-- Banner Rotator -->
    
    <!-- main wrapper -->
    <div id="container">
      
      <!--header--> 
      <?php get_header(); ?>
      <?php //include('backend/banner_rotator_frontend_partial.php'); ?>
      <!-- BANNER-ROTATOR :: this line needs to be set depending on local or remote usage -->
          
        <div class="clearer"></div>
        
        <!--Left Col-->
        <div id="leftCol_front" style="width: 100%">
          
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <div><?php the_content(); ?></div>
          <?php endwhile; endif; ?>
          
          <div id="show-items">
          <?php query_posts(array('post_type'=>'nutv_shows')); ?>
          <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>
              
          <div class="show-item">
              <h2><?php the_title(); ?></h2>
              <?php if(has_post_thumbnail()): ?>
              <div>
                <?php the_post_thumbnail(array(192,192)); ?>
              </div>
              <?php endif; ?>
              <div><?php the_content(); ?></div>
          </div>
              
          <?php endwhile;
          endif; ?>
          </div>
          
        </div>
        <!--Footer-->
        <?php get_footer(); ?>
        <!-- end #container --></div>
      <?php //include 'includes/google_analytics.php'; ?>   
  </body>
</html>
