<?php
/*	Fejlsider ender her
*/
get_header();

// 	Start wrapper
get_template_part('template-parts/common/content','before');

// 	Fejlsidetemplate flyttet til tmplates/ sammen med alle de andre sidetemplates
require 'templates/404.php';

// 	End wrapper
get_template_part('template-parts/common/content','after');

get_footer(); ?>
