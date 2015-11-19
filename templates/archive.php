<section class="archive-posts">
  	<?php if (category_description() !== '') : ?>
   	<header class="archive-header">
   		<?php echo category_description(); ?>
   	</header>
   	<?php endif; ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part('template-parts/common/archive','article'); ?>
    <?php endwhile;  ?>
</section>
