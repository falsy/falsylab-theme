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
			'label_submit'=>'Send'
			);
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
