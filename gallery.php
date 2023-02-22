/*
template name: Gallery
*/

<?php get_header(); ?>
<!--Inner Heading Start-->
<div class="background_overlay">
	<div class="inner-heading" style="background-image: url('<?php header_image(); ?>');">
	  <div class="container">
		<h1>Gallery</h1>
	  </div>
	</div>
</div>
<!--Inner Heading End--> 

<!--Gallery area Start-->
<div class="gallery_area">
	<div class="project-heading">
		<div class="container">
		  <div class="title">
			<h1 style="color:#000;"><span></span>Our Gallery</h1>
			<p>If you like it, talk to us.</p>
			<hr />
		  </div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
		
<?php 
	$gallery = new WP_Query(array(
		'post_type'			=> 'gallery',
		'posts_per_page'	=> -1,
	));
	while($gallery->have_posts()): $gallery->the_post();
?>
		
			<div class="col-md-3 col-lg-3 col-sm-6">
				<div class="gallery_images">
					<a href="<?php $imageurl = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()),'full');
							
							echo $imageurl[0];

						?>" data-lightbox="gallery_images" data-title="<?php the_title(); ?>">
						<?php the_post_thumbnail(); ?>
					</a>
				</div>
			</div>
			
<?php
	endwhile;
?>	
			
			
		</div>
	</div>
</div>
<!--Gallery area End-->

<?php get_footer(); ?>