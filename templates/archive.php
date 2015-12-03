<main class="post-main">
    <article <?php post_class('post-article'); ?>>
        <header class="post-header">
            <h1 class="post-header-title"><?php the_title(); ?></h1>
            <?php if (has_post_thumbnail()) { the_post_thumbnail();} ?>
        </header>
        <div class="post-content">
            <?php get_template_part('template-parts/common/article','list'); ?>
        </div>
        <footer class="post-footer"></footer>
    </article>
</main>
<?php get_template_part('template-parts/common/fixed','aside'); ?>