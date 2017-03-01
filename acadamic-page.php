<?php/*Template Name: Acadamic Page*/?>
<?php get_header(); ?> 

					

<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <div class="three_quarter first"> 
		
<!-- ################################################################################################ -->
         <?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
		 
		 <?php if(have_posts()) : ?>
		 <?php while(have_posts())  : the_post(); ?>
		 <?php the_title(); ?> 
		 <?php the_content(); ?>
		 
		 <?php endwhile; ?>
		<?php else : ?>
		<h3><?php _e('404 Error&#58; Not Found', 'The theme name any'); ?></h3>
		<?php endif; ?>
<!-- ################################################################################################ --> 
        </div>

        <div class="one_quarter sidebar"> 
          <!-- ################################################################################################ -->
          <div class="sdb_holder">
            <h6>Virtual Tour</h6>
            <div class="mediacontainer"><img src="<?php echo get_template_directory_uri(); ?>/images/demo/video.gif" alt="">
              <p><a href="#">View More Tour Videos Here</a></p>
            </div>
          </div>
          <div class="sdb_holder">
            <h6>Quick Information</h6>
            <ul class="nospace quickinfo">
              <li class="clear"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/demo/80x80.gif" alt=""> Make An Application</a></li>
              <li class="clear"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/demo/80x80.gif" alt=""> Order A Prospectus</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>


<?php get_footer(); ?> 
