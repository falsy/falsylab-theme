<article id="post-<?php the_ID() ; ?>" <?php post_class('col'); ?>>
  <div>
    <div>
      <div class="post_content_box">
        <figure>
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        </figure>
        <div class="thumb_text">
          <p><a href="<?php the_permalink() ?>"><?php echo get_the_excerpt() ?></a></p>
        </div>
        <div class="post_date">
          <span><?php echo get_the_date('Y-m-d'); ?></span>
        </div>
      </div>
    </div>
  </div>
</article>