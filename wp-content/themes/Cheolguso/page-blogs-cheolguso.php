<?php
/* Template Name: Blogs Page*/
?>
<?php get_header(); ?>
<section id="page_content">
    <div class="container">
        <h2>제가 좋아하는 블로그를 소개합니다.</h2>
        <div class="col_box_full">
            <?php
              $args = array(
                'cat' => 111,
                'post_type'      => 'post',
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
                          <?php the_post_thumbnail(); ?>
                        </figure>
                        <h2><?php the_title(); ?></h2>
                        <div class="thumb_text">
                          <?php echo the_excerpt() ?>
                        </div>
                      </div>
                      <a href="<?php the_permalink() ?>">link area</a>
                    </div>
                  </div>
                </article>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
       </div>
    </div>
</section>
<?php get_footer(); ?>