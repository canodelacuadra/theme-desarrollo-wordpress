<?php 
get_header();
if(have_posts()):
    while(have_posts()):
        the_post();
// escribimos lo que va en el bucle
?>
    <h2><a href="<?php the_permalink()?>"><?php the_title()?></a> </h2>
    <p><span><?php the_date()?> </span><span><?php the_author()?> </span></p>
    <p><span><?php the_category()?> </p>
    <p><?php the_excerpt()?> </p>
    <hr>

<?php
// hasta aquí lo que va del bucle
    endwhile;
    get_template_part('templates/content','navegacion');
else:
    echo 'no hay resultados para tu búsqueda';
endif; 



get_footer();


?>