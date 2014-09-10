<?php

add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 100, 100, true );
add_image_size( 'staff-thumb', 102, 81, true );
add_image_size( 'join-thumb', 150, 113, true );
add_image_size( 'show-thumb', 192, 144, true );
add_image_size( 'logo-thumb', 237, 100, true );
add_image_size( 'banner', 870, 90, true );


if (function_exists('register_sidebar')) {
  register_sidebar(
      array(
          'name' => 'Homepage Sidebar',
          'id' => 'homepage-sidebar',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '<div class="clear"></div></div>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>'
      )
  );
  register_sidebar(
      array(
          'name' => 'Join Sidebar',
          'id' => 'join-sidebar',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '<div class="clear"></div></div>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>'
      )
  );
  register_sidebar(
      array(
          'name' => 'Advertise Sidebar',
          'id' => 'advertise-sidebar',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '<div class="clear"></div></div>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>'
      )
  );
  register_sidebar(
      array(
          'name' => 'Shows Sidebar',
          'id' => 'shows-sidebar',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '<div class="clear"></div></div>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>'
      )
  );
  register_sidebar(
      array(
          'name' => 'Contact Sidebar',
          'id' => 'contact-sidebar',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '<div class="clear"></div></div>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>'
      )
  );
  register_sidebar(
      array(
          'name' => 'Member Area Sidebar',
          'id' => 'member-area-sidebar',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '<div class="clear"></div></div>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>'
      )
  );
  register_sidebar(
      array(
          'name' => 'Footer Area Sidebar',
          'id' => 'footer-area-sidebar',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '<div class="clear"></div></div>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>'
      )
  );
  register_sidebar(
      array(
          'name' => 'Contests Sidebar',
          'id' => 'contests-sidebar',
          'before_widget' => '<div id="%1$s" class="widget %2$s">',
          'after_widget' => '<div class="clear"></div></div>',
          'before_title' => '<h2 class="widget-title">',
          'after_title' => '</h2>'
      )
  );
  
}


//Unregister Parent's Sidebars
function remove_parent_sidebars() {

  // Unregsiter some of the TwentyTen sidebars
  unregister_sidebar('primary-sidebar');
  unregister_sidebar('secondary-sidebar');

}

/*
 * Add action giving it a low priority so it happens after the parent theme
 * otherwise this would do nothing since child themes functions files get 
 * called before parent themes functions files.
 */
add_action('widgets_init', 'remove_parent_sidebars', 11);


/**
 * Custom post types
 */


/**
 * Volunteering custom post type
 */
function nutv_volunteering() {
  
  $labels = array(
    'name'              => 'Volunteering Box',
    'singular_name'     => 'Volunteering Box',
    'add_new'           => 'Add New Volunteering Box',
    'add_new_item'      => 'Add New Volunteering Box',
    'edit_item'         => 'Edit Volunteering Box',
    'new_item'          => 'New Volunteering Box',
    'all_items'         => 'All Volunteering Boxes',
    'view_item'         => 'View Volunteering Box',
    'search_items'      => 'Search Volunteering Boxes',
    'not_found'         =>  'No Volunteering Boxes found',
    'not_found_in_trash'=> 'No Volunteering oxes found in Trash', 
    'parent_item_colon' => '',
    'menu_name'         => 'Volunteering'
  );
  
  $args = array(
      'labels' => $labels,
      'supports' => array('title','thumbnail','editor'),
      'public' => true
  );
  
  register_post_type('nutv_volunteering', $args);
}

add_action('init', 'nutv_volunteering');

/**
 * Shows custom post type
 */
function nutv_shows() {
  
  $labels = array(
    'name'              => 'Shows',
    'singular_name'     => 'Show',
    'add_new'           => 'Add new show',
    'add_new_item'      => 'Add new show',
    'edit_item'         => 'Edit show',
    'new_item'          => 'New show',
    'all_items'         => 'All shows',
    'view_item'         => 'View shows',
    'search_items'      => 'Search shows',
    'not_found'         => 'No shows found',
    'not_found_in_trash'=> 'No shows found in Trash', 
    'parent_item_colon' => '',
    'menu_name'         => 'Shows'
  );
  
  $args = array(
      'labels' => $labels,
      'supports' => array('title','thumbnail','editor'),
      'public' => true
  );
  
  register_post_type('nutv_shows', $args);
}

add_action('init', 'nutv_shows');

/**
 * Equipment custom post type
 */
