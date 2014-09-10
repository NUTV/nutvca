<?php
/*
Plugin Name: NUTV Widgets
Plugin URI: http://digitalsadhu.com/
Description: A set of widgets for nutv.ca
Author: Richard Walker
Version: 1
Author URI: http://digitalsadhu.com/
*/
 

/**
 * Creates a youtube widget to display content from NUTV's youtube channel in 
 * a sidebar 
 */
class nutv_youtube_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_youtube_widget', // Base ID
            'NUTV Youtube Widget', // Name
            array('description' => __('A Widget for NUTV\'s Youtube channel.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) { ?>
    <div class="widget youtube">
      <h2 class="widget-title">Youtube</h2>
      <iframe id="fr" src="http://www.youtube.com/subscribe_widget?p=NUTV" 
              style="overflow: hidden; height: 105px; width: 340px; border: 0;" 
              scrolling="no" 
              frameBorder="0"></iframe>  
    </div>
    <?php

  }

}
add_action('widgets_init', create_function('', 'register_widget( "nutv_youtube_widget" );'));


/**
 * Creates a widget to display a google friend connect gadget
 */
class nutv_google_friend_connect_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_google_friend_connect_widget', // Base ID
            'NUTV Google Friend Connect Widget', // Name
            array('description' => __('A Social Google Friend Connect Widget for NUTV.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) { ?>
    <div class="widget google-friend-connect">
    <h2 class="widget-title">Google Friend Connect</h2>
      <!-- Define the div tag where the gadget will be inserted. --> 
      <div id="div-1228638045286" style="width:340px;border:none"></div> 
      <!-- Render the gadget into a div. --> 
      <script type="text/javascript"> 
        var skin = {};
        skin['HEIGHT'] = '220'; 
        skin['BORDER_COLOR'] = 'white'; 
        skin['ENDCAP_BG_COLOR'] = 'white'; 
        skin['ENDCAP_TEXT_COLOR'] = '#333333'; 
        skin['ENDCAP_LINK_COLOR'] = '#000000'; 
        skin['ALTERNATE_BG_COLOR'] = '#ffffff'; 
        skin['CONTENT_BG_COLOR'] = '#ffffff'; 
        skin['CONTENT_LINK_COLOR'] = '#000000'; 
        skin['CONTENT_TEXT_COLOR'] = '#333333'; 
        skin['CONTENT_SECONDARY_LINK_COLOR'] = '#000000'; 
        skin['CONTENT_SECONDARY_TEXT_COLOR'] = '#666666'; 
        skin['CONTENT_HEADLINE_COLOR'] = '#333333'; google.friendconnect.container.setParentUrl('/' /* location of rpc_relay.html and canvas.html */); 
        google.friendconnect.container.renderMembersGadget( { id: 'div-1228638045286', site: '14612904067477768029'}, skin);
      </script>
    </div>
    <?php
  }

}
add_action('widgets_init', create_function('', 'register_widget( "nutv_google_friend_connect_widget" );'));


/**
 * Creates a widget to display a facebook social widget for NUTV in a sidebar
 */
class nutv_facebook_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_facebook_widget', // Base ID
            'NUTV Facebook Widget', // Name
            array('description' => __('A Social Facebook Widget for NUTV.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) { ?>
    <div class="widget facebook">
      <h2 class="widget-title">Facebook</h2>
      <iframe src="http://www.facebook.com/plugins/like.php?href=nutv.ca&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;font&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
      <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FNUTV%2F178675948848359&amp;width=340&amp;colorscheme=light&amp;show_faces=true&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:340px; height:427px;" allowTransparency="true"></iframe>
    </div>
    <?php
  }

}
add_action('widgets_init', create_function('', 'register_widget( "nutv_facebook_widget" );'));


/**
 * Creates a twitter widget for nutv's twitter account for use in a sidebar 
 */
