/*
	template name: Contact-Page
*/
<?php get_header(); ?>

<!--Inner Heading Start-->
<div class="background_overlay">
	<div class="inner-heading" style="background-image: url('<?php header_image(); ?>');">
	  <div class="container">
		<h1>Contact Us</h1>
	  </div>
	</div>
</div>
<!--Inner Heading End-->

<!--Inner Content Start-->
<div class="inner-content">
  <div class="container"> 
    <!--Contact Start-->
    <div class="contact-wrap">
      <div class="title-box">
        <h2>Have Any Questions?</h2>
        <div class="text">You can message us for any task. We look forward to help you. </div>
      </div>
      <div class="default-form contact-form">
	  
	  
        <?php while(have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		
		
		
      </div>
      <section class="xs-contact-infomation xs-contact-info-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="contact-info-group"> <i class="fa fa-map" aria-hidden="true"></i>
                <h4>Visit our office</h4>
                <span>
					<?php echo $bestredux['address']; ?>
				</span> </div>
              <!-- .contact-info-group END --> 
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="contact-info-group"> <i class="fa fa-envelope-open" aria-hidden="true"></i>
                <h4>Mail us</h4>
                <a href="javascript:avoid(0)">
				
				<?php echo $bestredux['email-text']; ?>
				
				</a> </div>
              <!-- .contact-info-group END --> 
            </div>
            <div class="col-lg-4 col-md-4">
               <div class="contact-info-group">
					<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
					<h4>Call us</h4>
					<span><?php echo $bestredux['phone-one']; ?></span>
					<span><?php echo $bestredux['phone-two']; ?></span>
				</div>
              <!-- .contact-info-group END --> 
            </div>
          </div>
        </div>
      </section>
    </div>
    <!--Contact End--> 
  </div>
</div>
<!--Inner Content End-->


<!--Map Show Start-->
<!--<div class="google_map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3672.358382995144!2d91.39447035608518!3d23.010609909207368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sDoctor+Para+Road!5e0!3m2!1sen!2sbd!4v1566384066787!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>-->
</div>
<!--Map Show End-->
<?php get_footer(); ?>