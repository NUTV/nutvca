<?php


/*
Plugin Name: Sidebar Selector
Plugin URI: http://digitalsadhu.com/plugins
Description: Adds a select box to each page to allow a sidebar to be associated with that page.
Version: 1.0
Author: Richard Walker
Author URI: http://digitalsadhu.com
License: GPL2
*/


/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function get_registered_sidebars(){
  
  //Get the options for the sidebars select box.
  global $wp_registered_sidebars;

  //Rework sidebars array into options array
  foreach($wp_registered_sidebars as $sidebar){ 
    $options[] = $sidebar['name'];
  }
  
  return $options;
}


function get_sidebar_selector_args() {
  
  //Create the fields to be displayed on the meta box
  $sidebar_selector_fields = array(
      array(
          'name'  => 'sidebars',
          'desc'  => 'Select which sidebar will display on this page.',
          'id'    => 'sidebar_selector_sidebars',
          'type'  => 'select',
          'options'   => get_registered_sidebars()
      )
  );


  $sidebar_selector_boxes = array (
      'id' => 'page-sidebar',
      'title' => 'Page Sidebar',
      'callback' => 'display_sidebar_metabox',
      'page' => 'page',
      'context' => 'side',
      'priority' => 'low',
      'fields' => $sidebar_selector_fields
  );
  
  return $sidebar_selector_boxes;
  
}



function add_page_sidebar_metabox() {

  $sidebar_selector_boxes = get_sidebar_selector_args();
  
  add_meta_box ( 
      $sidebar_selector_boxes['id'], 
      $sidebar_selector_boxes['title'], 
      $sidebar_selector_boxes['callback'],
      $sidebar_selector_boxes['page'], 
      $sidebar_selector_boxes['context'], 
      $sidebar_selector_boxes['priority']
  );
  
}

// Hook things in
add_action('admin_menu', 'add_page_sidebar_metabox', 20);



function display_sidebar_metabox () {

  global $post;

  $sidebar_selector_boxes = get_sidebar_selector_args();

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'sidebar_selector_sidebars_nonce' );
  
  
  $sidebar_selector = $sidebar_selector_boxes['fields'][0];
  
  // get current post meta data
  $meta = get_post_meta($post->ID, $sidebar_selector['id'], true);
  
  
  ?>
  <table class="form-table">
    <tr>
      <th style="width:20%">
        <label for="<?php echo $sidebar_selector['id']; ?>"><?php echo $sidebar_selector['name']; ?></label>
      </th>
      <td>
        <select name="<?php echo $sidebar_selector['id']; ?>" id="<?php echo $sidebar_selector['id']; ?>">
          <?php foreach ($sidebar_selector['options'] as $option) : ?>
            <option <?php echo ($meta == $option) ? ' selected="selected"' : ''; ?> >
              <?php echo $option; ?>
            </option>
          <?php endforeach; ?>
        </select><br />
        <?php echo $sidebar_selector['desc']; ?>
      <td>
    </tr>
  </table>
  <?php
}





  // Save data from meta box
  function sidebar_selector_save_data($post_id) {

    //bring wadsco boxes array into context
    $sidebar_selector_boxes = get_sidebar_selector_args();

    //nonce security
    if ( !wp_verify_nonce( $_POST['sidebar_selector_sidebars_nonce'],
            plugin_basename( __FILE__ ) ) ) {
      return;
    }
    
    // don't appy during autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
      return $post_id;
    }

    // check the current user has permissions to edit
    if (!current_user_can('edit_page', $post_id)) {
      return $post_id;
    }
    
    //Save the data
    foreach ($sidebar_selector_boxes['fields'] as $field) {
      
      $old = get_post_meta($post_id, $field['id'], true);
      $new = $_POST[$field['id']];

      if ($new && $new != $old) {
        
        update_post_meta($post_id, $field['id'], $new);
        
      } elseif ('' == $new && $old) {
        
        delete_post_meta($post_id, $field['id'], $old);
        
      }
      
    }
    
    
  }

  //add the save function
  add_action('save_post', 'sidebar_selector_save_data');