class nutv_twitter_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_twitter_widget', // Base ID
            'NUTV Twitter Widget', // Name
            array('description' => __('A Social Twitter Widget for NUTV.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) { ?>
    <div class="widget twitter">
      <h2 class="widget-title">Twitter</h2>
      <script src="http://widgets.twimg.com/j/2/widget.js"></script>
      <script>
        new TWTR.Widget({
          version: 2,
          type: 'profile',
          rpp: 4,
          interval: 6000,
          width: 340,
          height: 500,
          theme: {
            shell: {
              background: '#c5e5fa',
              color: '#000000'
            },
            tweets: {
              background: '#f0edf0',
              color: '#000000',
              links: '#4aed05'
            }
          },
          features: {
            scrollbar: false,
            loop: false,
            live: false,
            hashtags: true,
            timestamp: true,
            avatars: true,
            behavior: 'all'
          }
        }).render().setUser('NUTVatUOFC').start();
          </script>
    </div>
  <?php
  }
}
add_action('widgets_init', create_function('', 'register_widget( "nutv_twitter_widget" );'));


/**
 * Creates a widget to display custom posts in a sidebar for the custom post
 * type 'nutv_volunteering'
 */
class nutv_volunteering_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_volunteering_widget', // Base ID
            'NUTV Volunteering Widget', // Name
            array('description' => __('NUTV Widget to display a list of volunteering items.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) { 
    
    global $post;
    $args = array( 'numberposts' => -1, 'post_type' => 'nutv_volunteering' );
    $nutv_volunteering_posts = get_posts( $args );
    ?>

    <!-- widget content -->
    <div class="widget vounteering custom-posts">
      <h2 class="widget-title">Volunteering</h2>
      <ul>
        <?php foreach( $nutv_volunteering_posts as $post ) : 
              setup_postdata($post); ?>
        <li>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('join-thumb'); ?>
          <?php else : ?>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/default-thumbnail-154x117.jpg" />
          <?php endif; ?>
          <?php the_content(); ?>
        </li>
        <?php endforeach; wp_reset_postdata(); ?>
      </ul>
    </div>
  <?php
  
  }

}
add_action('widgets_init', create_function('', 'register_widget( "nutv_volunteering_widget" );'));


/**
 * Creates a widget to display custom posts in a sidebar for the custom post
 * type 'nutv_equipment'
 */
class nutv_equipment_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_equipment_widget', // Base ID
            'NUTV Equipment Widget', // Name
            array('description' => __('NUTV Widget to display a list of equipment.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) {
    
    global $post;
    $args = array( 'numberposts' => -1, 'post_type' => 'nutv_equipment' );
    $nutv_equipment_posts = get_posts( $args );
    ?>

    <!-- widget content -->
    <div class="widget equipment custom-posts">
      <h2 class="widget-title">Equipment</h2>
      <ul>
        <?php foreach( $nutv_equipment_posts as $post ) : 
              setup_postdata($post); ?>
        <li>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('join-thumb'); ?>
          <?php else : ?>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/default-thumbnail-154x117.jpg" />
          <?php endif; ?>
          <?php the_content(); ?>
        </li>
        <?php endforeach; wp_reset_postdata(); ?>
      </ul>
    </div>
  <?php
  }
}
add_action('widgets_init', create_function('', 'register_widget( "nutv_equipment_widget" );'));


/**
 * Creates a widget to display custom posts in a sidebar for the custom post
 * type 'nutv_training' 
 */
class nutv_training_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_training_widget', // Base ID
            'NUTV Training Widget', // Name
            array('description' => __('NUTV Widget to display a list of training items.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) {
    
    global $post;
    $args = array( 'numberposts' => -1, 'post_type' => 'nutv_training' );
    $nutv_posts = get_posts( $args );
    ?>

    <!-- widget content -->
    <div class="widget training custom-posts">
      <h2 class="widget-title">Training</h2>
      <ul>
        <?php foreach( $nutv_posts as $post ) : 
              setup_postdata($post); ?>
        <li>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('join-thumb'); ?>
          <?php else : ?>
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/default-thumbnail-154x117.jpg" />
          <?php endif; ?>
          <?php the_content(); ?>
        </li>
        <?php endforeach; wp_reset_postdata(); ?>
      </ul>
    </div>
    <?php
  }
}
add_action('widgets_init', create_function('', 'register_widget( "nutv_training_widget" );'));


