<?php 

$mb[] = array(
    'id' => 'comment_meta',
    'title' => __( 'Teaser til kommentar', 'rwmb' ),
    'pages' => array('post'),
    'context' => 'normal',
    'priority' => 'default',
    'autosave' => true,
    'fields' => array(
        
        array(
            'name'  => __( 'Teaser tekst', 'rwmb' ),
            'id'    => "comment_tease",
            'type' => 'textarea',
            ),
    ),
);