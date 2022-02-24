<?php

//theme support
function testtheme_theme_support(){
add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'testtheme_theme_support');

//menus
function testtheme_menus(){

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);

}

add_action('init', 'testtheme_menus');

//header
function testtheme_register_styles(){
    
    $version= wp_get_theme()->get('Version');
    wp_enqueue_style('testtheme-style', get_template_directory_uri() . "/style.css", array('testtheme-bootstrap'), $version);
    wp_enqueue_style('testtheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0');
    wp_enqueue_style('testtheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0');


}

add_action('wp_enqueue_scripts', 'testtheme_register_styles');

//footer
function testtheme_register_scripts(){

    wp_enqueue_script('testtheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), true);
    wp_enqueue_script('testtheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), true);
    wp_enqueue_script('testtheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), true);
    wp_enqueue_script('testtheme-main', get_template_directory_uri()."assets/js/main.js", array(), true);

}

add_action('wp_enqueue_scripts', 'testtheme_register_scripts');

//widgets
function testtheme_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'description' => 'Footer Widget Area'
        )
    );
}

add_action('widgets_init', 'testtheme_widget_areas');

?>