/**
 * Creates a widget to display custom posts in a sidebar for the custom post
 * type 'nutv_training' 
 */
class nutv_clubs_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_clubs_widget', // Base ID
            'NUTV Clubs Widget', // Name
            array('description' => __('NUTV Widget to display clubs and faculties information.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) {
    ?>
    <!-- widget content -->
    <div class="widget training custom-posts">
      <h2 class="widget-title">U of C Clubs and Faculties</h2>
      Promote your club or faculty event (that is free for students to attend) for FREE!!!!
      *Any events with admission costs/revenue generation, or employment opportunities are subject to regular rates. 
      <a href="mailto:nutvpub@ucalgary.ca">Email NUTV your poster</a>
    </div>
    <?php
  }
}
add_action('widgets_init', create_function('', 'register_widget( "nutv_clubs_widget" );'));


/**
 * Creates a widget to display custom posts in a sidebar for the custom post
 * type 'nutv_training' 
 */
class nutv_ads_rates_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_ads_rates_widget', // Base ID
            'NUTV Advert Rates and Info Widget', // Name
            array('description' => __('NUTV Widget to display advertising rates and info.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) {
    ?>
    <!-- widget content -->
    <div class="widget training custom-posts">
      <h2 class="widget-title">Download Rates & Info</h2>
      With Rates starting from $60/week, NUTV is the most affordable way to advertise on Campus. 
      <ul style="list-style-type: disc; margin-left:20px; margin-top: 10px;">
          <li><a href="http://nutv.ca/pdf/cctv_ad_rate.pdf">Download a PDF of our ad rates.</a></li>
          <li><a href="http://nutv.ca/pdf/cctv_tech_spec.pdf">Download a PDF of our technical specifications.</a></li>
      </ul>
    </div>
    <?php
  }
}
add_action('widgets_init', create_function('', 'register_widget( "nutv_ads_rates_widget" );'));

/**
 * Creates a widget to display custom posts in a sidebar for the custom post
 * type 'nutv_training' 
 */
class nutv_contact_cctv_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_contact_cctv_widget', // Base ID
            'NUTV Contact CCTV Widget', // Name
            array('description' => __('NUTV Widget to display contact information for CCTV.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) {
    ?>
    <!-- widget content -->
    <div class="widget contact-cctv">
      <h2 class="widget-title">Contact CCTV</h2>
      Deanna Cameron Dubuque : Publicity and Promotions Director
      Tel: 403-210-9564
      <a href="mailto:nutvpub@ucalgary.ca">Email Deanna</a>
    </div>
    <?php
  }
}
add_action('widgets_init', create_function('', 'register_widget( "nutv_contact_cctv_widget" );'));

/**
 * Creates a widget to display custom posts in a sidebar for the custom post
 * type 'nutv_training' 
 */
class nutv_download_logos_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_download_logos_widget', // Base ID
            'NUTV Download Logos Widget', // Name
            array('description' => __('NUTV Widget to display a list of logos to download.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) {
    
    global $post;
    $args = array( 'numberposts' => -1, 'post_type' => 'nutv_logos' );
    $nutv_posts = get_posts( $args );
    ?>

    <!-- widget content -->
    <div class="widget logos">
      <h2 class="widget-title">Download Logos</h2>
      <ul>
        <?php 
        foreach( $nutv_posts as $post ) : 
            setup_postdata($post); 
            $args = array(
                'post_type' => 'attachment',
                'numberposts' => null,
                'post_status' => null,
                'post_parent' => $post->ID,
                'exclude'     => get_post_thumbnail_id()
            ); 
            $attachments = get_posts($args);
            $attachmentLinks = array();
            if ($attachments) {
                foreach ($attachments as $attachment) {
                    $attachmentLinks[] = "<a href=".wp_get_attachment_url( $attachment->ID ).">".
                    apply_filters('the_title', $attachment->post_title)."</a>";    
                }  
            }
        ?>
        <li>
          <h3 class="logo-title"><?php the_title(); ?></h3>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('logo-thumb',array('style'=>'display:block;')); ?>
          <?php else : ?>
            <img style="display:block;" src="<?php bloginfo('stylesheet_directory'); ?>/images/default-thumbnail-154x117.jpg" />
          <?php endif; ?>
          <?php the_content(); ?>
          <?php if(false === empty($attachmentLinks)): ?>
          <p>Download Files... <?php echo implode(', ', $attachmentLinks); ?></p>
          <?php endif; ?>
          <?php endforeach; wp_reset_postdata(); ?>
        </li>
      </ul>
    </div>
    <?php
  }
}
add_action('widgets_init', create_function('', 'register_widget( "nutv_download_logos_widget" );'));

