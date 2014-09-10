<?php 
$processed = null; 

//postback
if( $_POST['submit'] ){
  $processed = process_contest_submission($_POST);
  if( true === $processed ){
    $entry_complete = true;
  }
  else {
    $error = $processed;
  }
}

?>

      <!--header--> 
      <?php get_header(); ?>
      <?php //include('backend/banner_rotator_frontend_partial.php'); ?>
      <!-- BANNER-ROTATOR :: this line needs to be set depending on local or remote usage -->
          
        <div class="clearer"></div>
        
        <!--Left Col-->
        <div id="leftCol_front" style="width: 100%">
          
          <?php if (have_posts()) : while (have_posts()) : the_post(); 
            $page_title = get_the_title();
          ?>
          <h1><?php the_title(); ?></h1>
          <?php the_post_thumbnail(array(870,870)); ?>
          <div><?php the_content(); ?></div>
          <?php endwhile; endif; ?>
          
          <?php if( false == isset($entry_complete) ): ?>
          <!-- Form un-submitted, display form -->
          <div id="contest-form">
            <form action="<?php $_SERVER['php_self']; ?>" method="post" >
              <input type="hidden" name="contest-title" value="<?php echo $page_title; ?>" />
              <input type="hidden" name="post-id" value="<?php global $post; echo $post->ID; ?>" />
              <div>
                <p><label for="name">Please enter your name</label></p>
                <p><input id="name" type="text" name="name" value="<?php echo $_POST['name']; ?>" /></p>
                <p class="error"><?php if( isset($error['name']) ) echo $error['name']; ?></p>
              </div>
              <div>
                <p><label for="email">Please enter your email</label></p>
                <p><input id="email" type="text" name="email" value="<?php echo $_POST['email']; ?>" /></p>
                <p class="error"><?php if( isset($error['email']) ) echo $error['email']; ?></p>
              </div>
              <div>
                <p><label for="entry-textarea">Please tell us in 100 words or less why you should win</label></p>
                <p><textarea id="entry-textarea" name="entry-textarea"><?php echo $_POST['entry-textarea']; ?></textarea></p>
                <p class="error"><?php if( isset($error['entry-textarea']) ) echo $error['entry-textarea']; ?></p>
              </div>
              <div>
                <label>U of C Student:</label>
                <input  type="radio" name="student" value="yes" checked="checked" /> Yes
                <input type="radio" name="student" value="no" <?php if( $_POST['student'] == 'no' ) echo 'checked=checked' ?> /> No
                <p class="error"><?php if( isset($error['student']) ) echo $error['student']; ?></p>
              </div>
              <div>
                <p><label>Student ID:</label></td></p>
                <p><input type="text" name="student-id" id="student_id" value="<?php echo $_POST['student-id']; ?>" /></p>
                <p class="error"><?php if( isset($error['student-id']) ) echo $error['student-id']; ?></p>
              </div>
              <div>
                <input class="required" type="checkbox" name="confirmation" id="confirmation1" 
                  <?php if( isset($_POST['confirmation']) ) echo 'checked=checked' ?> />
                <label>I have read and understand the Contest Rules and Regulations 
                  <a href="<?php bloginfo('wpurl'); ?>/nutv-contest-regulations">Contest Regulations</a></label>
                <p class="error"><?php if( isset($error['confirmation']) ) echo $error['confirmation']; ?></p>
              </div>
              <div>
                <input type="checkbox" name="newsletter-confirmation" id="newsletter-confirmation" 
                  <?php if( isset($_POST['newsletter-confirmation']) ) echo 'checked=checked' ?> />
                <label>Yes, I want the latest NUTV contest information, sign me up for the NUTV 
                  Loves Students Newsletter! (approximately once monthly)</label>
              </div>
              <div>
                <p><input type="submit" name="submit" value="submit" /></p>
              </div>
            </form>
          </div>
          <?php endif; ?>
          
          
          <?php if( isset($entry_complete) ): ?>
          <!-- Form submitted, display thank-you -->
          <div id="contest-entered">
            Thanks for your entry! We have received your submission and will be processing
            it shortly. If you win, we'll be sure to let you know!
          </div>
          <?php endif; ?>
          
        </div>
        <!--Footer-->
        <?php get_footer(); ?>
        <!-- end #container --></div>
      <?php //include 'includes/google_analytics.php'; ?>   
  </body>
</html>
