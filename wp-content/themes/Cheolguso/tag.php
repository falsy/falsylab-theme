<?php
/* Template Name: tag page */
?>
<?php get_header(); ?>
<section id="page_content">
  <div class="container">
    <h2 class="search-tag-title">Search for tag, <span>'#<?php single_tag_title(); ?>'</span></h2>
    <div class="col_box_full">
      <?php
      while ( have_posts() ) :
       ?>
        <article id="post-<?php the_ID() ; ?>" <?php post_class('col'); ?>>
          <div>
            <div>
              <div class="post_content_box">
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
      <?php endwhile; ?>
     </div>
  </div>
</section>
<?php get_footer(); ?>