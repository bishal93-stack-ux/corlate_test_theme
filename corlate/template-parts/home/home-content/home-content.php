<?php
?>
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 wow fadeInDown">
                <div class="tab-wrap">
                    <div class="media">
                        <div class="parrent pull-left">
                            <ul class="nav nav-tabs nav-stacked">
                                <li class=""><a href="#tab1" data-toggle="tab" class="analistic-01">Responsive Web
                                        Design</a></li>
                                <li class="active"><a href="#tab2" data-toggle="tab" class="analistic-02">Premium Plugin
                                        Included</a></li>
                                <li class=""><a href="#tab3" data-toggle="tab" class="tehnical">Predefine Layout</a>
                                </li>
                                <li class=""><a href="#tab4" data-toggle="tab" class="tehnical">Our Philosopy</a></li>
                                <li class=""><a href="#tab5" data-toggle="tab" class="tehnical">What We Do?</a></li>
                            </ul>
                        </div>
                        <div class="parrent media-body">
							<?php
							$args = array(
								'post_type'   => 'parrent',
								'post_status' => 'publish',
								'orderby'     => 'date',
								'order'       => 'ASC'
							);
							// the query
							$the_query = new WP_Query( $args );
							$counter1  = 1;
							if ( $the_query->have_posts() ) :
								?>
                                <div class="tab-content">
									<?php while ( $the_query->have_posts() ) : $the_query->the_post();
										if ( $counter1 == 1 ) {
											$classname = '';
										} elseif ( $counter1 == 2 ) {
											$classname = 'active in';
										} else {
											$classname = 'active in';
										}
										?>
                                        <div class="tab-pane <?php echo $classname; ?>"
                                             id="tab<?php echo $counter1; ?>">
                                            <div class="media">
                                                <div class="pull-left">
													<?php the_post_thumbnail(); ?>
                                                </div>
                                                <div class="media-body">
                                                    <h2><?php the_title(); ?></h2>
                                                    <p><?php the_content(); ?></p>
                                                </div>
                                            </div>
                                        </div>
										<?php $counter1 ++; endwhile; ?>
                                </div> <!--/.tab-content-->
							<?php endif; ?>
                        </div> <!--/.media-body-->
                    </div> <!--/.media-->
                </div><!--/.tab-wrap-->
            </div><!--/.col-sm-6-->
            <div class="col-xs-12 col-sm-4 wow fadeInDown">
				<?php
				$args = array(
					'post_type'   => 'testimonial',
					'post_status' => 'publish',
					'orderby'     => 'date',
					'order'       => 'ASC'
				);
				// the query
				$the_query = new WP_Query( $args );
				$counter1  = 0;
				if ( $the_query->have_posts() ) :
					?>
                    <div class="testimonial">
                        <h2>Testimonials</h2>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="media testimonial-inner">
                                <div class="pull-left">
									<?php the_post_thumbnail( array( 'class' => ' img-circle' ) ); ?>
                                </div>
                                <div class="media-body">
                                    <p><?php the_content(); ?></p>
                                    <span><strong><?php the_title(); ?></span>
                                </div>
                            </div>
						<?php endwhile; ?>
                    </div>
				<?php endif; ?>
            </div>
        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#content-->
