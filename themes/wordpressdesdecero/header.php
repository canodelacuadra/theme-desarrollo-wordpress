<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title><?php bloginfo('name') ?></title>

 <?php wp_head() ?>
  </head>
  <body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <?php 
if ( function_exists( 'the_custom_logo' ) ) {
  the_custom_logo();
 }else{?>
  <a class="navbar-brand site-title" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a>
  <?php 
  }
   ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
    <?php mostrar_menu_principal(); ?>
     
    </ul>
    <form action='<?php bloginfo('url') ?>' method='get' class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar" name="s" value="<?php the_search_query(); ?>" >
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>

<main role="main">
<div class=" card bg-white text-dark  border border-light mb-4">
<img  class='card-img'alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
  <div class="card-img-overlay">
  <h1 class="display-3  card-title"><?php bloginfo('name'); ?></h1>
  <h2 class='card-text'><?php bloginfo('description'); ?></h2>
  </div>
</div>


 