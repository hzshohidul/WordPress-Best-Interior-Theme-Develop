<?php get_header(); ?>
<!--Inner Heading Start-->
<div class="background_overlay">
	<div class="inner-heading" style="background-image: url('<?php header_image(); ?>');">
	  <div class="container">
		<h1>Search</h1>
	  </div>
	</div>
</div>
<!--Inner Heading End-->
<br />
<br />
<br />
<!--Inner Content Start-->
<div class="inner-content BlogWrp blogList">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
	  
<?php if(have_posts()):  ?>
	<?php while(have_posts()): the_post(); ?>
        <div class="blog-thumb blog-list-thumb">
          <div class="row">
            <div class="col-lg-5 col-md-6">
              <div class="blogImg">
				<?php the_post_thumbnail(); ?>
			  </div>
            </div>
            <div class="col-lg-7 col-md-6">
              <div class="blogInfo">
                <h5>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h5>
                
				
				<p><?php echo wp_trim_words(get_the_content(), 30, '</p><div class="readmore"><a href="'.get_the_permalink().'">Read More</a></div>' ); ?>
				
              </div>
            </div>
          </div>
        </div>
	<?php endwhile; ?>
		<?php else: ?>
			<h2>No Search Result Found</h2>
			<br />
			<br />
			<br />
<?php endif; ?>

      </div>
    </div>
  </div>
</div>
<!--Inner Content End--> 

<?php get_footer(); ?>