<section class="preheader">
    <div class="inner page-width">
        <div class="half center">
            <a id="logo" href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?>">
                <?php require get_template_directory() . '/statics/img/logo_wide.svg'; ?>
            </a>
        </div>
        <div div class="half right">
            <span class="description"><?php echo bloginfo('description'); ?></span>
            <span class="phone"><a href="tel:<?php echo get_option('stem_telefon'); ?>"><?php echo get_option('stem_telefon'); ?></a></span>
            <span class="email"><a href="mailto:<?php echo get_option('stem_email'); ?>"><?php echo get_option('stem_email'); ?></a></span>

        </div>
    </div>
</section>
