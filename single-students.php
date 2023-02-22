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
<?php while(have_posts()): the_post(); ?>
<div class="student-details">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<?php the_post_thumbnail(); ?>
				<table  width="400px">
					<tr>
						<th>Name</th>
						<td>:</td>
						<td><?php the_title(); ?></td>
					</tr>
					<tr>
						<th><?php echo get_post_meta(get_the_id(),'_reginame', true); ?></th>
						<td>:</td>
						<td><?php echo get_post_meta(get_the_id(),'_sturegi', true); ?></td>
					</tr>
				</table>
			</div>
			<div class="col-md-8">
				<div class="sanod">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<!--Inner Content End--> 

<?php get_footer(); ?>