<?php get_header() ?>
  <div class="container">
    <!-- Example row of columns -->
    <div class="row"> 
   <?php 
    if(have_posts()):
      while(have_posts()):
        the_post();
        get_template_part('templates/content');
      endwhile;
        get_template_part('templates/content','navegacion');
       else:
        get_template_part('templates/content','none');
        endif;
    ?>
    </div>
  </div> <!-- /container -->
</main>
<?php get_footer() ?>