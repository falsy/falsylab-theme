<?php get_header(); ?>
<?php
   $category = get_the_category( $id );
   $category = $category[0] -> name;
?>
<section id="page_content">
  <div class="container">
    <div class="col_box">
      <section id="post-<?php the_ID() ; ?>" <?php post_class('overview'); ?>>
        <h1><?php the_title(); ?></h1>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <p class="post_date highlight_color"><?php the_date('Y-m-d'); ?></p>
        <div class="footer_sidebar">
          <!-- <p class="ad-title">Advertisement</p>
          <div class="first_ad_container">
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-8365775889087902"
                 data-ad-slot="7108132781"
                 data-ad-format="auto"></ins>
            <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
          </div>
          <div class="donate-text">
            <p>광고 수익금 전액은 우리 주위의 소년소녀가정을 위해 사용됩니다.</p>
          </div> -->
        </div>
          <?php comments_template(); ?>
          <?php endwhile; ?>
        <div id="other-posts">
          <h3>Other posts</h3>
          <div class="other-posts-container">
            <?php
            $args = array(
            // 'cat' => 7,
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
      </section>
    </div>
    <div class="col sidebar">
      <?php get_sidebar(); ?>
    </div>
    <div style="clear:left;"></div>
  </div>
</section>

<?php get_footer(); ?>