function nutv_equipment() {
  
  $labels = array(
    'name'              => 'Equipment Box',
    'singular_name'     => 'Equipment Box',
    'add_new'           => 'Add New Equipment Box',
    'add_new_item'      => 'Add New Equipment Box',
    'edit_item'         => 'Edit Equipment Box',
    'new_item'          => 'New Equipment Box',
    'all_items'         => 'All Equipment Boxes',
    'view_item'         => 'View Equipment Box',
    'search_items'      => 'Search Equipment Boxes',
    'not_found'         =>  'No Equipment Boxes found',
    'not_found_in_trash'=> 'No Equipment oxes found in Trash', 
    'parent_item_colon' => '',
    'menu_name'         => 'Equipment'
  );
  
  $args = array(
      'labels' => $labels,
      'supports' => array('title','thumbnail','editor'),
      'public' => true
  );
  
  register_post_type('nutv_equipment', $args);
}

add_action('init', 'nutv_equipment');


/**
 * Training custom post type
 */
function nutv_training() {
  
  $labels = array(
    'name'              => 'Training Box',
    'singular_name'     => 'Training Box',
    'add_new'           => 'Add New Training Box',
    'add_new_item'      => 'Add New Training Box',
    'edit_item'         => 'Edit Training Box',
    'new_item'          => 'New Training Box',
    'all_items'         => 'All Training Boxes',
    'view_item'         => 'View Training Box',
    'search_items'      => 'Search Training Boxes',
    'not_found'         =>  'No Training Boxes found',
    'not_found_in_trash'=> 'No Training Boxes found in Trash', 
    'parent_item_colon' => '',
    'menu_name'         => 'Training'
  );
  
  $args = array(
      'labels' => $labels,
      'supports' => array('title','thumbnail','editor'),
      'public' => true
  );
  
  register_post_type('nutv_training', $args);
}

add_action('init', 'nutv_training');


/**
 * Logos custom post type
 */
function nutv_logos() {
  
  $labels = array(
    'name'              => 'Logo',
    'singular_name'     => 'Logo',
    'add_new'           => 'Add New Logo',
    'add_new_item'      => 'Add New Logo',
    'edit_item'         => 'Edit Logo',
    'new_item'          => 'New Logo',
    'all_items'         => 'All Logos',
    'view_item'         => 'View Logo',
    'search_items'      => 'Search Logo',
    'not_found'         =>  'No logos found',
    'not_found_in_trash'=> 'No logos found in Trash', 
    'parent_item_colon' => '',
    'menu_name'         => 'Logos'
  );
  
  $args = array(
      'labels' => $labels,
      'supports' => array('title','thumbnail','editor'),
      'public' => true
  );
  
  register_post_type('nutv_logos', $args);
}

add_action('init', 'nutv_logos');

/*******************************************************************************
 * Banners custom post type
 ******************************************************************************/
function nutv_banners() {
  
  $labels = array(
    'name'              => 'Banner',
    'singular_name'     => 'Banner',
    'add_new'           => 'Add New Banner',
    'add_new_item'      => 'Add New Banner',
    'edit_item'         => 'Edit Banner',
    'new_item'          => 'New Banner',
    'all_items'         => 'All Banners',
    'view_item'         => 'View Banner',
    'search_items'      => 'Search Banners',
    'not_found'         =>  'No banners found',
    'not_found_in_trash'=> 'No banners found in Trash', 
    'parent_item_colon' => '',
    'menu_name'         => 'Banners'
  );
  
  $args = array(
      'labels' => $labels,
      'supports' => array('title','thumbnail','editor'),
      'public' => true
  );
  
  register_post_type('nutv_banners', $args);
}

add_action('init', 'nutv_banners');

add_action( 'add_meta_boxes', 'nutv_banners_add_custom_box' );

/* Do something with the data entered */
add_action( 'save_post', 'nutv_banners_save_postdata' );

/* Adds a box to the main column on the Post and Page edit screens */
function nutv_banners_add_custom_box() {
    add_meta_box( 
        'nutv-banners-url-box',
        'Url',
        'nutv_banners_url_custom_box',
        'nutv_banners' 
    );
}

function nutv_banners_url_custom_box( $post ) {
  
  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'nutv_banners_nonce' );

  $meta_key = 'nutv-banners-url';
  $meta_value = get_post_meta( $post->ID, $meta_key, true );
  
  // The actual fields for data entry
  echo "<input style=\"width:85%;\" id=\"{$meta_key}\" name=\"{$meta_key}\" value=\"{$meta_value}\" >";
  
}

