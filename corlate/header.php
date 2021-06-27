<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package corlate
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'homepage' ); ?>>
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>
<header id="header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-4">
					<?php
					$meta = get_post_meta( get_the_ID(), 'top-number', true );
					?>
                    <div class="top-number"><p><i class="fa fa-phone-square"></i> <?php print_r( $meta ); ?></p></div>
                </div>
                <div class="col-sm-6 col-xs-8">
                    <div class="social">
                        <ul class="social-share">
							<?php $count = 0;
							$classname   = array(
								"facebook",
								"twitter",
								"linkedin",
								"dribbble",
								"skype"
							);
							while ( $count < 5 ) {
								?>
                                <li><a href="#"><i class="fa fa-<?php echo $classname[ $count ]; ?>"></i></a></li>
								<?php $count++; ?>
							<?php } ?>
                        </ul>
                        <div class="search">
                            <form role="form">
                                <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->
    </div><!--/.top-bar-->
	<?php get_template_part( 'template-parts/header/nav' );
	if ( is_front_page() ) {
		get_template_part( 'template-parts/banner/banner' );
	}
	?>
</header><!--/header-->

