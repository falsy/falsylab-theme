<?php get_header(); ?>
<div id="post-<?php the_ID() ; ?>" <?php post_class('overview'); ?>>
  <?php while ( have_posts() ) : the_post(); ?>
  <header>
    <div id="home"><a href="<?php echo home_url(); ?>"><img src="https://lab.falsy.me/wp-content/uploads/2018/10/falsylab-icon-v2.png" alt="cheolguso logo" width="24"/></a></div>
    <div class="container">
      <h1><?php the_title(); ?></h1>
      <p class="post_date highlight_color"><?php the_date('Y-m-d'); ?></p>
    </div>
  </header>
  <div class="container">
    <?php the_content(); ?>

  <div class="footer-google">
    <p class="ad-title">Advertisement</p>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- single-footer-ad -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-8365775889087902"
         data-ad-slot="7799276196"
         data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
  </div>

    <?php comments_template(); ?>
  <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>