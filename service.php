/*
template name: Service-Page
*/

<?php get_header(); ?>
<!--Inner Heading Start-->
<div class="background_overlay">
	<div class="inner-heading" style="background-image: url('<?php header_image(); ?>');">
	  <div class="container">
		<h1>Our Services</h1>
	  </div>
	</div>
</div>
<!--Inner Heading End--> 
<br />
<br />
<br />

<!--Service Start-->
<div class="team-wrap">
  <!--service Content Start-->
	<div class="inner-content">
	  <div class="container"> 
		<!--Services Start-->
		<div class="service-wrap">
		  <div class="row"> 
<?php 
	$service = new WP_Query(array(
		'post_type'			=> 'service',
		'posts_per_page'	=> -1,
	));
	while($service->have_posts()): $service->the_post();
?>
			<div class="col-md-4 col-sm-6">
			  <div class="service-thumb service-list-thumb">
				<div class="serviceImg">
					<?php the_post_thumbnail(); ?>
				</div>
				<div class="serviceInfo">
				  <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
				  
				  
				  <p><?php echo wp_trim_words(get_the_content(), 20, '</p><div class="readmore"><a href="'.get_the_permalink().'">Read More</a></div>' ); ?>
				  
				</div>
			  </div>
			</div>
<?php
	endwhile;
?>
		  </div>
		</div>
		<!--Services End--> 
	  </div>
	</div>
	<!--service Content End--> 
</div>
<!--service End--> 

<?php get_footer(); ?>