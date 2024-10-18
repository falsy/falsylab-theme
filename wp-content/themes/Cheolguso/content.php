<article id="post-<?php the_ID() ; ?>" <?php post_class('col'); ?>>
  <div>
    <div>
      <div class="post_content_box">
        <figure>
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
        </figure>
        <h2 class="thumb_text">
          <a href="<?php the_permalink() ?>"><?php the_excerpt() ?></a>
        </h2>
        <div class="post_date">
          <span><?php echo get_the_date('Y-m-d'); ?></span>
        </div>
      </div>
    </div>
  </div>
</article>