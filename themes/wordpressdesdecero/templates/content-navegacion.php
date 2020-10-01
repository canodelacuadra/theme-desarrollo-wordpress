<div class="paginacion">
      <?php if(get_next_posts_link()): ?>
    <button class="btn btn-primary" >  <?php   echo get_next_posts_link(); ?></button>
    <?php endif ?>
    <?php if(get_previous_posts_link()): ?>
    <button class="btn btn-primary" > <?php echo get_previous_posts_link(); ?></button>
    <?php endif ?>
      </div>