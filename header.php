<?php global $bestredux;  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<!--header start-->
<div class="header-wrap">
	<!--header tor area start-->
	<div class="gmail_phone" style="background:#222;padding:10px;">
		<div class="email">
			<i class="fa fa-envelope"></i>
			<span><?php echo $bestredux['email-text']; ?></span>
		</div>
		<div class="phone">
			<i class="fa fa-phone"></i>
			<span><?php echo $bestredux['mobile-one']; ?></span>
		</div>
		<div class="phone" style="border-right: none;">
			<i class="fa fa-phone"></i>
			<span><?php echo $bestredux['mobile-two']; ?></span>
		</div>
		<div class="social-media">
			<nav>
				<ul>
				<?php if($bestredux['ssss-url']['facebook']):  ?>
					<li><a href="<?php echo $bestredux['ssss-url']['facebook']; ?>" target="_blank">
						<i class="fa fa-facebook"></i>
					</a></li>
				<?php endif; ?>
					
				<?php if($bestredux['ssss-url']['youtube']): ?>
					<li><a href="<?php echo $bestredux['ssss-url']['youtube']; ?>">
						<i class="fa fa-youtube"></i>
					</a></li>
				<?php endif; ?>
				
				
				<?php if($bestredux['ssss-url']['twitter']): ?>
					<li><a href="<?php echo $bestredux['ssss-url']['twitter']; ?>">
						<i class="fa fa-twitter"></i>
					</a></li>
				<?php endif; ?>
					
				<?php if($bestredux['ssss-url']['google-plus']):  ?>
					<li><a href="<?php echo $bestredux['ssss-url']['google-plus']; ?>">
						<i class="fa fa-google-plus"></i>
					</a></li>
				<?php endif; ?>
				
				<?php if($bestredux['ssss-url']['linked-in']): ?>
					<li><a href="<?php echo $bestredux['ssss-url']['linked-in']; ?>">
						<i class="fa fa-linkedin"></i>
					</a></li>
				<?php endif; ?>
					
				<?php if($bestredux['ssss-url']['instagram']): ?>
					<li><a href="<?php echo $bestredux['ssss-url']['instagram']; ?>">
						<i class="fa fa-instagram"></i>
					</a></li>
				<?php endif; ?>
				</ul>
			</nav>
		</div>
	</div>
	<!--header tor area end-->
  <div class="container-fluid">
    <div class="navigationwrape">
      <div class="navbar navbar-default" role="navigation">
        <div class="row">
          <div class="col-md-2 col-sm-12">
            <div class="logo">
				<a href="<?php echo home_url(); ?>">
				
				
				
					
					
					<?php if($bestredux['logo-up']['url']): ?>
					<img alt="" src="<?php echo $bestredux['logo-up']['url'];  ?>">
 
			
					<?php else: ?>
					<h2><?php echo $bestredux['logo-text']; ?></h2>
					<?php endif; ?>
					
					
				</a>
			</div>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
          </div>
          <div class="col-md-1 col-sm-2 pull-right">
            <!-- Single button -->
			<form action="<?php echo home_url(); ?>" method="get">
				<div class="search-bar">
				  <button type="button" class="search" data-toggle="dropdown"> <i class="fa fa-search" aria-hidden="true"></i> </button>
				  <div class="dropdown-menu">
					<input type="text" id="s" name="s" class="form-control" placeholder="Search">
				  </div>
				</div>
			</form>
          </div>
          <div class="col-md-9 col-sm-10">
            <div class="navbar-collapse collapse">
			<?php 
				wp_nav_menu(array(
					'theme_location'	=> 'top-menu',
					'menu_class'		=> 'nav navbar-nav',
					'menu_id'			=> 'amader-id',
					'container'			=> '',
				));
			?>
			
				
             <!-- <ul class="nav navbar-nav">
                <li class="dropdown">
					<a href="index.html"> Home </a>
                </li>
				
				<li class="s">
				<a href="service_all.html">
					Our Service
				</a> 
				<i class="fa fa-caret-down" aria-hidden="true"></i>
				<ul class="dropdown-menu">
					<li>
						<a href="">Residence & Home Interior Design</a>
					</li>
					<li>
						<a href="blog-grid.html">Apartment Interior Design and Decoration</a>
					</li>
					<li>
						<a href="blog-grid.html">Living Room, Master Bedroom</a>
					</li>
					<li>
						<a href="blog-grid.html">Child Bedroom Design</a>
					</li>
					<li>
						<a href="blog-grid.html">Exclusive bathroom Interior Design</a>
					</li>
					<li>
						<a href="blog-grid.html">Kitchen Cabinet Design</a>
					</li>
					<li>
						<a href="blog-grid.html">Restaurant Interior Design</a>
					</li>
					<li>
						<a href="blog-grid.html">Showroom Interior Design</a>
					</li>
					<li>
						<a href="blog-grid.html">Indoor and Outdoot Landscape</a>
					</li>
				</ul>
                </li>
				
                <li class="dropdown">
					<a href="project_all.html"> Projects </span></a>
                </li>
				
                <li class="dropdown"> <a href="blog-list.html"> Blog</span></a>
                </li>
				
				<li class="dropdown">
					<a href="gallery.html">Gallery</span></a>
                </li>
				
				<li class="dropdown">
					<a href="students.html">Students</span></a>
                </li>
				
				<li> <a href="about-us.html"> About Us </a></li>
				
                <li> <a href="contact-us.html"> Contact us </a></li>
              </ul>-->
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<!--header end--> 