/**
 * Creates a widget to display custom posts in a sidebar for the custom post
 * type 'nutv_training' 
 */
class nutv_staff_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_staff_widget', // Base ID
            'NUTV Staff Widget', // Name
            array('description' => __('NUTV Widget to display staff on a sidebar.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) { ?>
    <!-- widget content -->
    <div class="widget staff">
      <?php
      global $post;
      $args = array( 'numberposts' => -1, 'post_type' => 'nutv_staff', 'meta_key'=>'nutv-staff-type', 'meta_value' => 'board-of-directors' );
      $nutv_posts = get_posts( $args );
      if(count($nutv_posts)>0):?>
      <h2>Board of Directors</h2>
      <ul>
        <?php foreach( $nutv_posts as $post ) : 
              setup_postdata($post); ?>
        <li>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?>
          <?php the_content(); ?>
        </li>
        <?php endforeach; wp_reset_postdata(); ?>
      </ul>
      <?php endif; ?>
      <?php
      global $post;
      $args = array( 'numberposts' => -1, 'post_type' => 'nutv_staff', 'meta_key'=>'nutv-staff-type', 'meta_value' => 'executive-committee' );
      $nutv_posts = get_posts( $args );
      if(count($nutv_posts)>0): ?>
      <h2>Executive Committee</h2>
      <ul>
        <?php foreach( $nutv_posts as $post ) : 
              setup_postdata($post); ?>
        <li>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?>
          <?php the_content(); ?>
        </li>
        <?php endforeach; wp_reset_postdata(); ?>
      </ul>
      <?php endif; ?>
      <?php
      global $post;
      $args = array('order'=>'ASC', 'numberposts' => -1, 'post_type' => 'nutv_staff', 'meta_key'=>'nutv-staff-type', 'meta_value' => 'staff' );
      $nutv_posts = get_posts( $args );
      if(count($nutv_posts)>0): ?>
      <h2>Staff</h2>
      <ul>
        <?php foreach( $nutv_posts as $post ) : 
              setup_postdata($post); ?>
        <li>
          <h3 class="logo-title"><?php the_title(); ?></h3>
          <?php 
          $title = get_post_meta($post->ID, 'nutv-staff-title', true);
          $landline = get_post_meta($post->ID, 'nutv-staff-landline', true);
          $email = get_post_meta($post->ID, 'nutv-staff-email', true);
          
          if(false == ( empty($title) && empty($landline) && empty($email) )): ?>
          <ul>
            <?php if(false == empty($title)): ?>
            <li><strong><?php echo $title; ?></strong></li>
            <?php endif; ?>
            <?php if(false == empty($landline)): ?>
            <li><strong>Landline:</strong> <em><?php echo $landline; ?></em></li>
            <?php endif; ?>
            <?php if(false == empty($email)): ?>
            <li><strong>Email:</strong> <em><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></em></li>
            <?php endif; ?>
          </ul>
          <?php endif; ?>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?>
          <?php the_content(); ?>
        </li>
        <?php endforeach; wp_reset_postdata(); ?>
      </ul>
      <?php endif; ?>
      <?php
      global $post;
      $args = array('order'=>'ASC', 'numberposts' => -1, 'post_type' => 'nutv_staff', 'meta_key'=>'nutv-staff-type', 'meta_value' => 'associate-producers' );
      $nutv_posts = get_posts( $args );
      if(count($nutv_posts)>0): ?>
      <h2>Associate Producers</h2>
      <ul>
        <?php foreach( $nutv_posts as $post ) : 
              setup_postdata($post); ?>
        <li>
          <?php 
          $title = get_post_meta($post->ID, 'nutv-staff-title', true);
          $landline = get_post_meta($post->ID, 'nutv-staff-landline', true);
          $email = get_post_meta($post->ID, 'nutv-staff-email', true);
          
          if(false == ( empty($title) && empty($landline) && empty($email) )): ?>
          <ul>
            <?php if(false == empty($title)): ?>
            <li><strong><?php echo $title; ?></strong></li>
            <?php endif; ?>
            <?php if(false == empty($landline)): ?>
            <li><strong>Landline:</strong> <em><?php echo $landline; ?></em></li>
            <?php endif; ?>
            <?php if(false == empty($email)): ?>
            <li><strong>Email: </strong> <em><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></em></li>
            <?php endif; ?>
          </ul>
          <?php endif; ?>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?>
          <?php the_content(); ?>
        </li>
        <?php endforeach; wp_reset_postdata(); ?>
      </ul>
      <?php endif; ?>
      
      <?php
      global $post;
      $args = array('order'=>'ASC', 'numberposts' => -1, 'post_type' => 'nutv_staff', 'meta_key'=>'nutv-staff-type', 'meta_value' => 'technical-assistants' );
      $nutv_posts = get_posts( $args );
      if(count($nutv_posts)>0): ?>
      <h2>Technical Assistants</h2>
      <ul>
        <?php foreach( $nutv_posts as $post ) : 
              setup_postdata($post); ?>
        <li>
          <?php 
          $title = get_post_meta($post->ID, 'nutv-staff-title', true);
          $landline = get_post_meta($post->ID, 'nutv-staff-landline', true);
          $email = get_post_meta($post->ID, 'nutv-staff-email', true);
          
          if(false == ( empty($title) && empty($landline) && empty($email) )): ?>
          <ul>
            <?php if(false == empty($title)): ?>
            <li><strong><?php echo $title; ?></strong></li>
            <?php endif; ?>
            <?php if(false == empty($landline)): ?>
            <li><strong>Landline:</strong> <em><?php echo $landline; ?></em></li>
            <?php endif; ?>
            <?php if(false == empty($email)): ?>
            <li><strong>Email: </strong> <em><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></em></li>
            <?php endif; ?>
          </ul>
          <?php endif; ?>
          <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail(); ?>
          <?php endif; ?>
          <?php the_content(); ?>
        </li>
        <?php endforeach; wp_reset_postdata(); ?>
      </ul>
      <?php endif; ?>
    </div>
    <?php
  }
}
add_action('widgets_init', create_function('', 'register_widget( "nutv_staff_widget" );'));

