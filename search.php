<?php get_header(); ?> 

					

<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
	  
	  
      <div class="group btmspace-30"> 
        <div class="three_quarter first"> 
		
<!-- ################################################################################################ -->

<?php if(have_posts()) : ?>
		 <?php while(have_posts())  : the_post(); ?>
		 
		 <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentysixteen' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
		 <div class="contact_temp">
		 
		 <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a> 
		 <?php the_content(); ?> 
		 </div>
		 
		 <?php endwhile; ?>
		<?php else : ?>
		<h3><?php _e('404 Error&#58; Not Found', 'The theme name any'); ?></h3>
		<?php endif; ?>
<!-- ################################################################################################ --> 
        </div>
		
		
		
	<?php get_sidebar(); ?>
		
		
        
      </div>

      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>


<?php get_footer(); ?> 
