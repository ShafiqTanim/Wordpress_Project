<?php

register_nav_menus( array(
    'primary' => __( 'Top primary menu', 'blogy' ),
    'secondary' => __( 'Secondary menu', 'blogy' ),
    ) );

    add_theme_support( 'widgets' );
    function register_footer1_widget_area() {
        register_sidebar(
            array(
                'id' => 'footer-widget-area-1',
                'name' => esc_html__( 'Footer First Part', 'theme-domain' ),
                'description' => esc_html__( 'Your footer content', 'theme-domain' ),
                'before_widget' => '',
                'after_widget' => '',
                'before_title' => '',
                'after_title' => ''
            )
        );
    }
    add_action( 'widgets_init', 'register_footer1_widget_area' );
function live_chat_widget_assets() {
    wp_enqueue_style(
        'live-chat-widget-style',
        get_stylesheet_directory_uri().'/livechatwidget.css'
    );

    wp_enqueue_script(
        'live-chat-widget-script',
        get_stylesheet_directory_uri().'/livechatwidget.js',
        array('jquery'),
        null,
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'live_chat_widget_assets');


