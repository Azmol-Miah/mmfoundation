<?php
    // Register Nav Walker class_alias
    require_once('wp_bootstrap_navwalker.php');

    // Theme Support
    function mmfoundation_setup(){

        add_theme_support('post-thumbnails');

        //nav menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        ));

        //Post Formats
        add_theme_support('post-formats', array('aside', 'gallery'));
    }

    add_action('after_setup_theme', 'mmfoundation_setup');

    //Excerpt Length Control
    function mmfoundation_set_excerpt_length(){
        return 45;
    }

    add_filter('excerpt_length', 'mmfoundation_set_excerpt_length');

    //Widgets Locations
    function mmfoundation_init_widgets($id){
        register_sidebar(array(
            'name' => 'Sidebar',
            'id'   => 'sidebar',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>'
        )); // still need to use this function even if its not a sidebar widget
    
        register_sidebar(array(
            'name' => 'Box1',
            'id'   => 'box1',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => 'Box2',
            'id'   => 'box2',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        ));

        register_sidebar(array(
            'name' => 'Box3',
            'id'   => 'box3',
            'before_widget' => '<div class="box">',
            'after_widget' => '</div>',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        )); 
    }

    add_action('widgets_init', 'mmfoundation_init_widgets');

    //Customizer File
    include get_template_directory().'/inc/customizer.php';