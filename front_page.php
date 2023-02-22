<?php
/*
template name: Home Page
*/
?>
<?php get_header(); ?>




<!-- Revolution slider start -->
<div class="tp-banner-container">
  <div class="tp-banner" >
    <ul>
<?php 
	$slides = new WP_Query(array(
		'post_type'			=> 'slides',
		'posts_per_page'	=> -1,
	));
	while($slides->have_posts()): $slides->the_post();
?>
      <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on">
	  
	  <?php the_post_thumbnail(); ?>
	  
	  
        <div class="caption lfl large-title tp-resizeme slidertext1" data-x="center" data-y="270" data-speed="600" data-start="1600">
			<span style="font-size: 40px; padding: 0; margin: 0;">
				<?php echo get_the_title(); ?>
			</span>
		</div>
		
        <div class="caption lft large-title tp-resizeme slidertext3" data-x="center" data-y="370" data-speed="600" data-start="2200">
			<span style="color: #fff; font-size: 20px; width: 400px; ">
				<?php echo get_the_content(); ?>
			</span>
		</div>
        <div class="caption lfb large-title tp-resizeme slidertext4" data-x="center" data-y="440" data-speed="600" data-start="2800"><a href="index.php/contact" class="slidebtn">Contact US <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
      </li>
<?php
	endwhile;
?>
    </ul>
  </div>
</div>
<!-- Revolution slider end --> 

<!--Furniture Start-->
<div class="furniture-wrap">
  <div class="container">
    <ul class="furniture-service">
<?php 
	$serviceicon = new WP_Query(array(
		'post_type'			=> 'serviceicon',
		'posts_per_page'	=> 6,
	));
	while($serviceicon->have_posts()): $serviceicon->the_post();
?>
		<li><a href="<?php the_permalink(); ?>">
			<div class="furniture">
			  <div class="icon">
				<?php the_post_thumbnail(); ?>
			  </div>
			  <h3><?php the_title(); ?></h3>
			</div>
			</a>
		</li>
<?php
	endwhile;
?>
    </ul>
  </div>
</div>
<!--Furniture Start--> 

<!--about Start-->
<div class="welcomeWrap">
  <div class="container">
<?php 
	$homeabout = new WP_Query(array(
		'post_type'			=> 'homeabout',
		'posts_per_page'	=> -1,
	));
	while($homeabout->have_posts()): $homeabout->the_post();
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
<!--about End--> 

<!--Service Start-->
<div class="team-wrap">
  <!--service Content Start-->
	<div class="inner-content" style="background: #F3F3F3; padding: 40px 0; ">
		<div class="project-heading">
			<div class="container">
			  <div class="title">
				<h1 style="color:#000;"><span>Our</span> Services</h1>
				<hr />
			  </div>
			</div>
		</div>
	  <div class="container"> 
		<!--Services Start-->
		<div class="service-wrap">
		  <div class="row">
