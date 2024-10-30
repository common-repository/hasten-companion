<?php
$wp_customize->add_setting('hasten_companion_theme_options[contact_checkbox]',
    array(
        'type'    => 'option',
        'sanitize_callback' => 'hasten_companion_sanitize_checkbox',
        'default' => '',
    ));

$wp_customize->add_control(new Hasten_Companion_checkbox_Customize_Controls(
        $wp_customize, 'hasten_companion_theme_options[contact_checkbox]',
        array(
            'section' => 'hc_contact_section',
            'label'   => esc_html__('Show Contact Section In Homepage ?', 'hasten-companion'),
            'settings' => 'hasten_companion_theme_options[contact_checkbox]',
            'priority' => 1,
        )
    )
);
$wp_customize->add_setting(
    'hasten_companion_theme_options[contact_title]',
    array(
        'default'           => '',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[contact_title]',
    array(
        'label'             => esc_html__( 'Contact Title', 'hasten-companion' ),
        'type'              =>'text',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[contact_title]'
    )
);

$wp_customize->add_setting(
    'hasten_companion_theme_options[contact_desc]',
    array(
        'default'           => '',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[contact_desc]',
    array(
        'label'             => esc_html__( 'Contact Description', 'hasten-companion' ),
        'type'              =>'textarea',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[contact_desc]'
    )
);


$wp_customize->add_setting(
    'hasten_companion_theme_options[form_title]',
    array(
        'default'           => '',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[form_title]',
    array(
        'label'             => esc_html__( 'Form Title', 'hasten-companion' ),
        'type'              =>'text',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[form_title]'
    )
);

$wp_customize->add_setting(
    'hasten_companion_theme_options[form_desc]',
    array(
        'default'           => '',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[form_desc]',
    array(
        'label'             => esc_html__( 'Form Description', 'hasten-companion' ),
        'type'              =>'textarea',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[form_desc]'
    )
);
$wp_customize->add_setting(
    'hasten_companion_theme_options[form_sc]',
    array(
        'default'           => '',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[form_sc]',
    array(
        'label'             => esc_html__( 'Form Shortcode', 'hasten-companion' ),
        'type'              =>'text',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[form_sc]'
    )
);
$wp_customize->add_setting(
    'hasten_companion_theme_options[form_email]',
    array(
        'default'           => '',
        'type'              => 'option',
        'sanitize_callback' => 'esc_html',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[form_email]',
    array(
        'label'             => esc_html__( 'Send Mail To :', 'hasten-companion' ),
        'description'       => esc_html__( 'Enter Mail Id', 'hasten-companion' ),
        'type'              =>'text',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[form_email]'
    )
);

$wp_customize->add_setting(
    'hasten_companion_theme_options[contact_add]',
    array(
        'default'           => '',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[contact_add]',
    array(
        'label'             => esc_html__( 'Address', 'hasten-companion' ),
        'type'              =>'textarea',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[contact_add]'
    )
);

$wp_customize->add_setting(
    'hasten_companion_theme_options[contact_phone]',
    array(
        'default'           => '',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[contact_phone]',
    array(
        'label'             => esc_html__( 'Phone', 'hasten-companion' ),
        'type'              =>'text',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[contact_phone]'
    )
);
$wp_customize->add_setting(
    'hasten_companion_theme_options[contact_mobile]',
    array(
        'default'           => '',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[contact_mobile]',
    array(
        'label'             => esc_html__( 'Office No.', 'hasten-companion' ),
        'type'              =>'text',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[contact_mobile]'
    )
);
$wp_customize->add_setting(
    'hasten_companion_theme_options[contact_email]',
    array(
        'default'           => '',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[contact_email]',
    array(
        'label'             => esc_html__( 'Email', 'hasten-companion' ),
        'type'              =>'text',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[contact_email]'
    )
);
$wp_customize->add_setting(
    'hasten_companion_theme_options[contact_fax]',
    array(
        'default'           => '',
        'type'              => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[contact_fax]',
    array(
        'label'             => esc_html__( 'Fax', 'hasten-companion' ),
        'type'              =>'text',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[contact_fax]'
    )
);


//Map Option

$wp_customize->add_setting(
    'hasten_companion_theme_options[contact_map_api]',
    array(
        'default'           => '',
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[contact_map_api]',
    array(
        'label'              => esc_html__( 'Add Google Map API Key', 'hasten-companion' ),
        'description'        => esc_html__( 'Get Map API Key', 'hasten-companion' ). "<a href=".esc_url('https://console.developers.google.com/flows/enableapi?apiid=maps_backend,geocoding_backend,directions_backend,distance_matrix_backend,elevation_backend,places_backend&reusekey=true&pli=1')." target='_blank'>". ' ' .esc_html__('From Here', 'hasten-companion'). '</a>',
        'type'               =>'text',
        'section'            => 'hc_contact_section',
        'settings'           => 'hasten_companion_theme_options[contact_map_api]'
    )
);

$wp_customize->add_setting(
    'hasten_companion_theme_options[contact_map_latitude]',
    array(
        'default' => '',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[contact_map_latitude]',
    array(
        'label'             => esc_html__('Map Latitude', 'hasten-companion'),
        'type'              => 'text',
        'section'           => 'hc_contact_section',
        'settings'          => 'hasten_companion_theme_options[contact_map_latitude]',
    )
);
$wp_customize->add_setting(
    'hasten_companion_theme_options[contact_map_longitude]',
    array(
        'default'           => '',
        'type'              => 'option',
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control('hasten_companion_theme_options[contact_map_longitude]',
    array(
        'label' => esc_html__('Map Longitude', 'hasten-companion'),
        'type' => 'text',
        'section' => 'hc_contact_section',
        'settings' => 'hasten_companion_theme_options[contact_map_longitude]',
    )
);


$wp_customize->add_setting('hasten_companion_theme_options[sc2_title]',
    array(
        'default' => '',
        'type' => 'option',
        'sanitize_callback' => 'esc_html',
    ));
$wp_customize->add_control('hasten_companion_theme_options[sc2_title]',
    array(
        'priority' => 50,
        'label' => esc_html__('Section Title', 'hasten-companion'),
        'section' => 'hc_bottom_shortcode',
        'type' => 'text',
    ));
$wp_customize->add_setting('hasten_companion_theme_options[sc2_description]',
    array(
        'default' => '',
        'type' => 'option',
        'sanitize_callback' => 'esc_html',
    ));
$wp_customize->add_control('hasten_companion_theme_options[sc2_description]',
    array(
        'priority' => 50,
        'label' => esc_html__('Section Description', 'hasten-companion'),
        'section' => 'hc_bottom_shortcode',
        'type' => 'textarea',
    ));
$wp_customize->add_setting('hasten_companion_theme_options[hasten_lite_shortcode2]',
    array(
        'default' => '',
        'type' => 'option',
        'sanitize_callback' => 'esc_html',
    ));
$wp_customize->add_control('hasten_companion_theme_options[hasten_lite_shortcode2]',
    array(
        'priority' => 50,
        'label' => esc_html__('Shortcode', 'hasten-companion'),
        'description' => esc_html__('Paste Shortcode Here.', 'hasten-companion'),
        'section' => 'hc_bottom_shortcode',
        'type' => 'text',
    ));