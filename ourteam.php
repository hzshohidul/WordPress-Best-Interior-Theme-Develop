<?php
/*
template name: Our_Team
*/
?>

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

<!--<div class="student_search">
	<div class="container">
		<div class="row">
			<h2>Search</h2>
			<form action="single-students" method="GET">
				<div class="input-group col-mb-12">
					<input type="text" id="stu" name="stu" class="form-control" placeholder="Enter Register Number">
				</div>
			</form>
		</div>
	</div>
</div>-->
<!--Student Search Start-->

<!--Student Search End-->

<!--Inner Content Start-->
<div class="inner-content">
  <div class="container">
    <!--Team Start-->
    <div class="team-wrap">
      <ul class="row">
<?php 
	$teammember = new WP_Query(array(
		'post_type'			=> 'teammember',
		'posts_per_page'	=> -1,
	));
	while($teammember->have_posts()): $teammember->the_post();
?>
        <li class="col-md-3 col-sm-6">
          <div class="teamImg student_img teammember-img">
			<?php the_post_thumbnail(); ?>
          </div>
          <div class="teamInfo student_info">
            <h3><a href="javascript:avoid(0)"><?php the_title(); ?></a></h3>
            <div class="designation">
			
			<?php echo get_post_meta(get_the_id(),'_membertitle', true); ?>
			
			</div>
          </div>
        </li>
<?php endwhile; ?>
      </ul>
    </div>
    <!--Team End--> 
	<!--<nav aria-label="Page navigation example">
	  <ul class="pagination">
		<li class="page-item"><a class="page-link" href="#">Previous</a></li>
		<li class="page-item"><a class="page-link active" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">Next</a></li>
	  </ul>
	</nav>-->
  </div>
</div>
<!--Inner Content End--> 
<!--Project End--> 
<?php get_footer(); ?>