<?php get_header(); ?>

<?php

$post_arg = array(
                'orderby' => 'rand',
            );
?>


<main id="page_content">
    <div class="container">
        <?php $temp = query_posts($post_arg); ?>
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <section id="post-<?php the_ID() ; ?>">
                <h2><?php the_title(); ?></h2>
                <?php var_dump(get_post_meta(get_the_ID(), '_my_meta_value_key')) ?>
                <p><?php echo $post->post_content; ?></p>
            </section>
        <?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>
       </div>
    </div>
</main>
<?php get_footer(); ?>