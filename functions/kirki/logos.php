<?php 

Kirki::add_section( 'theme_logo', array(
    'title'          => __( 'Logo' ),
    'description'    => __( 'Tilføj logo til temaets positioner' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'smamo_conf', array(
    'settings' => 'logo_large',
    'label'    => __( 'Stort logo', 'smamo' ),
    'section'  => 'theme_logo',
    'type'     => 'image',
    'priority' => 10,
    'default'  => null,
) );

Kirki::add_field( 'smamo_conf', array(
    'settings' => 'logo_medium',
    'label'    => __( 'Bredt logo', 'smamo' ),
    'section'  => 'theme_logo',
    'type'     => 'image',
    'priority' => 11,
    'default'  => null,
) );

Kirki::add_field( 'smamo_conf', array(
    'settings' => 'logo_small',
    'label'    => __( 'Lille logo', 'smamo' ),
    'section'  => 'theme_logo',
    'type'     => 'image',
    'priority' => 12,
    'default'  => null,
) );