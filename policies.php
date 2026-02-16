<?php
/*
Template Name: Policies
Template Post Type: page
*/

get_header();
?>

  <div class="policies">
    <div class="container">
      <?php echo construct_breadcrumb( ' | ', 'Home' ); ?>

      <?php 
        if ( have_rows('policies') ) : while ( have_rows('policies') ) : the_row(); 
          $title = get_sub_field('title');
          $content = get_sub_field('content');
      ?>
        <div class="policies-wrap">
          <div class="policies-title-block">
            <h2 class="policies-title"><?php echo esc_html($title);?></h2>
          </div>
          <div class="policies-content">
            <?php echo ($content); ?>
          </div>
        </div>
      <?php endwhile;
        endif; 
      ?>
      
    </div>
  </div>

<?php get_footer();?>