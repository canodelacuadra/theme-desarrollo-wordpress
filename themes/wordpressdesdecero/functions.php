<?php 
// agregar un nuevo menu
function agregar_menu(){
register_nav_menu('principal', __('principal'));
}
//enganchamos el menu a wordprss
add_action('init','agregar_menu');
// function mostrar menu
function mostrar_menu(){
wp_nav_menu([
    'principal'=>'principal',
    'li'=>'nav-item',
    'a'=>'nav-link'
    ]);
}

/// función para controlar el excerpt
function excerpt_personalizado($length){
    return 20;
}
add_filter('excerpt_length','excerpt_personalizado');
//añadimos soporte de thumbnails
add_theme_support('post-thumbnails');

// shortcode
function firma_guay(){
    return 'Soy Jose';

}
add_shortcode('firma', 'firma_guay');

