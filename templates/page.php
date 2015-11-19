<?php while (have_posts()) : the_post(); ?>
<article <?php post_class(); ?>>
	<header class="page-header">
		<?php the_title('<div class="page-title"><h1>','</h1></div>'); ?>
	</header>
	<section class="page-content">
		<div class="inner read-width">
			<?php the_content(); ?>
		</div>
	</section>
	<?php get_template_part('template-parts/common/post','footer'); ?>
</article>
<?php endwhile; ?>
<?php get_template_part('template-parts/common/page','after'); ?>
