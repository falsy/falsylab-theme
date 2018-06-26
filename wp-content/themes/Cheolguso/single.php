<?php get_header(); ?>
<div id="post-<?php the_ID() ; ?>" <?php post_class('overview'); ?>>
  <?php while ( have_posts() ) : the_post(); ?>
  <header>
    <div id="home"><a href="<?php echo home_url(); ?>">C<span class="highlight_color">’</span></a></div>
    <div class="container">
      <figure>
        <?php the_post_thumbnail(); ?>
      </figure>
      <h1><?php the_title(); ?></h1>
      <p class="post_date highlight_color"><?php the_date('Y-m-d'); ?></p>
    </div>
  </header>
  <div class="container">
    <?php the_content(); ?>
    <?php comments_template(); ?>
  <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>