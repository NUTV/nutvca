<?php
/**
 * This is the main page template that covers the bulk of pages including
 * the site front page which is handled with has some extra content included
 * with the is_front_page() tag.
 * 
 * PHP version 5.3
 * 
 * @category Templates
 * @package  Templates
 * @author   Richard Walker <richie@mediasuite.co.nz>
 * @license  http://mediasuite.co.nz Mediasuite
 * @link     http://mediasuite.co.nz 
 */
?>
<?php get_header(); ?>

<!-- Front page content -->
<?php if (is_front_page()): ?>
    <?php require 'backend/banner_rotator_frontend_partial.php'; ?>
    <!-- BANNER-ROTATOR :: this line needs to be set depending on local or 
    remote usage -->
<?php endif; ?><!-- End front page content -->

<div class="clearer"></div>

<!--Left Col-->
<div id="leftCol_front">
    <?php if (have_posts()) :
        while (have_posts()) :
            ?>
            <h1><?php the_title(); ?></h1>
            <?php the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
    endif;
    ?>
</div>

<!--Right Col-->
<div id="rightCol">

<?php get_sidebar(); ?>

</div>
<!--Footer-->
<?php get_footer(); ?>
<!-- end #container --></div>
<?php //include 'includes/google_analytics.php';  ?>   
</body>
</html>
