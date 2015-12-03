<?php 

Kirki::add_section( 'mailchimp', array(
    'title'          => __( 'Mailchimp' ),
    'description'    => __( 'Instillinger for integration med Mailchimp' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 160,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'mailchimp', array(
    'settings' => 'mailchimp_activate',
    'label'    => __( 'Aktiver mailchimp panel og widgets', 'smamo' ),
    'section'  => 'mailchimp',
    'type'     => 'checkbox',
    'priority' => 10,
    'default'  => '0',
) );

Kirki::add_field( 'mailchimp', array(
    'settings' => 'mailchimp_title',
    'label'    => __( 'Paneloverskrift', 'smamo' ),
    'section'  => 'mailchimp',
    'type'     => 'text',
    'priority' => 10,
    'default'  => null,
) );

Kirki::add_field( 'mailchimp', array(
    'settings' => 'mailchimp_description',
    'label'    => __( 'Paneltekst', 'smamo' ),
    'section'  => 'mailchimp',
    'type'     => 'textarea',
    'priority' => 10,
    'default'  => null,
) );

Kirki::add_field( 'mailchimp', array(
    'settings' => 'mailchimp_api_key',
    'label'    => __( 'API nøgle', 'smamo' ),
    'section'  => 'mailchimp',
    'type'     => 'text',
    'priority' => 10,
    'default'  => null,
) );

Kirki::add_field( 'mailchimp', array(
    'settings' => 'mailchimp_list_id',
    'label'    => __( 'Liste ID', 'smamo' ),
    'section'  => 'mailchimp',
    'type'     => 'text',
    'priority' => 10,
    'default'  => null,
) );