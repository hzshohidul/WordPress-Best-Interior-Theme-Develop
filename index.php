<?php get_header(); ?>
<!--Inner Heading Start-->
<div class="background_overlay">
	<div class="inner-heading" style="background-image: url('<?php header_image(); ?>');">
	  <div class="container">
		<h1>Blog List</h1>
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
                <ul class="blog-meta">
                  <li> <i class="fa fa-calendar" aria-hidden="true"></i> <a href="#"><?php the_time('M j'); ?></a> </li>
                  <li> <i class="fa fa-user" aria-hidden="true"></i> <a href="#"><?php the_author(); ?></a> </li>
                  <li> <i class="fa fa-tag" aria-hidden="true"></i> <a href="#"><?php the_category(', ',' ',''); ?></a> </li>
                </ul>
				
				<p><?php echo wp_trim_words(get_the_content(), 30, '</p><div class="readmore"><a href="'.get_the_permalink().'">Read More</a></div>' ); ?>
				
              </div>
            </div>
          </div>
        </div>
<?php endwhile; ?>


		<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item">
					<?php the_posts_pagination(array(
						'screen_reader_text'	=> ' ',
						'prev_text'					=> 'prev',
						'next_text'					=> 'next',
					)); ?>
				</li>
			</ul>
        </nav>
		
      </div>
    </div>
  </div>
</div>
<!--Inner Content End--> 

<?php get_footer(); ?>