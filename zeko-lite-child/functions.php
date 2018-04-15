<?php
/**
** activation du thème enfant
**/
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
 wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/* ajout d'une favicon */
function mon_favicon(){
  echo '<link rel="shortcut icon" href="'. get_stylesheet_directory_uri() .'/images/favicon.ico" />';
}
add_action( 'wp_head', 'mon_favicon');

/* page d'erreur 404 personnalisée*/
function page404_redirection()
{
 global $mapage;
 if(is_404())
 {
 wp_redirect(home_url("erreur"));
 exit;
 }
}
 
add_action('wp', 'page404_redirection',1);
