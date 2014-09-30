<?php
/**
 * new functions and definitions
 *
 * @package nutv2014
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'new_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function new_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on new, use a find and replace
	 * to change 'new' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'new', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'new' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Setup the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'new_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // new_setup
add_action( 'after_setup_theme', 'new_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function new_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'new' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'new_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function new_scripts() {
	wp_enqueue_style( 'new-style', get_stylesheet_uri() );

	wp_enqueue_script( 'new-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'new-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'new_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * custom sidebar
 */

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
 * Events custom post type
 ******************************************************************************/
function nutv_events() {
  
  $labels = array(
    'name'              => 'Events',
    'singular_name'     => 'Event',
    'add_new'           => 'Add New Event',
    'add_new_item'      => 'Add New Event',
    'edit_item'         => 'Edit Event',
    'new_item'          => 'New Event',
    'all_items'         => 'All Events',
    'view_item'         => 'View Event',
    'search_items'      => 'Search Events',
    'not_found'         => 'No Events found',
    'not_found_in_trash'=> 'No Events found in Trash', 
    'parent_item_colon' => '',
    'menu_name'         => 'Events'
  );
  
  $args = array(
      'labels' => $labels,
      'supports' => array('title','thumbnail','editor'),
      'public' => true
  );
  
  register_post_type('nutv_events', $args);
}

add_action('init', 'nutv_events');

//Custom fields for Events ------------------------------------------------------
/* Define the custom box */

add_action( 'add_meta_boxes', 'nutv_events_add_custom_box' );

/* Do something with the data entered */
add_action( 'save_post', 'nutv_event_save_postdata' );


/* Adds a box to the main column on the Post and Page edit screens */
function nutv_events_add_custom_box() {
    add_meta_box( 
        'nutv-event-date-box',
        'Event Date',
        'nutv_event_date_custom_box',
        'nutv_events' 
    );
}


/* Prints the box content */
function nutv_event_date_custom_box( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'nutv_event_nonce' );

  $meta_key = 'nutv-event-date';
  $meta_value = get_post_meta( $post->ID, $meta_key, true );
  
  // The actual fields for data entry
  echo '<input type="text" id="'.$meta_key.'" name="'.$meta_key.'" value="'.$meta_value.'" size="85" />';
}

/* When the post is saved, saves our custom data */
function nutv_event_save_postdata( $post_id ) {
  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times

  if ( !wp_verify_nonce( $_POST['nutv_event_nonce'], plugin_basename( __FILE__ ) ) )
      return;

  
  // Check permissions
  if ( 'nutv_events' != $_POST['post_type'] ) 
      return;
    
  
  if ( !current_user_can( 'edit_post', $post_id ) )
      return;
  
  nutv_event_save_date( $post_id );

}

function event_save_field( $post_id,$meta_key,$meta_value,$new_meta_value ){
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

function nutv_event_save_date( $post_id ){
  $meta_key = 'nutv-event-date';
  $new_meta_value = $_POST['nutv-event-date'];
  $meta_value = get_post_meta( $post_id, $meta_key, true );
  event_save_field( $post_id,$meta_key,$meta_value,$new_meta_value );
}

/*******************************************************************************
 * /Events Custom Post Type
 ******************************************************************************/

// Custom Taxonomy
function add_custom_taxonomies() {
  // Add new "Locations" taxonomy to Posts
  register_taxonomy('nutv_event_category', 'nutv_events', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Event Categories', 'taxonomy general name' ),
      'singular_name' => _x( 'Event Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Categories' ),
      'all_items' => __( 'All Categories' ),
      'edit_item' => __( 'Edit Category' ),
      'update_item' => __( 'Update Category' ),
      'add_new_item' => __( 'Add New Category' ),
      'new_item_name' => __( 'New Category Name' ),
      'menu_name' => __( 'Event Categories' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'event_categories', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => false // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_custom_taxonomies', 0 );