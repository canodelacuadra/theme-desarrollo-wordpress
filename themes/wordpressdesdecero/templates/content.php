<div class="col-md-4">
        <figure class='list-posts'>
       
        <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('medium'); ?>
        </a>
        <?php endif; ?>
        </figure>
        <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <div><?php the_excerpt() ?> 
        </div>
        <p><a class="btn btn-secondary" href="<?php the_permalink() ?>" role="button">Ver Detalles &raquo;</a></p>
      </div>