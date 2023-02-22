/*
template name: About-Us
*/

<?php get_header(); ?>
<!--Inner Heading Start-->
<div class="background_overlay">
	<div class="inner-heading" style="background-image: url('<?php header_image(); ?>');">
	  <div class="container">
		<h1>About Us</h1>
	  </div>
	</div>
</div>
<!--Inner Heading End--> 
<br />
<br />
<br />

<!--about Start-->
<div class="welcomeWrap">
  <div class="container">
<?php 
	$aboutus = new WP_Query(array(
		'post_type'			=> 'aboutus',
		'posts_per_page'	=> -1,
	));
	while($aboutus->have_posts()): $aboutus->the_post();
?>
    <div class="row">
      <div class="col-md-7">
        <div class="title">
          <h1><?php the_title(); ?></h1>
        </div>
		
		
        <?php the_content(); ?>
        
      </div>
      <div class="col-md-5">
        <div class="welImg">
			<?php the_post_thumbnail(); ?>
		</div>
      </div>
<?php
	endwhile;
?>
    </div>
  </div>
</div>
<!--about End--> 

<?php get_footer(); ?>