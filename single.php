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
          <p class="ad-title">Advertisement</p>
          <div class="first_ad_container">
            <!-- content_footer -->
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
          </div>
        </div>
        <?php comments_template(); ?>
        <?php endwhile; ?>
      </section>
    </div>
    <div class="col sidebar">
      <?php get_sidebar(); ?>
    </div>
    <div style="clear:left;"></div>
  </div>
</section>
<section>
  <?php //echo do_shortcode('[cgs_post_list]'); ?>
</section>
<?php get_footer(); ?>