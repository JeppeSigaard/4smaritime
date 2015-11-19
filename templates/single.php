<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
	<?php $image_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'widescreen'); ?>
	<header class="post-header" data-bg="<?php echo $image_url[0] ?>">
		<?php the_title('<div class="post-title"><h1>','</h1></div>'); ?>
		<?php get_template_part('template-parts/common/post','meta'); ?>
	</header>
	<section class="post-lead">
		<div class="inner read-width">
			<?php the_excerpt(); ?>
		</div>
	</section>
	<section class="post-content">
		<div class="inner read-width">
			<?php the_content(); ?>
		</div>
	</section>
	<?php get_template_part('template-parts/common/post','footer'); ?>
</article>
<?php endwhile; ?>
<?php get_template_part('template-parts/common/comments'); ?>
