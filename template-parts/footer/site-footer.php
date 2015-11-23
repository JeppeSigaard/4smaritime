<footer id='site-footer' class="site-footer" data-bg="<?php echo get_template_directory_uri() ?>/statics/img/footerbg.jpg">
    <section class="footer-section">
        <div class="inner page-width grid">
            <div class="half">
                <a class="footer-logo">
                    <img src="<?php echo get_theme_mod('logo_large'); ?>">
                </a>
            </div>
            <div class="half right">
                <div class="footer-info">
                    <h3><?php echo get_theme_mod('info_name'); ?></h3>
                    <p><?php echo get_theme_mod('info_ceo'); ?></p>
                    <p>
                        <?php echo get_theme_mod('info_address'); ?><br/>
                        <?php echo get_theme_mod('info_post'); ?> <?php echo get_theme_mod('info_city'); ?><br/>
                        <?php echo get_theme_mod('info_country'); ?><br/>
                    </p>
                    <p>
                        <?php echo get_theme_mod('info_cvr'); ?><br/>
                    </p>
                    <hr>
                    <h3><?php echo get_theme_mod('info_telefon'); ?><br/></h3>
                    <p><?php echo get_theme_mod('info_email'); ?><br/></p>
                    <p><?php echo str_replace('http://','',get_bloginfo('url')); ?><br/></p>
                </div>
            </div>
        </div>
    </section>
</footer>
