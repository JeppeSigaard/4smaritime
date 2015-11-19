<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'letterbox'); ?>
<li <?php post_class('list-item') ?>>
	<a class="inner" href="<?php the_permalink(); ?>">
		<header class="list-item-header">
			<?php the_title('<h3 class="lit-item-title">','</h3>'); ?>
			<div cass="list-item-img" style="background-image:url(<?php echo $image_url[0]; ?>);"></div>
			<div class="list-item-meta">
				<span>
					<?php the_modified_date('d. M Y'); ?>
				</span>
			</div>
		</header>
		<section class="list-item-excerpt">
			<?php the_excerpt(); ?>
		</section>
	</a>
</li>
