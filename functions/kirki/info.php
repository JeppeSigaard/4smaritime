<?php 

Kirki::add_section( 'theme_business_info', array(
    'title'          => __( 'Firmaoplysninger' ),
    'description'    => __( 'Tilføj oplysninger på firma, som hjemmesiden skal repræsentere.' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'smamo_business_info', array(
    'settings' => 'info_name',
    'label'    => __( 'Firmanavn', 'smamo' ),
    'type'          => 'text',
    'section'       => 'theme_business_info',
    'priority'      => 10,
    'default'       => null,
) );

Kirki::add_field( 'smamo_business_info', array(
    'settings' => 'info_slogan',
    'label'    => __( 'Slogan', 'smamo' ),
    'type'          => 'text',
    'section'       => 'theme_business_info',
    'priority'      => 10,
    'default'       => null,
) );


Kirki::add_field( 'smamo_business_info', array(
    'settings' => 'info_ceo',
    'label'    => __( 'CEO', 'smamo' ),
    'type'          => 'text',
    'section'       => 'theme_business_info',
    'priority'      => 10,
    'default'       => null,
) );

Kirki::add_field( 'smamo_business_info', array(
    'settings' => 'info_address',
    'label'    => __( 'Adresse', 'smamo' ),
    'type'          => 'text',
    'section'       => 'theme_business_info',
    'priority'      => 10,
    'default'       => null,
) );

Kirki::add_field( 'smamo_business_info', array(
    'settings' => 'info_post',
    'label'    => __( 'Postnummer', 'smamo' ),
    'type'          => 'text',
    'section'       => 'theme_business_info',
    'priority'      => 10,
    'default'       => null,
) );

Kirki::add_field( 'smamo_business_info', array(
    'settings' => 'info_city',
    'label'    => __( 'By', 'smamo' ),
    'type'          => 'text',
    'section'       => 'theme_business_info',
    'priority'      => 10,
    'default'       => null,
) );

Kirki::add_field( 'smamo_business_info', array(
    'settings' => 'info_country',
    'label'    => __( 'Land', 'smamo' ),
    'type'          => 'text',
    'section'       => 'theme_business_info',
    'priority'      => 10,
    'default'       => null,
) );

Kirki::add_field( 'smamo_business_info', array(
    'settings' => 'info_cvr',
    'label'    => __( 'CVR', 'smamo' ),
    'type'          => 'text',
    'section'       => 'theme_business_info',
    'priority'      => 10,
    'default'       => null,
) );


Kirki::add_field( 'smamo_business_info', array(
    'settings' => 'info_email',
    'label'    => __( 'Email', 'smamo' ),
    'type'          => 'text',
    'section'       => 'theme_business_info',
    'priority'      => 10,
    'default'       => null,
) );

Kirki::add_field( 'smamo_business_info', array(
    'settings' => 'info_telefon',
    'label'    => __( 'Telefon', 'smamo' ),
    'type'          => 'text',
    'section'       => 'theme_business_info',
    'priority'      => 10,
    'default'       => null,
) );