/* When the post is saved, saves our custom data */
function nutv_banners_save_postdata( $post_id ) {
  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times

  if ( !wp_verify_nonce( $_POST['nutv_banners_nonce'], plugin_basename( __FILE__ ) ) )
      return;

  
  // Check permissions
  if ( 'nutv_banners' != $_POST['post_type'] ) 
      return;
    
  
  if ( !current_user_can( 'edit_post', $post_id ) )
      return;
  
  nutv_banners_save_url( $post_id );
  

}

function banners_save_field( $post_id,$meta_key,$meta_value,$new_meta_value ){
  if ( $new_meta_value && '' == $meta_value ) {
    add_post_meta( $post_id, $meta_key, $new_meta_value, true );
  }
  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value ) {
    update_post_meta( $post_id, $meta_key, $new_meta_value );
  }
  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value ) {
    delete_post_meta( $post_id, $meta_key, $meta_value );
  }
}

function nutv_banners_save_url( $post_id ){
  $meta_key = 'nutv-banners-url';
  $new_meta_value = $_POST['nutv-banners-url'];
  $meta_value = get_post_meta( $post_id, $meta_key, true );
  banners_save_field( $post_id,$meta_key,$meta_value,$new_meta_value );
}



/*******************************************************************************
 * Staff custom post type
 ******************************************************************************/
function nutv_staff() {
  
  $labels = array(
    'name'              => 'Staff',
    'singular_name'     => 'Staff Member',
    'add_new'           => 'Add New Staff Member',
    'add_new_item'      => 'Add New Staff Member',
    'edit_item'         => 'Edit Staff Member',
    'new_item'          => 'New Staff Member',
    'all_items'         => 'All Staff',
    'view_item'         => 'View Staff',
    'search_items'      => 'Search Staff Members',
    'not_found'         =>  'No Staff found',
    'not_found_in_trash'=> 'No staff found in Trash', 
    'parent_item_colon' => '',
    'menu_name'         => 'Staff'
  );
  
  $args = array(
      'labels' => $labels,
      'supports' => array('title','thumbnail','editor'),
      'public' => true
  );
  
  register_post_type('nutv_staff', $args);
}

add_action('init', 'nutv_staff');

//Custom fields for staff ------------------------------------------------------
/* Define the custom box */

add_action( 'add_meta_boxes', 'nutv_staff_add_custom_box' );

/* Do something with the data entered */
add_action( 'save_post', 'nutv_staff_save_postdata' );


/* Adds a box to the main column on the Post and Page edit screens */
function nutv_staff_add_custom_box() {
    add_meta_box( 
        'nutv-staff-type-box',
        'Type',
        'nutv_staff_type_custom_box',
        'nutv_staff' 
    );
    add_meta_box( 
        'nutv-staff-title-box',
        'Job Title',
        'nutv_staff_title_custom_box',
        'nutv_staff' 
    );
    add_meta_box(
        'nutv-staff-landline-box',
        'Landline', 
        'nutv_staff_landline_custom_box',
        'nutv_staff'
    );
    add_meta_box(
        'nutv-staff-email-box',
        'Email', 
        'nutv_staff_email_custom_box',
        'nutv_staff'
    );
}

function nutv_staff_type_custom_box( $post ) {
  
  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'nutv_staff_nonce' );

  $meta_key = 'nutv-staff-type';
  $meta_value = get_post_meta( $post->ID, $meta_key, true );
  
  // The actual fields for data entry
  echo '<select id="'.$meta_key.'" name="'.$meta_key.'" >';
  
  $selected = ($meta_value == 'staff')?'selected=selected':'';
  echo '  <option '.$selected.' value="staff">Staff</option>';
  
  $selected = ($meta_value == 'executive-committee')?'selected=selected':'';
  echo '  <option '.$selected.' value="executive-committee">Executive Committee</option>';
  
  $selected = ($meta_value == 'associate-producers')?'selected=selected':'';
  echo '  <option '.$selected.' value="associate-producers">Associate Producers</option>';
  
  $selected = ($meta_value == 'board-of-directors')?'selected=selected':'';
  echo '  <option '.$selected.' value="board-of-directors">Board Of Directors</option>';
  
  $selected = ($meta_value == 'technical-assistants')?'selected=selected':'';
  echo '  <option '.$selected.' value="technical-assistants">Technical Assistants</option>';
  
  echo '</select>';
}

