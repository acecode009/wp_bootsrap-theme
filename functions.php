<?php

    // import bootstrap navwalker
    require_once('wp_bootstrap_navwalker.php');
    
    //theme support

    function wpb_theme_setup(){
        
        
        add_theme_support('post-thumbnails');
        // nav menus
        register_nav_menus(array(
            'primary' => __('Primary Menu')
        
        ));
        
       
        
        
        
        
    }
add_action('after_setup_theme', 'wpb_theme_setup');

 //post formats
function add_post_formats() {
    add_theme_support( 'post-formats', array( 'gallery', 'quote', 'video', 'aside', 'image', 'link' ) );
}
 
add_action( 'after_setup_theme', 'add_post_formats', 20 );


// excerpt length

function wpb_excerpt_length(){
    return 50;
}

add_filter('excerpt_length', 'wpb_excerpt_length');


// init sidebar widget

function wpb_init_sidebar($id){
    
    register_sidebar(array(
        'name' => 'Box1',
        'id'   => 'box1',
        'before_widget' => '<div class ="box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    
    ));
    register_sidebar(array(
        'name' => 'Box2',
        'id'   => 'box2',
        'before_widget' => '<div class ="box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    
    ));
    register_sidebar(array(
        'name' => 'Box3',
        'id'   => 'box3',
        'before_widget' => '<div class ="box">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    
    ));
}

add_action('widgets_init', 'wpb_init_sidebar');


// customizer file

require get_template_directory().'/inc/customizer.php';
    


