<?php get_header(); ?>
<div class="container" style="margin-top: 0px;">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="row">
        <div class="col-md-8">
          <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <hr>
            <p><?php the_content(); ?></p>
          <?php endwhile; ?>
          <?php else : ?>
          <?php endif; ?>
        </div>
        <div class="col-md-4">
          <img src="<?php bloginfo('template_directory'); ?>/img/bot.png" style="width: 100%;" class="img-responsive" alt="sherlock" draggable="false"/>
        </div>
      </div>
    </div>
  </div>
</div>



<?php get_footer(); ?>