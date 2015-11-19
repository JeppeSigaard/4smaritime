<section class="comments" id="comments">
	<div class="read-width">
		<h3 class="comments-header">Diskutér i plenum</h3>
		<?php $comment_tease = get_post_meta(get_the_ID(),'comment_tease',true); if ($comment_tease) : ?>
		<div class="comment-tease"><?php echo apply_filters('the_content',esc_textarea($comment_tease)); ?></div>
		<?php endif; ?>
		<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="3" data-mobile="0"></div>
	</div>
</section>