/* Prints the box content */
function nutv_staff_title_custom_box( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'nutv_staff_nonce' );

  $meta_key = 'nutv-staff-title';
  $meta_value = get_post_meta( $post->ID, $meta_key, true );
  
  // The actual fields for data entry
  echo '<input type="text" id="'.$meta_key.'" name="'.$meta_key.'" value="'.$meta_value.'" size="85" />';
}

/* Prints the box content */
function nutv_staff_landline_custom_box( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'nutv_staff_nonce' );

  $meta_key = 'nutv-staff-landline';
  $meta_value = get_post_meta( $post->ID, $meta_key, true );
  
  // The actual fields for data entry
  echo '<input type="text" id="'.$meta_key.'" name="'.$meta_key.'" value="'.$meta_value.'" size="85" />';
}

/* Prints the box content */
function nutv_staff_email_custom_box( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'nutv_staff_nonce' );

  $meta_key = 'nutv-staff-email';
  $meta_value = get_post_meta( $post->ID, $meta_key, true );
  
  // The actual fields for data entry
  echo '<input type="text" id="'.$meta_key.'" name="'.$meta_key.'" value="'.$meta_value.'" size="85" />';
}

/* When the post is saved, saves our custom data */
function nutv_staff_save_postdata( $post_id ) {
  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times

  if ( !wp_verify_nonce( $_POST['nutv_staff_nonce'], plugin_basename( __FILE__ ) ) )
      return;

  
  // Check permissions
  if ( 'nutv_staff' != $_POST['post_type'] ) 
      return;
    
  
  if ( !current_user_can( 'edit_post', $post_id ) )
      return;
  
  nutv_staff_save_type( $post_id );
  nutv_staff_save_title( $post_id );
  nutv_staff_save_author( $post_id );
  nutv_staff_save_link( $post_id );
  

}

function staff_save_field( $post_id,$meta_key,$meta_value,$new_meta_value ){
  if ( $new_meta_value && '' == $meta_value ) {
    add_post_meta( $post_id, $meta_key, $new_meta_value, true );
  }
  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value ) {
    update_post_meta( $post_id, $meta_key, $new_meta_value );
  }
  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value ) {
    delete_post_meta( $post_id, $meta_key, $meta_value );
  }
}

function nutv_staff_save_type( $post_id ){
  $meta_key = 'nutv-staff-type';
  $new_meta_value = $_POST['nutv-staff-type'];
  $meta_value = get_post_meta( $post_id, $meta_key, true );
  staff_save_field( $post_id,$meta_key,$meta_value,$new_meta_value );
}

function nutv_staff_save_title( $post_id ){
  $meta_key = 'nutv-staff-title';
  $new_meta_value = $_POST['nutv-staff-title'];
  $meta_value = get_post_meta( $post_id, $meta_key, true );
  staff_save_field( $post_id,$meta_key,$meta_value,$new_meta_value );
}

function nutv_staff_save_author( $post_id ){
  $meta_key = 'nutv-staff-landline';
  $new_meta_value = $_POST['nutv-staff-landline'];
  $meta_value = get_post_meta( $post_id, $meta_key, true );
  staff_save_field( $post_id,$meta_key,$meta_value,$new_meta_value );
}

function nutv_staff_save_link( $post_id ){
  $meta_key = 'nutv-staff-email';
  $new_meta_value = $_POST['nutv-staff-email'];
  $meta_value = get_post_meta( $post_id, $meta_key, true );
  staff_save_field( $post_id,$meta_key,$meta_value,$new_meta_value );
}
/*******************************************************************************
 * /Staff Custom Post Type
 ******************************************************************************/

/*******************************************************************************
 * Contests custom post type
 ******************************************************************************/
function nutv_contests() {
  
  $labels = array(
    'name'              => 'Contests',
    'singular_name'     => 'Contest',
    'add_new'           => 'Add New Contest',
    'add_new_item'      => 'Add New Contest',
    'edit_item'         => 'Edit Contest',
    'new_item'          => 'New Contest',
    'all_items'         => 'All Contests',
    'view_item'         => 'View Contest',
    'search_items'      => 'Search Contests',
    'not_found'         => 'No Contests found',
    'not_found_in_trash'=> 'No contests found in Trash', 
    'parent_item_colon' => '',
    'menu_name'         => 'Contests'
  );
  
  $args = array(
      'labels' => $labels,
      'supports' => array('title','thumbnail','editor'),
      'public' => true
  );
  
  register_post_type('nutv_contests', $args);
}

