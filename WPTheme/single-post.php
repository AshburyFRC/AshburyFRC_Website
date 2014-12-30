<?php get_header(); ?>
<div class="container" style="margin-top: 0px;">
  <div class="panel panel-default">
  	<div class="panel-body">
      <?php if(have_posts()) : ?>
      	<?php while(have_posts()) : the_post(); ?>
        	<h1 style="padding-top: 30px;"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h1>
        	<p><i class="fa fa-calendar"></i> <?php the_date(); ?></p>
        	<hr>
        	<p><?php the_content(); ?></p>
        	
      	<?php endwhile; ?>
      <?php else : ?>
      <?php endif; ?>
     
    </div>
  </div>
</div>

<?php get_footer(); ?>