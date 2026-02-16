

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="container">

    <article class="post-content">

      <div class="post-header">
        <div class="post-meta">
          <span class="post-date"><?php echo get_the_date('d M Y'); ?> | <?php echo human_time_diff( get_post_time('U'), current_time('timestamp') ); ?> назад</span>
        </div>
      </div>

      <?php the_title(); ?>

      <div class="post-thumbnail">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>

        <div class="post-text"><?php the_content(); ?></div>
      </div>
      
    </article>

  </div>
</article>

