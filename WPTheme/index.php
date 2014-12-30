<?php get_header(); ?>
<div class="container" style="margin-top: 0px;">
  <div class="panel panel-default">
  <div class="panel-body">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <hr>
        <p><?php the_content(); ?></p>
      <?php endwhile; ?>
    <?php else : ?>
    <?php endif; ?>
        </div>
      </div>
     </div>



<?php get_footer(); ?>