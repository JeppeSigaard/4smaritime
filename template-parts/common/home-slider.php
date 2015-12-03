<?php 

$slides = new WP_Query(array(
    'post_type' => 'slide',
    'posts_per_page' => 10,
));

if($slides->have_posts()) : ?>
<section class="home-slider">
    <?php while ($slides->have_posts()) : $slides->the_post(); ?>
    <?php $image_url = wp_get_attachment_image_src( get_post_meta(get_the_ID(), 'slide_image', true), 'widescreen' ); ?>
    <?php if(get_post_meta(get_the_ID(),'slide_href',true) !== '') : $target = (get_post_meta(get_the_ID(),'slide_blank',true) === '1') ? 'target="blank" ': '';?>
    <a <?php echo $target ?>href="<?php echo get_post_meta(get_the_ID(),'slide_href',true) ?>" class="widescreen-hero hero-<?php the_ID(); ?>" data-bg="<?php echo $image_url[0]; ?>">
    <?php else : ?>
    <div class="widescreen-hero hero-<?php the_ID(); ?>" data-bg="<?php echo $image_url[0]; ?>">
    <?php endif; ?>
    
        <div class="inner page-width">
            <h3 class="home-title"><span><?php echo smamo_newlines(get_post_meta(get_the_ID(),'slide_title',true),'span') ?></span></h3>
        </div>
    <?php if(get_post_meta(get_the_ID(),'slide_href',true) !== '') : ?>
        </a>
    <?php else : ?>
    </div>
    <?php endif; ?>
    <?php endwhile; wp_reset_postdata(); ?>
    <div class="sopro-icons">
        <div class="inner">
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/statics/img/classibs.png">
            </a>
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/statics/img/cmid.png">
            </a>
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/statics/img/imca.png">
            </a>
        </div>
    </div>
</section>
<?php endif;