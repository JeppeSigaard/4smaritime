<article <?php post_class('archive-article'); ?>>
	<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'double-wide'); ?>
        <a href="<?php the_permalink(); ?>" class="post-header" data-bg="<?php echo $image_url[0] ?>">
            <?php the_title('<div class="post-title"><h1>','</h1></div>'); ?>
        </a>
	<section class="post-lead">
		<div class="inner read-width">
			<?php the_excerpt(); ?>
		</div>
	</section>
	<footer class="featured-footer">
	    <?php get_template_part('template-parts/common/post','meta'); ?>
	</footer>
</article>
