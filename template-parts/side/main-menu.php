<div class="site-nav-part main-menu">
	<?php wp_nav_menu(array(
		'theme-location' => 'main-menu',
		'container'       => false,
		'menu_class'      => false,
		'echo'            => true,
		'fallback_cb'     => false,
		'items_wrap'      => '<ul>%3$s</ul>',
	)); ?>
</div>
