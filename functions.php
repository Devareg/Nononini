<?php
function add_css()

{

   wp_register_style('first', get_template_directory_uri() . '/assets/css/foodhut.css', false,'1.1','all');

   wp_enqueue_style( 'first');

   wp_register_style('themify-icons', get_template_directory_uri() . 'assets/vendors/themify-icons/css/themify-icons.css', false,'1.1','all');

   wp_enqueue_style( 'themify-icons');

   wp_register_style('animate', get_template_directory_uri() . 'assets/vendors/animate/animate.css', false,'1.1','all');

   wp_enqueue_style( 'animate');


}

add_action('wp_enqueue_scripts', 'add_css');


function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . 'assets/vendors/jquery/jquery-3.4.1.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
   wp_register_script('change', get_template_directory_uri() . 'assets/vendors/bootstrap/bootstrap.bundle.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'change');
   wp_register_script('popup', get_template_directory_uri() . 'assets/vendors/bootstrap/bootstrap.affix.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'popup');
   wp_register_script('carousel', get_template_directory_uri() . 'assets/vendors/wow/wow.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'carousel');
   wp_register_script('bootstrap', get_template_directory_uri() . 'assets/js/foodhut.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );

?>
