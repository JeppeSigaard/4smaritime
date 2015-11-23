<header id="site-header" class="site-header">
	<div class="inner">
        <div class="tiny-logo">
            <a  href="<?php echo bloginfo('url'); ?>" title="<?php echo bloginfo('name') ?>">
                <img src="<?php echo get_theme_mod('logo_small'); ?>"/>
            </a>
        </div>
        <a class="hamburger" href="#" nofollow>
            <?php include get_template_directory().'/statics/icons/menu.svg'; ?>
            <?php include get_template_directory().'/statics/icons/close.svg'; ?>
        </a>	
	</div>
	<?php
        $main_menu_args = array(
            'theme_location'  => 'main-menu',
            'menu'            => '',
            'container'       => 'nav',
            'container_class' => 'main-menu',
            'echo'            => false,
            'fallback_cb'     => false,
            'before'          => '',
            'after'           => '',
            'link_before'     => '<span>',
            'link_after'      => '</span>',
            'items_wrap'      => '<ul>%3$s</ul>',
            'depth'           => 0,
            'walker'          => ''
        ); 
        echo str_replace('\\n','</span><span>',wp_nav_menu($main_menu_args));
    ?>
</header>
