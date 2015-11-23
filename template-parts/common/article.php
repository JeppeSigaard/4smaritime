<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<article <?php post_class('post-article'); ?>>
    <header class="post-header">
        <h1 class="post-header-title"><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) { the_post_thumbnail();} ?>
    </header>
    <div class="post-content"><?php the_content(); ?></div>
    <footer class="post-footer"></footer>
</article>
<?php endwhile; endif; ?>