add_action('init', 'nutv_contests');

//Custom fields for staff ------------------------------------------------------
/* Define the custom box */

add_action( 'add_meta_boxes', 'nutv_contests_add_custom_box' );

/* Do something with the data entered */
add_action( 'save_post', 'nutv_contests_save_postdata' );


/* Adds a box to the main column on the Post and Page edit screens */
function nutv_contests_add_custom_box() {
    add_meta_box( 
        'nutv-contests-dates-box',
        'Contest Dates',
        'nutv_contests_dates_custom_box',
        'nutv_contests' 
    );
    add_meta_box( 
        'nutv-contests-question-box',
        'Contest Question',
        'nutv_contests_question_custom_box',
        'nutv_contests' 
    );
    add_meta_box(
        'nutv-contests-prize-box',
        'Prize Details', 
        'nutv_contests_prize_custom_box',
        'nutv_contests'
    );
}

function nutv_contests_dates_custom_box( $post ) {
  
  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'nutv_contests_nonce' );

  $meta_key1 = 'nutv-contests-start-date';
  $meta_value1 = get_post_meta( $post->ID, $meta_key1, true );
  
  $meta_key2 = 'nutv-contests-end-date';
  $meta_value2 = get_post_meta( $post->ID, $meta_key2, true );
  
  //Needed scripts
  echo '<script type="text/javascript" src="'.  get_bloginfo('stylesheet_directory') .
          '/javascript/jquery-ui-1.8.18.custom/js/jquery-ui-1.8.18.custom.min.js"></script>';
  echo '<link rel="stylesheet" type="text/css" href="'.  get_bloginfo('stylesheet_directory') .
          '/javascript/jquery-ui-1.8.18.custom/css/ui-darkness/jquery-ui-1.8.18.custom.css" />';
  echo '<script>';
  echo 'jQuery(function() {';
  echo '  jQuery( ".datepicker" ).datepicker({ dateFormat: \'yy-mm-dd\' });';
  echo '});';
  echo '</script>';
  
  // The actual fields for data entry
  echo '<table>';
  echo '  <tr><td>Start Date:</td><td><input class="datepicker" type="text" id="'.
            $meta_key1.'" name="'.$meta_key1.'" value="'.$meta_value1.'" /></td></tr>';
  echo '  <tr><td>End Date:</td><td><input class="datepicker" type="text" id="'.
            $meta_key2.'" name="'.$meta_key2.'" value="'.$meta_value2.'" /></td></tr>';
  echo '</table>';
}

/* Prints the box content */
function nutv_contests_question_custom_box( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'nutv_contests_nonce' );

  $meta_key = 'nutv-contests-question';
  $meta_value = get_post_meta( $post->ID, $meta_key, true );
  
  // The actual fields for data entry
  echo '<textarea style="width:100%; height:100px;" rows="5" id="'.$meta_key.'" name="'.$meta_key.'" >';
  echo $meta_value;
  echo '</textarea>';
}

/* Prints the box content */
function nutv_contests_prize_custom_box( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'nutv_contests_nonce' );

  $meta_key = 'nutv-contests-prize';
  $meta_value = get_post_meta( $post->ID, $meta_key, true );
  
  // The actual fields for data entry
  echo '<textarea style="width:100%; height:100px;" rows="5" id="'.$meta_key.'" name="'.$meta_key.'" >';
  echo $meta_value;
  echo '</textarea>';
}



/* When the post is saved, saves our custom data */
function nutv_contests_save_postdata( $post_id ) {
  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times

  if ( !wp_verify_nonce( $_POST['nutv_contests_nonce'], plugin_basename( __FILE__ ) ) )
      return;

  
  // Check permissions
  if ( 'nutv_contests' != $_POST['post_type'] ) 
      return;
    
  
  if ( !current_user_can( 'edit_post', $post_id ) )
      return;
  
  nutv_contests_save_start_date( $post_id );
  nutv_contests_save_end_date( $post_id );
  nutv_contests_save_question( $post_id );
  nutv_contests_save_prize( $post_id );
  

}

function contests_save_field( $post_id,$meta_key,$meta_value,$new_meta_value ){
  if ( $new_meta_value && '' == $meta_value ) {
    add_post_meta( $post_id, $meta_key, $new_meta_value, true );
  }
  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value ) {
    update_post_meta( $post_id, $meta_key, $new_meta_value );
  }
  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value ) {
    delete_post_meta( $post_id, $meta_key, $meta_value );
  }
}

