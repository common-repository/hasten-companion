<?php

function hasten_companion_customize_register($wp_customize){
    require plugin_dir_path( __FILE__ ) . 'hasten-companion-color-picker.php';
    require plugin_dir_path( __FILE__ ) . 'customizer-control.php';
    require plugin_dir_path( __FILE__ ) . 'sanitize-functions.php';
    require plugin_dir_path( __FILE__ ) . 'cta-options.php';
    require plugin_dir_path( __FILE__ ) . 'additional-customizer.php';


    $my_theme = wp_get_theme();
    $theme = $my_theme->get( 'TextDomain' );
    if($theme != 'hasten-lite'){
        $wp_customize->add_panel(
            'theme_options',
            array(
                'title' => esc_html__( 'Theme Options','hasten-companion' ),
                'priority' => 2,
            )
        );
    }

    $wp_customize->add_panel(
        'hc_team_options',
        array(
            'title' => esc_html__( 'Team Options','hasten-companion' ),
            'priority' => 2,
        )
    );


    $wp_customize->add_section(
        'hc_team_section',
        array(
            'title'    => esc_html__( 'Show Team Section In Homepage','hasten-companion' ),
            'panel' => 'hc_team_options',
            'priority' => 2,
        )
    );


    $wp_customize->add_section(
        'hc_contact_section',
        array(
            'title'    => esc_html__( 'Contact Section','hasten-companion' ),
            'panel' => 'theme_options',
            'priority' => 26,
        )
    );
 $wp_customize->add_section(
        'hc_cta_section',
        array(
            'title'    => esc_html__( 'Call To Action Option','hasten-companion' ),
            'panel' => 'theme_options',
            'priority' => 11,
        )
    );

    $wp_customize->add_section(
        'hc_bottom_shortcode',
        array(
            'title'    => esc_html__( 'Shortcode','hasten-companion' ),
            'panel' => 'theme_options',
            'priority' => 19,
        )
    );

    $wp_customize->add_setting(
        'hasten_companion_theme_options[show_team_section]',
        array(
            'default' =>'',
            'type' => 'option',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'hasten_companion_sanitize_checkbox',
        )
    );

    $wp_customize->add_control(new Hasten_Companion_checkbox_Customize_Controls(
            $wp_customize, 'hasten_companion_theme_options[show_team_section]',
            array(
                'label' => esc_html__('Show Team Section In Homepage? ', 'hasten-companion'),
                'section' => 'hc_team_section',
                'settings' => 'hasten_companion_theme_options[show_team_section]',
                'priority' => 1,
            )
        )
    );

    $wp_customize->add_setting('hasten_companion_theme_options[team_section_title]',
        array(
            'type' => 'option',
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );
    $wp_customize->add_control('hasten_companion_theme_options[team_section_title]',
        array(
            'label' => esc_html__('Section Title', 'hasten-companion'),
            'type' => 'text',
            'section' => 'hc_team_section',
            'settings' => 'hasten_companion_theme_options[team_section_title]',
        )
    );

    $wp_customize->add_setting('hasten_companion_theme_options[team_section_desc]',
        array(
            'type' => 'option',
            'default' => '',
            'sanitize_callback' => 'esc_html',
        )
    );
    $wp_customize->add_control('hasten_companion_theme_options[team_section_desc]',
        array(
            'label' => esc_html__('Section Description', 'hasten-companion'),
            'type' => 'textarea',
            'section' => 'hc_team_section',
            'settings' => 'hasten_companion_theme_options[team_section_desc]',
        )
    );


    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_section(
            'rl_teams_additional_section_' . $i . '',
            array(
                'title'    => esc_html__( 'Team ','hasten-companion' ) . ' ' . $i,
                'panel' => 'hc_team_options',
                'priority' => 2,
            )
        );
        $wp_customize->add_setting('hasten_companion_theme_options[team_image_' . $i . ']',
            array(
                'type' => 'option',
                'sanitize_callback' => 'esc_url_raw',
            )
        );
        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'hasten_companion_theme_options[team_image_' . $i . ']',
                array(
                    'label' => esc_html__('Add Image', 'hasten-companion'),
                    'section' => 'rl_teams_additional_section_' . $i . '',
                ))
        );

        $wp_customize->add_setting('hasten_companion_theme_options[team_title_' . $i . ']',
            array(
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field',
                'type' => 'option',
                'capability' => 'manage_options'
            ));
        $wp_customize->add_control('hasten_companion_theme_options[team_title_' . $i . ']',
            array(
                'priority' => 220 . $i,
                'label' => __('Team Title', 'hasten-companion'),
                'section' => 'rl_teams_additional_section_' . $i . '',
                'type' => 'text',
            ));
        $wp_customize->add_setting('hasten_companion_theme_options[team_designation_' . $i . ']',
            array(
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field',
                'type' => 'option',
                'capability' => 'manage_options'
            ));
        $wp_customize->add_control('hasten_companion_theme_options[team_designation_' . $i . ']',
            array(
                'priority' => 220 . $i,
                'label' => __('Team Designation', 'hasten-companion'),
                'section' => 'rl_teams_additional_section_' . $i . '',
                'type' => 'text',
            ));
        $wp_customize->add_setting('hasten_companion_theme_options[team_fb_' . $i . ']',
            array(
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field',
                'type' => 'option',
                'capability' => 'manage_options'
            ));
        $wp_customize->add_control('hasten_companion_theme_options[team_fb_' . $i . ']',
            array(
                'priority' => 220 . $i,
                'label' => __('Facebook Link', 'hasten-companion'),
                'section' => 'rl_teams_additional_section_' . $i . '',
                'type' => 'text',
            ));
        $wp_customize->add_setting('hasten_companion_theme_options[team_tw_' . $i . ']',
            array(
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field',
                'type' => 'option',
                'capability' => 'manage_options'
            ));
        $wp_customize->add_control('hasten_companion_theme_options[team_tw_' . $i . ']',
            array(
                'priority' => 220 . $i,
                'label' => __('Twitter Link', 'hasten-companion'),
                'section' => 'rl_teams_additional_section_' . $i . '',
                'type' => 'text',
            ));
        $wp_customize->add_setting('hasten_companion_theme_options[team_gmail_' . $i . ']',
            array(
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field',
                'type' => 'option',
                'capability' => 'manage_options'
            ));
        $wp_customize->add_control('hasten_companion_theme_options[team_gmail_' . $i . ']',
            array(
                'priority' => 220 . $i,
                'label' => __('Google Plus Link', 'hasten-companion'),
                'section' => 'rl_teams_additional_section_' . $i . '',
                'type' => 'text',
            ));
        $wp_customize->add_setting('hasten_companion_theme_options[team_in_' . $i . ']',
            array(
                'default' => '',
                'sanitize_callback' => 'sanitize_text_field',
                'type' => 'option',
                'capability' => 'manage_options'
            ));
        $wp_customize->add_control('hasten_companion_theme_options[team_in_' . $i . ']',
            array(
                'priority' => 220 . $i,
                'label' => __('Linked In Link', 'hasten-companion'),
                'section' => 'rl_teams_additional_section_' . $i . '',
                'type' => 'text',
            ));
    }


}

add_action( 'customize_register', 'hasten_companion_customize_register' );


function hasten_lite_companion_customize_enqueue() {
    wp_enqueue_style( 'hasten-lite-companion-customizer-style',  plugin_dir_url( __FILE__ ) . 'assets/customizer-control.css' );

}
add_action( 'customize_controls_enqueue_scripts', 'hasten_lite_companion_customize_enqueue' );