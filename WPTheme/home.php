<?php get_header(); ?>
<div class="container" style="margin-top: -40px;">
      <img src="<?php bloginfo('template_directory'); ?>/img/intro.png" alt="" class="img-responsive" draggable="false"/>
    </div>
    <div class="container" style="padding-top: 30px;">
      <div id="first">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <center><img src="<?php bloginfo('template_directory'); ?>/img/frclogo.gif" style="width: 40%; padding-top: 20px; padding-bottom: 20px;" draggable="false"/></center>
            </div>
            <div class="col-md-7">
              <p style="padding-top: 35px; text-align: justify;">For Inspiration and Recognition of Science and Technology (FIRST) is a non-profit organization that was started in 1989 in a high school gym. It has inspired students to choose careers in Science and Technology and now reaches over 100,000 students worldwide.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="padding-top: 30px;">
      <div class="panel panel-inverse">
        <div class="panel-body">
          <div class="container">
            <div class="row">
              <div class="col-md-8" style="text-align:justify">
                <p style="padding-top: 71px">Ashbury College FRC team 4825, The Coltenoids, is based out of Ottawa, Ontario, Canada. We are a student-led robotics team participating in the annual FIRST Robotics Competition. For the past three years, The Coltenoids has given students the opportunity to pursue their interests in science, technology, and engineering; all while having fun.</p>
              </div>
              <div class="col-md-4">
                <img src="<?php bloginfo('template_directory'); ?>/img/team.jpg" style="padding-top: 30px; width:300px;" alt="le sexy team" draggable="false" class="img-responsive"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="container" style="padding-top: 30px;">
      <div class="row">
        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-body">
              <h1>Latest News</h1>
              <hr>
          <?php if(have_posts()) : ?>
           <?php while(have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <p><?php the_excerpt(); ?></p>
                    <p><i class="fa fa-calendar"></i> <?php the_date(); ?></p>
                     <hr>
            <?php endwhile; ?>
        <?php else : ?>
      <?php endif; ?>
             
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-default">
            <div class="panel-body">
              <h1>Latest Tweets</h1>
              <hr>
             <center> <a href="https://twitter.com/FRC4825" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @FRC4825 on Twitter</a></center>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

              <center><div class="fb-like" data-href="https://www.facebook.com/theashburycoltenoids" data-width="150" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false" style="padding-top: 10px; padding-bottom: 10px;"></div></center>
             
             <a class="twitter-timeline" href="https://twitter.com/FRC4825" data-widget-id="537251793550315520">Tweets by @FRC4825</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
              
            </div>
          </div>
        </div>
      </div>
    </div>






<?php get_footer(); ?>