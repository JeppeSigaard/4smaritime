<?php if ( get_theme_mod('mailchimp_activate')) : ?>
<section class="newsletter">
    <div class="inner page-width grid">
        <div class="half">
            <div class="heading-box">
                <span class="icon">
                    <?php include get_template_directory() ."/statics/icons/email.svg" ?>
                </span>
                <span class="text">
                    <h3><?php echo get_theme_mod('mailchimp_title'); ?></h3>
                    
                </span>
                <?php echo apply_filters('the_content',get_theme_mod('mailchimp_description')); ?>
            </div>
            
        </div>
        <div class="half">
            <form action="<?php echo admin_url('admin-ajax.php'); ?>" method="post">
                <div>
                    <input type="email" name="email">
                    <label for="email">Your email</label>
                </div>
                <div>
                    <a class="button white large" href="#">Sign up</a>
                </div>
            </form>
        </div>
    </div>
</section>
<?php endif; ?>