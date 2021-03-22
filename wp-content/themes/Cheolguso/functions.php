<?php

//enqueue style & script
function CGS_scripts_styles() {
  wp_enqueue_style( 'cgs_style', get_template_directory_uri() . '/css/style.css', false, '1.1.25');
  wp_enqueue_style( 'cgs_responsive', get_template_directory_uri() . '/css/responsive_style.css', false, '1.1.15');
  wp_enqueue_script( 'falsy_proxima_nova' , get_template_directory_uri() . '/js/falsy_proxima_nova.js', null, false, true);
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

//shortcode
function a_link_shortcode_fnc($atts, $content) {
  $atts = shortcode_atts( array(
    'self' => 'false',
  ), $atts, 'al');
  $target = $atts['self'] === 'false' ? '_blank' : '_self';
  return '<a href="'.$content.'" target="'.$target.'">'
            .$content.
          '</a>';
}
add_shortcode('al', 'a_link_shortcode_fnc');

function post_page_fnc($atts, $content) {
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
add_shortcode('post_page', 'post_page_fnc');

function head_box_fnc($atts, $content) {
  return '<p style="margin-bottom: 30px;">'
            .do_shortcode($content).
          '</p>';
}
add_shortcode('head_box', 'head_box_fnc');

function text_box_fnc($atts, $content) {
  return '<p class="basic-text-box">'
            .do_shortcode($content).
          '</p>';
}
add_shortcode('text_box', 'text_box_fnc');

function line_box_fnc($atts, $content) {
  $atts = shortcode_atts( array(
    'color' => '#111',
  ), $atts, 'line_box');

  $color = $atts['color'];
  $color = $color === 'y' ? '#ffdc30' : $color;
  $color = $color === 'o' ? '#ffa330' : $color;
  $color = $color === 'r' ? '#f35f5f' : $color;
  $color = $color === 'g' ? '#77c38b' : $color;

  return '<p class="left-line-box" style="border-color: '.$color.';">'
            .do_shortcode($content).
          '</p>';
}
add_shortcode('line_box', 'line_box_fnc');

function img_box_fnc($atts) {
  $atts = shortcode_atts( array(
    'url' => '',
  ), $atts, 'img_box');

  return '<img src="'.$atts['url'].'" alt="" style="max-width: 100%;">';
}
add_shortcode('img_box', 'img_box_fnc');

function img_box_bg_fnc($atts) {
  $atts = shortcode_atts( array(
    'url' => '',
  ), $atts, 'img_box_bg');

  return '<div style="background: #f5f8f6; padding: 15px 20px;">
            <img src="'.$atts['url'].'" alt="" style="max-width: 100%;">
          </div>';
}
add_shortcode('img_box_bg', 'img_box_bg_fnc');


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

function add_jsonld_head() {
	if(eme_is_single_event_page()) {
		$event_ID = get_query_var('event_id');
		$event = eme_get_event($event_ID);
		$location_id = $event['location_id'];
		$location = eme_get_location(intval($location_id));
		?>
		<script type="application/ld+json">
    {"@context":"https:\/\/schema.org","@graph":[{"@type":"WebSite","@id":"https:\/\/falsy.me\/#website","url":"https:\/\/falsy.me\/","name":"\ud3f4\uc2dc\ub7a9","description":"\ud3f4\uc2dc\ub7a9","publisher":{"@id":"https:\/\/falsy.me\/#organization"}},{"@type":"Organization","@id":"https:\/\/falsy.me\/#organization","name":"\ud3f4\uc2dc\ub7a9","url":"https:\/\/falsy.me\/"},{"@type":"BreadcrumbList","@id":"https:\/\/falsy.me\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/falsy.me\/#listItem","position":"1","item":{"@id":"https:\/\/falsy.me\/#item","name":"\ud648","description":"\uc790\ubc14\uc2a4\ud2b8\ub9bd\ud2b8, PHP, \uc6cc\ub4dc\ud504\ub808\uc2a4, HTML, CSS, \ud301, \uac00\uc774\ub4dc, \uc77c\uc0c1\uc774\uc57c\uae30","url":"https:\/\/falsy.me\/"}}]},{"@type":"WebPage","@id":"https:\/\/falsy.me\/#webpage","url":"https:\/\/falsy.me\/","name":"\ud3f4\uc2dc\ub7a9","description":"\uc790\ubc14\uc2a4\ud2b8\ub9bd\ud2b8, PHP, \uc6cc\ub4dc\ud504\ub808\uc2a4, HTML, CSS, \ud301, \uac00\uc774\ub4dc, \uc77c\uc0c1\uc774\uc57c\uae30","inLanguage":"ko-KR","isPartOf":{"@id":"https:\/\/falsy.me\/#website"},"breadcrumb":{"@id":"https:\/\/falsy.me\/#breadcrumblist"},"image":{"@type":"ImageObject","@id":"https:\/\/falsy.me\/#mainImage","url":"https:\/\/falsy.me\/wp-content\/uploads\/2020\/07\/falsylab.png","width":"1200","height":"630"},"primaryImageOfPage":{"@id":"https:\/\/falsy.me\/#mainImage"},"datePublished":"2015-06-30T13:36:49+09:00","dateModified":"2018-02-05T12:44:38+09:00"}]}
		</script>
		<?php
	}
}
add_action('wp_head', 'add_jsonld_head', 1);

?>
