<?php get_header(); ?>

<!--Inner Heading Start-->
<div class="background_overlay">
	<div class="inner-heading" style="background-image: url('<?php header_image(); ?>'); ">
	  <div class="container">
		<h1>Blog Details</h1>
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
<?php
	while(have_posts()): the_post();
?>
      <div class="col-lg-8">
        <div class="image-holder">
          <div class="img-thumb">
			<?php the_post_thumbnail(); ?>
		  </div>
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="text-holder">
          <div class="row mb-10">
            <?php the_content(); ?>
			<br />
			<br />
        </div>
      </div>
    </div>
<?php
	endwhile;
?>
  </div>
</div>
<!--Inner Content End--> 

<?php get_footer(); ?>