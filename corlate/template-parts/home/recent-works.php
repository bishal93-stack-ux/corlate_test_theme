<?php
?>
<section id="recent-works">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Recent Works</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
		<?php
		$args = array(
			'post_type'   => 'recent_works',
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
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
							<?php the_post_thumbnail(); ?>
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?php the_title(); ?></a></h3>
                                    <p><?php the_content(); ?></p>
                                    <a class="preview" href="images/portfolio/full/item1.png" rel="prettyPhoto"><i
                                                class="fa fa-eye"></i> View</a>
                                </div>
                            </div>
                        </div>
                    </div>
				<?php endwhile; ?>
            </div><!--/.row-->
		<?php endif; ?>
    </div><!--/.container-->
</section><!--/#recent-works-->
