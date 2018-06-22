<?php get_header(); ?>
<?php 
   $category = get_the_category( $id );
   $category = $category[0] -> name;
?>
<section id="page_content">
    <div class="container">
        <div class="col_box">
            <div class="navigation"><span>Home</span> &nbsp;/&nbsp; <span class="last"><?php echo $category; ?></span></div>
			<section id="post-<?php the_ID() ; ?>" <?php post_class('overview'); ?>>
					<h1><?php the_title(); ?></h1>
					<?php while ( have_posts() ) : the_post(); ?>
					    <div class="view_like_box">
                            <p><i class="fa fa-eye"></i>&nbsp; <?php echo_post_views(get_the_ID()); ?></p>
                            <?php echo ldclite_addPostLike($content); ?>
                        </div>
					<?php the_content(); ?>
					<p class="post_date highlight_color"><?php the_date('Y-m-d'); ?></p>
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
<?php get_footer(); ?>