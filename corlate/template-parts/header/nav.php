<?php
/**
 * Header Navigation template.
 *
 * @package corlate
 */
?>
<nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
	            <?php  $custom_logo_id = get_theme_mod( 'custom_logo' );
	            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	            ?>
                <a class="navbar-brand" href="<?php echo home_url();?>"><img
                            src="<?php echo $image[0];?>" alt="logo"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'nav-pri',
					'depth'          => 2, // 1 = no dropdowns, 2 = with dropdowns.
					'container'      => 'false',
					'menu_id'        => '',
					'menu_class'     => 'nav navbar-nav',
					'walker'         => new Bootstrap_NavWalker(),
					'fallback_cb'    => 'Bootstrap_NavWalker::fallback'
				) );
				?>
                <!--ul class="nav navbar-nav">
					<li class="active"><a href="index.html">Home</a></li>
					<li><a href="about-us.html">About Us</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="blog-item.html">Blog Single</a></li>
							<li><a href="pricing.html">Pricing</a></li>
							<li><a href="404.html">404</a></li>
							<li><a href="shortcodes.html">Shortcodes</a></li>
						</ul>
					</li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact-us.html">Contact</a></li>
				</ul-->
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->