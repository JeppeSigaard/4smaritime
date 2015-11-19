<?php

global $post;
$author_id=$post->post_author;
if($author_id) :

$author = get_user_by('id',$author_id);

?>
<div class="site-nav-part author-box">
	<div class="auhor-img">
		<?php echo get_avatar($author_id,'260'); ?>
	</div>
	<div><?php echo $author->display_name; ?></div>
</div>


<?php endif; ?>
