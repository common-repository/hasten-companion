<?php
$wp_customize->add_setting(
    'hasten_companion_theme_options[show_hc_cta_section]',
    array(
        'default' => '',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'hasten_companion_sanitize_checkbox',
    )
);

$wp_customize->add_control(new Hasten_Companion_checkbox_Customize_Controls(
    $wp_customize, 'hasten_companion_theme_options[show_hc_cta_section]',
        array(
            'label' => esc_html__('Show Call To Action Section In Homepage? ', 'hasten-companion'),
            'section' => 'hc_cta_section',
            'settings' => 'hasten_companion_theme_options[show_hc_cta_section]',
            'priority' => 1,
        )
    )
);

$wp_customize->add_setting('hasten_companion_theme_options[home_cta_title]',
    array(
        'type' => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('home_cta_title',
    array(
        'label' => esc_html__('Title', 'hasten-companion'),
        'type' => 'text',
        'section' => 'hc_cta_section',
        'settings' => 'hasten_companion_theme_options[home_cta_title]',
    )
);

$wp_customize->add_setting('hasten_companion_theme_options[home_cta_description]',
    array(
        'type' => 'option',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('home_cta_description',
    array(
        'label' => esc_html__('Description', 'hasten-companion'),
        'type' => 'textarea',
        'section' => 'hc_cta_section',
        'settings' => 'hasten_companion_theme_options[home_cta_description]',
    )
);

$wp_customize->add_setting('hasten_companion_theme_options[cta_button_txt]',
    array(
        'type' => 'option',
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('hasten_companion_theme_options[cta_button_txt]',
    array(
        'label' => esc_html__('Button Text', 'hasten-companion'),
        'type' => 'text',
        'section' => 'hc_cta_section',
        'settings' => 'hasten_companion_theme_options[cta_button_txt]',
    )
);
$wp_customize->add_setting('hasten_companion_theme_options[cta_button_url]',
    array(
        'type' => 'option',
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control('hasten_companion_theme_options[cta_button_url]',
    array(
        'label' => esc_html__('Button Link', 'hasten-companion'),
        'type' => 'text',
        'section' => 'hc_cta_section',
        'settings' => 'hasten_companion_theme_options[cta_button_url]',
    )
);
$wp_customize->add_setting('hasten_companion_theme_options[cta_video_bg_image]',
    array(
        'type' => 'option',
        'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'hasten_companion_theme_options[cta_video_bg_image]',
        array(
            'label' => esc_html__('Add Background Image', 'hasten-companion'),
            'section' => 'hc_cta_section',
            'settings' => 'hasten_companion_theme_options[cta_video_bg_image]',
        ))
);
$wp_customize->add_setting(
    'hasten_companion_theme_options[cta_parallax]',
    array(
        'default' => '',
        'type' => 'option',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'hasten_companion_sanitize_checkbox',
    )
);

$wp_customize->add_control(new Hasten_Companion_checkbox_Customize_Controls(
        $wp_customize, 'hasten_companion_theme_options[cta_parallax]',
        array(
            'label' => esc_html__('Parallax Effect For Background Image', 'hasten-companion'),
            'section' => 'hc_cta_section',
            'settings' => 'hasten_companion_theme_options[cta_parallax]',
        )
    )
);

$wp_customize->add_setting('hasten_companion_theme_options[hc_cta_section_color]',
    array(
        'type' => 'option',
        'default' => '#000000b5',
        'sanitize_callback' => 'hasten_companion_sanitize_rgba',
    )
);


$wp_customize->add_control(
    new  Hasten_Companion_Customize_Opacity_Color_Control(
        $wp_customize,
        'hasten_companion_options[hc_cta_section_color]',
        array(
            'label' => esc_html__('Add Background Color', 'hasten-companion'),
            'section' => 'hc_cta_section',
            'settings' => 'hasten_companion_theme_options[hc_cta_section_color]',
        ))
);

