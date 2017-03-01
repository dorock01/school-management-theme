<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Academic Education V2</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo get_template_directory_uri(); ?>/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="all">

<?php wp_head(); ?>
</head>
<body id="top" >
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
     <img height="31" width="400" src="<?php echo get_template_directory_uri(); ?>/images/title.gif">
    </div>
    <div class="fl_right">
      <form role="search" class="clear" method="post" action="<?php echo esc_url(home_url('/')); ?>">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="<?php echo get_search_query(); ?>" placeholder="Search Here" name="s" id="s" >
          <button class="fa fa-search" type="submit" title="Search" id="searchsubmit" value="<?php echo esc_attr_x('Search', 'submit button'); ?>" ><em>Search</em></button>
        </fieldset>
      </form>
	  
	  

	  
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->

<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
			  <?php
		wp_nav_menu(array(
		  'menu' => 'Main Navigation',
		  'container_id' => 'cssmenu',
		  'walker' => new CSS_Menu_Maker_Walker()
		));
		?>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>