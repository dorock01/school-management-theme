<?php 
/* Template Name: Students DIboy  */



get_header(); ?> 

					

<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <div class="three_quarter first"> 
		
		<h1> Student of Darul Irfan Balok Madrasha</h1>	
<!-- ################################################################################################ -->
<?php $descendants = get_categories(array('child_of' => 8)); ?>
<?php foreach ($descendants as $child) { ?>
<?php $catPosts = new WP_Query(); $catPosts->query("cat=$child->term_id"); ?>

<h2>
<?php
echo '<a href="'.get_category_link($child->cat_ID).'">';
 echo $child->cat_name . '</a>';
 ?>
 </h2>

<?php while ($catPosts->have_posts()) : $catPosts->the_post(); ?>
<ul>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
</ul>
<?php endwhile; ?>
<?php } ?>
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
