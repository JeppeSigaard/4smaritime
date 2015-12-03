<?php

$widgets = wp_get_post_terms(get_the_ID(), 'tax_widget',array('orderby' => 'id'));

foreach($widgets as $widget){
    
    dynamic_sidebar($widget->slug);
    
}