 <?php
/**
 * The template for contact page
 *
 * @package nutv2014
 */

get_header(); ?>

<section class="left">

<?php while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'content', 'page' ); ?>

<?php endwhile; // end of the loop. ?>

</section>

<?php get_sidebar(); ?>

<div id="staff" class="clear">


<?php 

// // show board of directors
query_posts(array('numberposts' => -1,
                  'order'       => 'ASC',
                  'post_type'   => 'nutv_staff',
                  'meta_key'    => 'nutv-staff-type', 
                  'meta_value'  => 'board-of-directors' )); 

if (have_posts()) : while (have_posts()) : the_post(); ?>
              
    <div class="staff-member left member-list">

        <div class="staff-member-img">
            <h2><?php the_title(); ?></h2>
        </div>
       
        <h2><?php the_title(); ?></h2>

        <div><?php the_content();?></div>
    </div>
              
<?php endwhile; endif; ?>

<?

// show executive committee

query_posts(array('numberposts' => -1,
                  'order'       => 'ASC',
                  'post_type'   => 'nutv_staff',
                  'meta_key'    => 'nutv-staff-type', 
                  'meta_value'  => 'executive-committee' )); 

if (have_posts()) : while (have_posts()) : the_post(); ?>
              
    <div class="staff-member left member-list">

        <div class="staff-member-img">
            <h2><?php the_title(); ?></h2>
        </div>
       
        <h2><?php the_title(); ?></h2>

        <div><?php the_content();?></div>
    </div>
              
<?php 
endwhile; endif; 

// show staff member elements
query_posts(array('numberposts' => -1,
                  'order'       => 'ASC',
                  'post_type'   => 'nutv_staff',
                  'meta_key'    => 'nutv-staff-type', 
                  'meta_value'  => 'staff' )); 

if (have_posts()) : while (have_posts()) : the_post(); 

    $title = get_post_meta($post->ID, 'nutv-staff-title', true);
    $landline = get_post_meta($post->ID, 'nutv-staff-landline', true);
    $email = get_post_meta($post->ID, 'nutv-staff-email', true); 

?>
              
    <div class="staff-member left">

    	<?php if(has_post_thumbnail()) {
    	
          echo '<div class="staff-member-img">';
        	the_post_thumbnail(array(250,250));
        	echo '</div>';

        };?>
        
        <h2><?php the_title(); ?></h2>
        
        <?php 
            if(!empty($title)) echo '<h4 class="job">'.$title.'</h4>';
            if(!empty($landline)) echo '<p class="contact">Landline: '.$landline.'</p>';
            if(!empty($email)) echo '<p class="contact">Email: <a href="mailto:'.$email.'">'.$email.'</a></p>';
        ?>

        <div><?php the_content();?></div>
    </div>
              
<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>