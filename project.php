/*
template name: Project-Page
*/

<?php get_header(); ?>
<!--Inner Heading Start-->
<div class="background_overlay">
	<div class="inner-heading" style="background-image: url('<?php header_image(); ?>');">
	  <div class="container">
		<h1>Our Complate Project</h1>
	  </div>
	</div>
</div>
<!--Inner Heading End--> 
<br />
<br />
<br />
<!--Project Start-->
<div class="project-wrappppp">

	<!--Inner Content Start-->
	<div class="inner-content">
	  <div class="container"> 
		<!--Project Start-->
		<div class="project-wrap">
		  <ul class="row">
<?php 
	$project = new WP_Query(array(
		'post_type'			=> 'ourproject',
		'posts_per_page'	=> -1,
	));
	while($project->have_posts()): $project->the_post();
?>
			<li class="col-md-4">
			  <div class="projectImg">
			  <?php the_post_thumbnail(); ?>
				<div class="service-overlay">
				  <div class="heading">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				  </div>
				  <p><?php the_category(', ',' ',''); ?></p>
				</div>
			  </div>
			</li>
<?php
	endwhile;
?>
		  </ul>
		</div>
		<!--Project End-->
		
		<div class="pagination span12">
			<?php the_posts_pagination(array(
				'screen_reader_text'	=> ' ',
				'prev_text'					=> 'prev',
				'next_text'					=> 'next',
				'mid_size' => 2,
			)); ?>
			
			</div>
		
		
		
	  </div>
	</div>
	<!--Inner Content End--> 
  <div class="clearfix"></div>
</div>
<!--Project End--> 
<?php get_footer(); ?>