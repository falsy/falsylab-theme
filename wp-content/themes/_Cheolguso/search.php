<?php get_header(); ?>
<section id="page_content">
    <div class="container">
        <div class="col_box">
            <div class="navigation">Search results for / <span class="last"> <?php the_search_query(); ?> </span></div>
            <?php if( have_posts() ) : ?>
            <?php while( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID() ; ?>" <?php post_class('col'); ?>>
                    <div class="post_img"><?php the_post_thumbnail(); ?>
	    				<div class="post_text">
	    				    <div class="thumb_view">
	    						<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	        					<div class="thumb_text">
	        					    <a href="<?php the_permalink() ?>"><?php echo the_excerpt() ?></a>
	        					</div>
	    					</div>
	    				</div>
    				</div>
                    <div class="view_like_box">
                        <i class="fa fa-eye"></i>&nbsp;<?php echo_post_views_not_counted(get_the_ID()); ?>&nbsp;&nbsp;&nbsp;
                        <?php
                        if(function_exists('like_counter_p')) { like_counter_p('text for like'); }
                        ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php endif; ?>
            <div style="clear:left;"></div>
       </div>
       <div class="col sidebar">
           <?php get_sidebar(); ?>
       </div>
       <div style="clear:left;"></div>
    </div>
</section>
<?php get_footer(); ?>