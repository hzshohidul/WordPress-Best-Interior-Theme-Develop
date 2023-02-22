<?php global $bestredux;  ?>
<!--Footer Start-->
<div class="footer-wrap">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="footer-logo">
		
			<a href="<?php echo home_url(); ?>">
				
				<?php if($bestredux['f-logo-up']['url']): ?>
				<img alt="" src="<?php echo $bestredux['f-logo-up']['url'];  ?>">
 
			
				<?php else: ?>
				<h2><?php echo $bestredux['logo-text']; ?></h2>
				<?php endif; ?>
					
					
			</a>
		<?php dynamic_sidebar('footerone'); ?>
		</div>
		
		
        <div class="social">
		<?php if($bestredux['ssss-url']['facebook']):  ?>
			<a href="<?php echo $bestredux['ssss-url']['facebook']; ?>" target="_blank">
			<i class="fa fa-facebook-square" aria-hidden="true"></i></a>
		<?php endif; ?>
			
		<?php if($bestredux['ssss-url']['youtube']): ?>
			<a href="<?php echo $bestredux['ssss-url']['youtube']; ?>" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
		<?php endif; ?>
			
		<?php if($bestredux['ssss-url']['twitter']): ?>
			<a href="<?php echo $bestredux['ssss-url']['twitter']; ?>" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
		<?php endif; ?>
			
		<?php if($bestredux['ssss-url']['google-plus']):  ?>
			<a href="<?php echo $bestredux['ssss-url']['google-plus']; ?>." target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
		<?php endif; ?>
			
		<?php if($bestredux['ssss-url']['linked-in']): ?>
			<a href="<?php echo $bestredux['ssss-url']['linked-in']; ?>" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
		<?php endif; ?>
			
		<?php if($bestredux['ssss-url']['instagram']): ?>
			<a href="<?php echo $bestredux['ssss-url']['instagram']; ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
		<?php endif; ?>
		</div>
		
      </div>
	  <div class="col-md-3 col-sm-4 col-xs-12">
			<?php dynamic_sidebar('footertwo'); ?>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12">
        <h3>Quick Links</h3>
		<?php 
			wp_nav_menu(array(
				'theme_location'	=> 'footer-menu',
				'menu_class'		=> 'footer-links',
				'container'			=> '',
			));
		?>
		
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12">
        <h3>Contact Info</h3>
        <div class="footer-address">
			<?php echo $bestredux['address']; ?>
		</div>
        <div class="call-us">
			<a href="javascript:avoid(0)" target="_blank" title="<?php echo $bestredux['phone-one']; ?>">
				<?php echo $bestredux['phone-one']; ?>
			</a>
		</div>
        <div class="call-us">
			<a href="javascript:avoid(0)" target="_blank" title="<?php echo $bestredux['phone-two']; ?>">
				<?php echo $bestredux['phone-two']; ?>
			</a>
		</div>
      </div>
    </div>
    <div class="footerWrp">
      <div class="copyright">
		<?php if($bestredux['copy-right-vis']== true):  ?>
			<p style="text-align: <?php echo $bestredux['copy-right-position']; ?>; color: <?php echo $bestredux['copy-right-col']; ?>;"><?php echo $bestredux['copy-right']; ?></p>
		<?php endif; ?>
	  </div>
	  
    </div>
  </div>
</div>
<!--Footer Start--> 
    <script src="//code.tidio.co/jatdg9aj7ihf215mirqhwyeolym0xhtw.js"></script>
	<?php wp_footer(); ?>
</body>
</html>