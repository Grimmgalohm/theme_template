<?php
/*Recuerda siempre comentar tu código :D*/

/*
  Linkea las hojas de estilos
  Si es necesario, puedes renombrar las funciones
  Enqueue styles
*/

function theme_template_styles(){

  //General Styles
  wp_enqueue_style( 'main-styles', get_stylesheet_uri(), microtime(), 'all');

} add_action('wp_enqueue_scripts', 'theme_template_styles');


/*
  Linkea los archivos de JavaScript
  Si es necesario, puedes renombrar las funciones
  Enqueue scripts
*/

function theme_template_scripts(){

  //General JavaScript
  wp_enqueue_script( 'main.js', get_template_directory_uri() . "/js/main.js", microtime(), true);

}add_action('wp_enqueue_scripts', 'theme_template_scripts');

/*
  Theme Template Setup
  funcionalidades básicas del tema de WordPress
*/

if( !function_exists('theme_template_setup') ){
  function theme_template_setup(){

      // Add default posts and comments RSS feed links to head.
      add_theme_support( 'automatic-feed-links' );

      /*
       * Let WordPress manage the document title.
       * By adding theme support, we declare that this theme does not use a
       * hard-coded  tag in the document head, and expect WordPress to
       * provide it for us.
       */
      add_theme_support( 'title-tag' );

      /*
       * Enable support for Post Thumbnails on posts and pages.
       *
       * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
       */
      add_theme_support( 'post-thumbnails' );
      set_post_thumbnail_size( 825, 510, true );

      // This theme uses wp_nav_menu() in two locations.
      register_nav_menus( array(
          'primary' => __( 'Primary Menu',      'wp_template' ),
          'footer'  => __( 'Footer menu page',  'wp_template' ),
      ) );

      /*
       * Switch default core markup for search form, comment form, and comments
       * to output valid HTML5.
       */
      add_theme_support( 'html5', array(
          'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
      ) );

      /*
       * Enable support for Post Formats.
       *
       * See: https://codex.wordpress.org/Post_Formats
       */
      add_theme_support( 'post-formats', array(
          'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
      ) );

      $default_color = trim( $color_scheme[0], '#' );

      // Setup the WordPress core custom background feature.
      add_theme_support( 'custom-background', apply_filters( 'twentyfifteen_custom_background_args', array(
          'default-color'      => $default_color,
          'default-attachment' => 'fixed',
      ) ) );

  }
  add_action('after_setup_theme', 'theme_template_setup');
}

?>
