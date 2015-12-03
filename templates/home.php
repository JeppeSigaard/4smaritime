<?php get_template_part('template-parts/common/home','slider'); ?>
<?php get_template_part('template-parts/common/mailchimp','panel') ?>
<section class="newsfeed">
    <div class="inner page-width grid grid-twist">
        <div class="half">
            <?php get_template_part('template-parts/common/article'); ?>
        </div>
        <div class="half">
            <?php get_template_part('template-parts/common/article','list'); ?>
        </div>
    </div>
</section>