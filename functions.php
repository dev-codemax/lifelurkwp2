<?php  


function lifelurk_menus(){

  register_nav_menus(
    array('header-menu'=>'Top Menu'
    ,'footer-menu'=>'Bottom Menu'
    ,'categary-menu'=>'Categary Menu',
    'full-menu'=>'Full Menu',
    'term-menu'=>'Term Menu'
    )
  );

}

add_action('init','lifelurk_menus');








function lifelurk_theme_support(){
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','lifelurk_theme_support');






function lifelurk_register_styles(){

  wp_register_style('header',get_template_directory_uri().'/css/header.css',
  array(),false,'all');
  wp_enqueue_style('header');

  wp_register_style('footer',get_template_directory_uri().'/css/footer.css',
  array(),false,'all');
  wp_enqueue_style('footer');

}

add_action('wp_enqueue_scripts','lifelurk_register_styles');







function lifelurk_register_scripts(){

  wp_enqueue_script('jquery');

  wp_register_script('script',get_template_directory_uri().'/scripts/script.js',
  array('jquery'),false,true);
  wp_enqueue_script('script');

}

add_action('wp_enqueue_scripts','lifelurk_register_scripts');



