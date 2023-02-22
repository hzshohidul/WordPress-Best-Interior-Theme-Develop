<?php get_header(); ?>
<!--Inner Heading Start-->
<div class="background_overlay">
	<div class="inner-heading" style="background-image: url('<?php header_image(); ?>');">
	  <div class="container">
		<h1><?php the_title(); ?></h1>
	  </div>
	</div>
</div>
<!--Inner Heading End--> 
<br />
<br />
<br />
<!--Inner Content Start-->
<div class="inner-content BlogWrp">
  <div class="container">
    <div class="row">
	
	
<?php while(have_posts()): the_post(); ?>
      <div class="col-lg-8">
        <div class="image-holder project_details">
		  <?php the_content(); ?>
        </div>
      </div>
<?php
	endwhile;
?>
    </div>
  </div>
</div>
<!--Inner Content End--> 
<?php get_footer(); ?>