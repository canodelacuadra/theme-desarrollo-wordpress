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
?>

