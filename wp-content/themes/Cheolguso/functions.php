<?php

//enqueue style & script
function CGS_scripts_styles() {
  wp_enqueue_style( 'cgs_proxima_nova', get_template_directory_uri() . '/css/cgs_proxima_nova.css', false, '1.0.0');
  wp_enqueue_style( 'cgs_style', get_template_directory_uri() . '/css/style.css', false, '1.1.0');
  wp_enqueue_style( 'cgs_responsive', get_template_directory_uri() . '/css/responsive_style.css', false, '1.1.1');
}
add_action( 'wp_enqueue_scripts', 'CGS_scripts_styles' );


//thumbnails
add_theme_support('post-thumbnails');


//sidebar
if(function_exists('register_sidebar')){
  register_sidebar(array(
  'name' => 'Sidebar',
  'id' => 'side_bar',
  'description' => 'wedget',
  'before_widget' => '<aside class="%1$s">',
  'after_widget' => '</aside>'
  ));
}


//feed
function cgs_feed_request($qv) {
  if(isset($qv['feed']) && !isset($qv['post_type']))
  {
    $qv['post_type'] = array('post', 'page');
  }
  return $qv;
}
add_filter('request', 'cgs_feed_request');

// remove auto link
remove_filter('COMMENT_TEXT', 'make_clickable', 9);

//comment
function cgs_comment($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  extract($args, EXTR_SKIP);

  if ( 'div' == $args['style'] ) {
    $tag = 'div';
    $add_below = 'comment';
  } else {
    $tag = 'li';
    $add_below = 'div-comment';
  }
?>
  <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
  <?php if ( 'div' != $args['style'] ) : ?>
  <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
  <?php endif; ?>
  <div class="comment-author vcard">
  <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
  <?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
  </div>
  <?php if ( $comment->comment_approved == '0' ) : ?>
    <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
    <br />
  <?php endif; ?>

  <div class="comment-meta commentmetadata meta-date">
    <?php
      /* translators: 1: date, 2: time */
      echo get_comment_date('Y-m-d');
    ?>
  </div>

  <?php comment_text(); ?>

  <div class="reply">
  <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'], 'reply_text' => '' ) ) ); ?>
  </div>

  <?php if ( 'div' != $args['style'] ) : ?>
  </div>
  <?php endif; ?>
<?php
}

?>
