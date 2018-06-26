<?php
/* Template Name: cheoguso home page */
?>
<?php get_header(); ?>
<header id="page_header">
  <div class="container">
    <p>Cheol’s Laboratory</p>
    <h1><a href="<?php echo home_url(); ?>">CHEOL<span class="highlight_color">’</span>GUSO</a></h1>
    <nav>
      <a href="/lab1">LAB1</a>
      <a href="/lab2">LAB2</a>
    </nav>
  </div>
</header>
<section id="page_content">
  <div class="container">
    <div class="col_box_full">
      <?php
        $args = array(
        'post_type'    => 'post',
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
      <?php endif; ?>
      <?php wp_reset_query(); ?>
     </div>
  </div>
</section>
<?php get_footer(); ?>