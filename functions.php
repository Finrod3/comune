<?php

/*navbarwalker
--------------------------*/

require_once('assets/bs4navwalker.php');
/*setup theme
--------------------------*/

function comune_setup_theme(){

  add_theme_support('title-tag');

  add_theme_support( 'post-thumbnails' );


  add_image_size('comune_big', 1400, 800, true);
  add_image_size('comune_quad', 600, 600, true);
  add_image_size('comune_single', 800, 500, true);

  register_nav_menus(array(
    'header'=>esc_html__('Header', 'comune'),
  ));




}

add_action('after_setup_theme', 'comune_setup_theme');

/* Include sidebar
________________________________*/
/* Register Sidebars
-------------------------------------------------------- */

if(! function_exists('comune_sidebars') ) {

  function comune_sidebars(){
    register_sidebar(array(
      'name' => esc_html__('Primary','comune'),
      'id' => 'primary',
      'description' => esc_html__('Main Sidebar','comune'),
      'before_title' => '<h3>' ,
      'after_title' => '</h3>',
      'before_widget' => '<div class="widget my-5 %2$s clearfix">',
      'after_widget' => '</div>',

      )
    );
  }

}

add_action('widgets_init','comune_sidebars');


/* Include javascritpt files
________________________________*/

/* Include javascript files
-------------------------------------------------------- */

if(! function_exists('comune_scripts') ) {

  function comune_scripts(){

    wp_enqueue_script('comune-bootstrap-js', get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'),null ,true );
    wp_enqueue_script('comune-popper-js', get_template_directory_uri() .'/js/popper.min.js', array('jquery'),null ,true );
    wp_enqueue_script('comune-bootstrap-js', get_template_directory_uri() .'/js/bootstrap-italia.min.js', array('jquery'),null ,true );
    wp_enqueue_script('comune-bootstrap-js', get_template_directory_uri() .'/js/bootstrap-italia.boundle.min.js', array('jquery'),null ,true );
    wp_enqueue_script('comune-scripts-js', get_template_directory_uri() .'/js/scripts.js', array('jquery'),null ,true );

    if ( is_singular() ) wp_enqueue_script( "comment-reply" );

  }

}

add_action('wp_enqueue_scripts', 'comune_scripts');


/* Include css files
-------------------------------------------------------- */

if(! function_exists('comune_styles') ) {

  function comune_styles(){

    wp_enqueue_style('comune-bootstrap-css', get_template_directory_uri() .'/css/bootstrap-italia.min.css');
    wp_enqueue_style('comune-style-default-css', get_template_directory_uri() .'/style.css');
    wp_enqueue_style('comune-font-awesome', get_template_directory_uri() .'/css/italia-icon-font.css');
    wp_enqueue_style('comune-font', '//fonts.googleapis.com/css?family=Montserrat:200,300,400,700');


  }

}

add_action('wp_enqueue_scripts', 'comune_styles');


/* Add class to button submit
-------------------------------------------------------- */

function wpdocs_comment_form_defaults( $defaults ) {
  $defaults['class_submit'] = 'btn btn-primary btn-lg';
  return $defaults;
}

add_filter( 'comment_form_defaults', 'wpdocs_comment_form_defaults' );


/* Add class to button submit
-------------------------------------------------------- */

add_action( 'body_class', 'add_class_bg_trasp_body');

function add_class_bg_trasp_body($classes){
  if(has_post_thumbnail() && is_page()){
    array_push($classes,'navbar-transparent');
  } else if(is_front_page()){
    array_push($classes,'navbar-transparent');
  }

  return $classes;

}




 ?>
