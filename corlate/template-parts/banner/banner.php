<?php
/**
 * Banner Slider
 */
?>
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
		<?php
		$args = array(
			'post_type'   => 'cl_slider',
			'post_status' => 'publish',
			'orderby'     => 'date',
			'order'       => 'ASC'
		);
		// the query
		$the_query = new WP_Query( $args );
		$counter1  = 0;
		if ( $the_query->have_posts() ) :
			?>
            <div class="carousel-inner">
            <!-- pagination here -->
            <!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();
			// check if the post or page has a Featured Image assigned to it.
			$animated_item  = get_post_meta( get_the_ID(), 'banner_text1', true );
			$animated_item1 = get_post_meta( get_the_ID(), 'banner_text2', true );
			if ( $counter1 == 0 ) {
				$classname = 'active';
			} else {
				$classname = '';
			}
			if ( has_post_thumbnail() ) {
				$banner_slider = get_the_post_thumbnail();
			}
			?>
            <div class="item <?php echo $classname; ?>" style="background-image: url(../../../media/slider/bg1.jpg)">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <h1 class="animation animated-item-1"><?php echo $animated_item; ?></h1>
                                <h2 class="animation animated-item-2"><?php echo $animated_item1; ?></h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <?php echo $banner_slider; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
			<?php
			$counter1 ++;
		endwhile;
			?>
            <!-- end of the loop -->
            <!-- pagination here -->
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            </div>
		<?php endif; ?>
    </div>
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>
</section><!--/#main-slider-->

