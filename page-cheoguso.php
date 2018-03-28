<?php
/* Template Name: basic page */
?>
<?php get_header(); ?>
<section id="page_content">
    <div class="container">
        <div class="col_box">
            <section id="<?php echo the_title(); ?>" <?php post_class('overview'); ?>>
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </section>
       </div>
       <div class="col sidebar">
           <?php get_sidebar(); ?>
       </div>
       <div style="clear:left;"></div>
    </div>
</section>
<?php get_footer(); ?>