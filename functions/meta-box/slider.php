<?php

$mb[] = array(
    'id' => 'slide_fields',
    'title' => __( 'Indstillinger', 'rwmb' ),
    'pages' => array('slide'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Titel', 'rwmb' ),
            'id'    => "slide_title",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Billede', 'rwmb' ),
            'id'    => "slide_image",
            'type' => 'image_advanced',
            'max_file_uploads' => '1',
            ),
        
        array(
            'name'  => __( 'Link', 'rwmb' ),
            'id'    => "slide_href",
            'type' => 'text',
            ),
        
        array(
            'name'  => __( 'Åben i nyt vindue', 'rwmb' ),
            'id'    => "slide_blank",
            'type' => 'checkbox',
            'std' => 0,
            ),
    ),
);