<?php get_header(); ?>
<div class="container" style="margin-top: 0px;">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="row">
				<div class="col-md-8">
					<?php if(have_posts()) : ?>
					<?php while(have_posts()) : the_post(); ?>
						<h1 style="padding-top: 30px;"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<hr>
						<p><?php the_excerpt(); ?></p>
					<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
					<div class="nav-previous alignleft"><?php next_posts_link( 'Older posts' ); ?></div>
					<div class="nav-next alignright"><?php previous_posts_link( 'Newer posts' ); ?></div>
				</div>
				<div class="col-md-4">
					<a class="twitter-timeline" href="https://twitter.com/FRC4825" data-widget-id="537256942465331200">Tweets by @FRC4825</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>