<?php 
	$service = new WP_Query(array(
		'post_type'			=> 'service',
		'posts_per_page'	=> 9,
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
				  
				  
				  <p><?php echo wp_trim_words(get_the_content(), 15, '</p><div class="readmore"><a href="'.get_the_permalink().'">Read More</a></div>' ); ?>
				  
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


<!--Project Start-->
<div class="project-wrapp" style="">

	<!--Inner Content Start-->
	<div class="inner-content" style="background: #ffffff; padding-bottom: 30px; ">
		<div class="project-heading">
			<div class="container">
			  <div class="title">
				<h1 style="color:#000;"><span>Our Completed</span> Projects</h1>
				<hr style="border-color: #fff;" />
			  </div>
			</div>
		</div>
	  <div class="container"> 
		<!--Project Start-->
		<div class="project-wrap">
		  <ul class="row">
		  
<?php 
	$project = new WP_Query(array(
		'post_type'			=> 'ourproject',
		'posts_per_page'	=> 9,
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
	  </div>
	</div>
	<!--Inner Content End--> 
  <div class="clearfix"></div>
</div>
<!--Project End-->


<style type="text/css"> 
	#counter{
		background-color: <?php echo $bestredux['count-background']['background-color']; ?>;
		background-image: url(<?php echo $bestredux['count-background']['background-image']; ?>);
		background-position:<?php echo $bestredux['count-background']['background-position']; ?>;
		background-repeat: <?php echo $bestredux['count-background']['background-repeat']; ?>;
		background-size: <?php echo $bestredux['count-background']['background-size']; ?>;
		background-attachment: <?php echo $bestredux['count-background']['background-attachment']; ?>;
	}
</style>


<!--Counter Start-->
<div class="counterbgcolor" id="counter");">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-home" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="<?php echo $bestredux['project-completednum']; ?>" data-speed="1000">
				<?php echo $bestredux['project-completednum']; ?>
		  </span> <span class="counter-text"><?php echo $bestredux['project-completed']; ?></span>
		</div>
      </div>
	  
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-building" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="<?php echo $bestredux['running-projectnum']; ?>" data-speed="2000">
		  
		  <?php echo $bestredux['running-projectnum']; ?>
		  
		  </span> <span class="counter-text">
		  
		  <?php echo $bestredux['running-project']; ?>
		  
		  </span>
		</div>
      </div>
	  
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-users" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="<?php echo $bestredux['satistied-clientsnum']; ?>" data-speed="3000">
		  
		  <?php echo $bestredux['satistied-clientsnum']; ?>
		  
		  </span> <span class="counter-text">
		  
		  <?php echo $bestredux['satistied-clients']; ?>
		  
		  </span> </div>
      </div>
	  
      <div class="col-md-3 col-sm-3 col-xs-12 counter-item">
        <div class="counterbox">
          <div class="counter-icon"><i class="fa fa-handshake-o" aria-hidden="true"></i></div>
          <span class="counter-number" data-from="1" data-to="<?php echo $bestredux['our-membernum']; ?>" data-speed="4000">
		  
		  <?php echo $bestredux['our-membernum']; ?>
		  
		  </span> <span class="counter-text">
		  <?php echo $bestredux['our-member']; ?>
		  </span> </div>
      </div>
    </div>
  </div>
</div>
<!--Counter End--> 



<!--Gallery area Start-->
<div class="gallery_area">
	<div class="project-heading">
		<div class="container">
		  <div class="title">
			<h1 style="color:#000;"><span></span> Gallery</h1>
			<hr />
		  </div>
		</div>
	</div>
	
	<div class="container-fluid">
		<div class="row">
<?php 
	$gallery = new WP_Query(array(
		'post_type'			=> 'gallery',
		'posts_per_page'	=> 16,
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

<!--Frounder Ceo Content Start-->
<div class="inner-content padding_top_bottom_40 bg_gray">
	<div class="project-heading">
		<div class="container">
		  <div class="title">
			<h1 style="color:#000;"><span></span> Founder & CEO</h1>
			<hr />
		  </div>
		</div>
	</div>
  <div class="container"> 
    <!--Team Start-->
    <div class="team-wrap">
      <ul class="row">
        <div class="centerrrr">
<?php 
	$member = new WP_Query(array(
		'post_type'			=> 'member',
		'posts_per_page'	=> -1,
	));
	while($member->have_posts()): $member->the_post();
?>
			<li class="col-md-4 col-sm-6">
			  <div class="teamImg frounder_img">
				<?php the_post_thumbnail(); ?>
			  </div>
			  <div class="teamInfo frounder_info">
				<h3><?php the_title(); ?></h3>
				<div class="designation">
					<?php the_content(); ?>
				</div>
			  </div>
			</li>
<?php
	endwhile;
?>
		</div>
      </ul>
    </div>
    <!--Team End--> 
  </div>
</div>
<!--Frounder Ceo Content End-->


<?php get_footer(); ?>