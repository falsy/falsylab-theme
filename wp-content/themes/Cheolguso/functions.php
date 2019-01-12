<?php

//enqueue style & script
function CGS_scripts_styles() {
  wp_enqueue_style( 'cgs_proxima_nova', get_template_directory_uri() . '/css/cgs_proxima_nova.css', false, '1.0.0');
  wp_enqueue_style( 'cgs_style', get_template_directory_uri() . '/css/style.css', false, '1.1.7');
  wp_enqueue_style( 'cgs_responsive', get_template_directory_uri() . '/css/responsive_style.css', false, '1.1.8');
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

//remove auto link
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

//shortcode
function posting_page($atts, $content) {
  return '<div id="view_post">
            <div class="col_box">
              <div class="col_half col_full">
                <p class="view_box_title" style="margin-top: 30px;">Explanation</p>
                <div id="review_text">'
                .do_shortcode($content).
                '</div>
              </div>
            </div>
          </div>';
}
add_shortcode('post-page', 'posting_page');

function default_text($atts, $content) {
  return '<p class="basic-text-box">'
            .do_shortcode($content).
          '</p>';
}
add_shortcode('text-box', 'default_text');

function head_text($atts, $content) {
  return '<p style="margin-bottom: 30px;">'
            .do_shortcode($content).
          '</p>';
}
add_shortcode('head-box', 'head_text');

function default_text($atts, $content) {
  return '<p class="basic-text-box">'
            .do_shortcode($content).
          '</p>';
}
add_shortcode('text-box', 'default_text');

function line_text($atts, $content) {
  $atts = shortcode_atts( array(
    'color' => '#111',
  ), $atts, 'line-box');

  $color = $atts['color']
  $color = $color === 'y' ? '#ffdc30' : $color;
  $color = $color === 'o' ? '#ffa330' : $color;
  $color = $color === 'r' ? '#f35f5f' : $color;
  $color = $color === 'g' ? '#77c38b' : $color;

  return '<p class="left-line-box" style="border-color: '.$color.';">'
            .do_shortcode($content).
          '</p>';
}
add_shortcode('line-box', 'line_text');

function img_box($atts) {
  $atts = shortcode_atts( array(
    'url' => '',
  ), $atts, 'img-bg-box');

  return '<img src="'.$atts['url'].'" alt="" style="max-width: 100%;">';
}
add_shortcode('img-box', 'img_box');

function img_box_bg($atts) {
  $atts = shortcode_atts( array(
    'url' => '',
  ), $atts, 'img-bg-box');
  
  return '<div style="background: #f5f8f6; padding: 15px 20px;">
            <img src="'.$atts['url'].'" alt="" style="max-width: 100%;">
          </div>';
}
add_shortcode('img-bg-box', 'img_box_bg');

?>