function nutv_contests_save_start_date( $post_id ){
  $meta_key = 'nutv-contests-start-date';
  $new_meta_value = $_POST[$meta_key ];
  $meta_value = get_post_meta( $post_id, $meta_key, true );
  contests_save_field( $post_id,$meta_key,$meta_value,$new_meta_value );
}

function nutv_contests_save_end_date( $post_id ){
  $meta_key = 'nutv-contests-end-date';
  $new_meta_value = $_POST[$meta_key];
  $meta_value = get_post_meta( $post_id, $meta_key, true );
  contests_save_field( $post_id,$meta_key,$meta_value,$new_meta_value );
}

function nutv_contests_save_question( $post_id ){
  $meta_key = 'nutv-contests-question';
  $new_meta_value = $_POST[$meta_key];
  $meta_value = get_post_meta( $post_id, $meta_key, true );
  contests_save_field( $post_id,$meta_key,$meta_value,$new_meta_value );
}

function nutv_contests_save_prize( $post_id ){
  $meta_key = 'nutv-contests-prize';
  $new_meta_value = $_POST[$meta_key];
  $meta_value = get_post_meta( $post_id, $meta_key, true );
  contests_save_field( $post_id,$meta_key,$meta_value,$new_meta_value );
}

/*******************************************************************************
 * /Staff Custom Post Type
 ******************************************************************************/


/*******************************************************************************
 * Contests form processing
 ******************************************************************************/

/**
 * Main function to process a form submission
 * @param type $post_arr
 * @return boolean 
 */
function process_contest_submission($post_arr) {
  
  //validate entry
  $valid = validate_contest_submission($post_arr);
  if( true === $valid ) {
    
    //if validates: save entry
    save_contest_entry($post_arr);
    
    //if validates: email entry
    email_contest_entry($post_arr);
    
    //if validates: return true
    return true;
    
  }
  //if not validates: return errors
  return $valid;
  
}

/*
 * function to take post values, validate and return.
 * @param $post_arr - a $_POST array
 * @return mixed - true if validation succeeds, an array of key/value pairs of 
 * errors
 */
function validate_contest_submission($post_arr){
  $errors = array();
  if(false == validateText($post_arr['name'])){
    $errors['name'] = 'Please enter a valid name.';
  }
  if(false == validateEmail($post_arr['email'])){
    $errors['email'] = 'Please enter a valid email.';
  }
  if(false == validateText($post_arr['entry-textarea'])){
    $errors['entry-textarea'] = 'Please enter a valid reason.';
  }
  if(false == isset($post_arr['student']) || false == validateStudent($post_arr['student'])){
    $errors['student'] = 'Please choose yes or no.';
  }
  if($post_arr['student'] == 'yes' && false == validateText($post_arr['student-id'])){
    $errors['student-id'] = 'Please enter a valid student id.';
  }
  if(false == isset($post_arr['confirmation'])){
    $errors['confirmation'] = 'Please confirm.';
  }
  
  
  return ( count($errors) == 0 ) ? true : $errors;
}

/**
 * saves fields to database
 * @param $post_arr - array of values to be saved
 * @return boolean - true on success, false otherwise
 */
function save_contest_entry($post_arr){
  
}

/**
 * emails contests@nutv.ca with entry
 * @param type $post_arr
 * @return boolean - true on success, false otherwise
 */
function email_contest_entry($post_arr){
  $subject = 'You have received a new contest entry';
  $message = '';
  foreach ($post_arr as $key => $value) {
    $key = ucfirst(str_replace('-', ' ', $key));
    $message .= $key.':'.$value."\n";
  }
  mail('digitalsadhu@gmail.com',$subject,$message);
}


/**
 * Validation functions
 *  
 */

function validateText($name){  
  //if it's NOT valid  
  if(strlen($name) < 1)  
      return false;  
  //if it's valid  
  else  
      return true;  
}  
function validateEmail($email){  
    return ereg("^[a-zA-Z0-9]+[a-zA-Z0-9_-]+@[a-zA-Z0-9]+[a-zA-Z0-9.-]+[a-zA-Z0-9]+.[a-z]{2,4}$", $email);  
} 
function validateStudent($student){
  if($student == 'yes' || $student == 'no') {
    return true;
  }
  return false;
}
