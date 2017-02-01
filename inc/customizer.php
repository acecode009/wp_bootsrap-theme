<?php

    function wpb_customizer($wp_customize){
        
        $wp_customize -> add_section('showcase', array(
            
            'title' => __('showcase', 'wpbootstrap'),
            'description' => sprintf(__('options for show case', 'wpbootstrap')),
            'priority'  => 130
        ));
        
        //image
        $wp_customize -> add_setting('showcase_image', array(
            'default'   => get_bloginfo('template_directory').'/img/showcase.jpg', 
            'type'      => 'theme_mod'
        ));
        
         $wp_customize -> add_control(new WP_Customize_image_Control($wp_customize,'showcase_image' , array(
              
             'label'    => __('ShowCase Image', 'wpbootstrap'),
             'section'  => 'showcase',
             'settings' => 'showcase_image',
             'priority' => 1
             
             )));
        
        //heading 
        $wp_customize -> add_setting('showcase_heading', array(
            'default'   => _x('Custom Bootstrap Theme', 'wpbootstrap'),
            'type'      => 'theme_mod'
        ));
        
         $wp_customize -> add_control('showcase_heading', array(
              
             'label'    => __('Heading', 'wpbootstrap'),
             'section'  => 'showcase',
             'priority' => 2
             
             ));
        $wp_customize -> add_setting('showcase_text', array(
            'default'   => _x('lorem ipsum dono alelrt themvr comecac  lalxsd ', 'wpbootstrap'),
            'type'      => 'theme_mod'
        ));
        
         $wp_customize -> add_control('showcase_text', array(
              
             'label'    => __('Text', 'wpbootstrap'),
             'section'  => 'showcase',
             'priority' => 3
             
             ));
        
        //button customize
        
        $wp_customize -> add_setting('btn_url', array(
            'default'   => _x('http://test.com', 'wpbootstrap'),
            'type'      => 'theme_mod'
        ));
        
         $wp_customize -> add_control('btn_url', array(
              
             'label'    => __('Button Url', 'wpbootstrap'),
             'section'  => 'showcase',
             'priority' => 4
             
             ));
        $wp_customize -> add_setting('btn_text', array(
            'default'   => _x('Read More', 'wpbootstrap'),
            'type'      => 'theme_mod'
        ));
        
         $wp_customize -> add_control('btn_text', array(
              
             'label'    => __('Button Text', 'wpbootstrap'),
             'section'  => 'showcase',
             'priority' => 5
             
             ));
    }

add_action('customize_register', 'wpb_customizer');