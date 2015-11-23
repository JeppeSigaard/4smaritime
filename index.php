<?php
/* 	Jeg nørkler med en switchboard-agtig løsning på template files
	Mest for at få en templates/ dir til alle de filer, der normalt ligger og roder i temaets rod.
	Jeg har været nød til at oprette en seperat 404.php for for at få korrekt responskode.
	Hvis du ved hvordan jeg kan gøre det anderledes, smid mig en besked.
*/

get_header();

// 	Start wrapper
get_template_part('template-parts/common/content','before');

// 	Home og front page
if(is_home() || is_front_page()){require 'templates/home.php';}

else if(is_page() || is_single() || is_singular() ){require 'templates/single.php';}

// 	End wrapper
get_template_part('template-parts/common/content','after');

//	K thanks bye :-)
get_footer();
