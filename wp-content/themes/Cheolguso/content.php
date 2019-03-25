<article id="post-<?php the_ID() ; ?>" <?php post_class('col'); ?>>
  <div>
    <div>
      <div class="post_content_box 123">
        <figure>
          <?php the_post_thumbnail(); ?>
        </figure>
        <h2 class="thumb_text">
          <?php echo the_excerpt() ?>
        </h2>
        <div class="post_date">
          <span><?php echo get_the_date('Y-m-d'); ?></span>
        </div>
      </div>
      <a href="<?php the_permalink() ?>">link area</a>
    </div>
  </div>
</article>