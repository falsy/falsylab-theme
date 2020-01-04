<?php get_header(); ?>
<div id="post-<?php the_ID() ; ?>" <?php post_class('overview'); ?>>
  <?php while ( have_posts() ) : the_post(); ?>
  <header>
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <p class="post_date highlight_color"><?php the_date('Y-m-d'); ?></p>
    </div>
    <div id="back-arrow-btn"><a href="<?php echo home_url(); ?>">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.49 31.49" xml:space="preserve">
        <path style="fill:#1E201D;" d="M21.205,5.007c-0.429-0.444-1.143-0.444-1.587,0c-0.429,0.429-0.429,1.143,0,1.571l8.047,8.047H1.111  C0.492,14.626,0,15.118,0,15.737c0,0.619,0.492,1.127,1.111,1.127h26.554l-8.047,8.032c-0.429,0.444-0.429,1.159,0,1.587  c0.444,0.444,1.159,0.444,1.587,0l9.952-9.952c0.444-0.429,0.444-1.143,0-1.571L21.205,5.007z"></path>
      </svg>
    </a></div>
  </header>
  <div class="container">
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>

    <?php the_content(); ?>


    <div id="other-posts">
      <h3>Other posts</h3>
      <div class="other-posts-container">
        <?php
        $args = array(
        'cat' => 7,
        'post_type'    => 'post',
        'orderby' => 'rand',
        'posts_per_page' => 3,
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
        <div style="clear:left;"></div>
      </div>
    </div>

    <div class="footer-google">
      <p class="ad-title">Advertisement</p>
      <!-- single-footer-ad -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-8365775889087902"
           data-ad-slot="7799276196"
           data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      <div class="donate-text">
        <p>광고 수익금은 소년소녀가정에 기부됩니다.</p>
      </div>
    </div>

    <?php comments_template(); ?>
  <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>