/**
 * Creates a widget to display custom posts in a sidebar for the custom post
 * type 'nutv_training' 
 */
class nutv_contests_widget extends WP_Widget {

  public function __construct() {
    parent::__construct(
            'nutv_contests_widget', // Base ID
            'NUTV Contests Widget', // Name
            array('description' => __('NUTV Widget to display a list of contests on a sidebar.', 'text_domain'),) // Args
    );
  }

  public function form($instance) {
    // outputs the options form on admin
  }

  public function update($new_instance, $old_instance) {
    // processes widget options to be saved
  }

  public function widget($args, $instance) {
    
    global $post;
    $args = array( 'numberposts' => -1, 'post_type' => 'nutv_contests' );
    $nutv_posts = get_posts( $args );
    ?>

    <!-- widget content -->
    <div class="widget contests custom-posts">
      <h2 class="widget-title">Current Contests</h2>
      <ul>
        <?php foreach( $nutv_posts as $post ) : 
              setup_postdata($post); ?>
        <li>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php if(has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          <?php else : ?>
            <a href="<?php the_permalink(); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/default-thumbnail-154x117.jpg" /></a>
          <?php endif; ?>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>">Click to enter</a>
        </li>
        <?php endforeach; wp_reset_postdata(); ?>
      </ul>
    </div>
    <?php
  }
}
add_action('widgets_init', create_function('', 'register_widget( "nutv_contests_widget" );'));