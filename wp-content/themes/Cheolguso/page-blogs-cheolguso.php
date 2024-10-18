<?php
/* Template Name: Blogs Page*/
?>
<?php get_header(); ?>
<section id="page_content">
  <div class="container">
    <div class="col_box_full">
        <?php
          $args = array(
            'cat' => 281,
            'post_type' => 'post'
          );
          $lab_query = new WP_Query($args);

          if($lab_query->have_posts()) :
          while($lab_query->have_posts()) :
          $lab_query->the_post();
        ?>
          <article id="post-<?php the_ID() ; ?>" <?php post_class('col'); ?>>
            <div>
              <div>
                <div class="post_content_box">
                  <figure>
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                  </figure>
                  <h2 class="thumb_text">
                    <a href="<?php the_permalink() ?>"><?php echo the_excerpt() ?></a>
                  </h2>
                  <div class="post_date">
                    <span><?php echo get_the_date('Y-m-d'); ?></span>
                  </div>
                </div>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
        <?php else: ?>
          <article class="col">
            <div>
              <p>글이 없습니다.</p>
            </div>
          </article>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
   </div>
  </div>
</section>
<?php get_footer(); ?>