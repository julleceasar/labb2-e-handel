<?php


function mina_script() {
 
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}


add_action('wp_enqueue_scripts', 'mina_script');

// Lägger till support för woocommerce i temat
function add_woocommerce_support(){
    
    add_theme_support('woocommerce');
}

add_action("after_setup_theme", "add_woocommerce_support");

// Lägger till en liten text i carten 
function valda_produkter(){
    echo 'Valda produkter:';
}
add_action('woocommerce_before_cart', 'valda_produkter', 10);

// Remove action - tar bort sidebar på alla sidor 
function tk_remove_storefront_sidebar() {
    remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
  }
  add_action( 'get_header', 'tk_remove_storefront_sidebar' );



?>