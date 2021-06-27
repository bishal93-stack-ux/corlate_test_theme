<?php
?>
<section id="services" class="service-item">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Our Service</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
		<?php
		$args = array(
			'post_type'   => 'our_services',
			'post_status' => 'publish',
			'orderby'     => 'date',
			'order'       => 'ASC'
		);
		// the query
		$the_query = new WP_Query( $args );
		$counter1  = 0;
		if ( $the_query->have_posts() ) :
			?>
            <div class="row">
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="media services-wrap wow fadeInDown">
                            <div class="pull-left">
								<?php the_post_thumbnail(); ?>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><?php the_title(); ?></h3>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>
            </div><!--/.row-->
		<?php endif; ?>
    </div><!--/.container-->
</section><!--/#services-->
