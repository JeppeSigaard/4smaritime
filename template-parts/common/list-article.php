<a href="<?php the_permalink(); ?>" <?php post_class('list-article'); ?>>
    <div class="list-article-date">
        <span><?php echo date('d',strtotime(get_the_date())); ?></span>
        <span><?php echo date('M Y',strtotime(get_the_date()));?></span>
    </div>
    <div class="list-article-pre">
        <h3><?php the_title(); ?></h3>
        <!--<p><?php echo wp_trim_words(get_the_excerpt(),$num_words = 15, $more = null); ?></p>-->
    </div>
</a>