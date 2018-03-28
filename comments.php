<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">
	<?php 
		$args = array(
			'title_reply'	=> 'Leave a Reply',
			'comment_notes_before'	=> '',
			'comment_notes_after' => '',
			'label_submit'=>'Send',
			'fields' => array(
				'author' =>
				    '<p class="comment-form-author"><label for="author">* Name</label> ' .
				    '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
				    '" size="30"' . $aria_req . ' /></p>',
	  			'email' =>
				    '<p class="comment-form-email"><label for="email"> * E-mail</label> ' .
				    '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
				    '" size="30"' . $aria_req . ' /></p>',
	  			'url' =>
				    '<p class="comment-form-url"><label for="url">Website</label>' .
				    '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
				    '" size="30" /></p>',
	    			),
			'comment_field' => '<p class="comment-form-comment"><label for="comment">Comment</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>'
			)
	?>
	<?php comment_form($args); ?>
	
	<?php if ( have_comments() ) : ?>
	<ol class="comment-list">
		<?php
			wp_list_comments('callback=cgs_comment');
		?>
	</ol><!-- .comment-list -->
	<?php endif; // have_comments() ?>

</div><!-- #comments -->
