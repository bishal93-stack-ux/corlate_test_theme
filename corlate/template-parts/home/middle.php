<?php
?>
<section id="middle">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 wow fadeInDown">
				<?php
				$args = array(
					'post_type'   => 'our_skills',
					'post_status' => 'publish',
					'orderby'     => 'date',
					'order'       => 'ASC'
				);
				// the query
				$the_query = new WP_Query( $args );
				$counter1  = 1;
				if ( $the_query->have_posts() ) :
					?>
                    <div class="skill">
                        <h2>Our Skills</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
						<?php while ( $the_query->have_posts() ) : $the_query->the_post();
							$airavalue = get_post_meta( get_the_ID(), 'aira-value-now', true );
							$bar       = get_post_meta( get_the_ID(), 'bar-width', true );
							?>
                            <div class="progress-wrap">
                                <h3><?php the_title(); ?></h3>
                                <div class="progress">
                                    <div class="progress-bar  color<?php echo $counter1; ?>" role="progressbar"
                                         aria-valuenow="<?php echo $airavalue; ?>"
                                         aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $bar; ?>">
                                        <span class="bar-width"><?php echo $bar; ?></span>
                                    </div>
                                </div>
                            </div>
							<?php
							$counter1++;
						endwhile; ?>
                    </div>
				<?php endif; ?>
            </div><!--/.col-sm-6-->
            <div class="col-sm-6 wow fadeInDown">
                <div class="accordion">
                    <h2>Why People like us?</h2>
					<?php
					$args = array(
						'post_type'   => 'like_stories',
						'post_status' => 'publish',
						'orderby'     => 'date',
						'order'       => 'ASC'
					);
					// the query
					$the_query = new WP_Query( $args );
					$counter1  = 0;
					if ( $the_query->have_posts() ) :
						?>
                        <div class="panel-group" id="accordion1">
							<?php
							while ( $the_query->have_posts() ) : $the_query->the_post();
								if ( $counter1 == 0 ) {
									$classname = 'active';
									$classname1 = 'collapse in';
									$hrefvalue = 'One1';
								} elseif ( $counter1 == 1 ) {
									$classname = '';
									$classname1 = 'collapse';
									$hrefvalue = 'Two1';
								} elseif ( $counter1 == 2 ) {
									$classname = '';
									$classname1 = 'collapse ';
									$hrefvalue = 'Three1';
								} else {
									$classname = '';
									$classname1 = 'collapse';
									$hrefvalue = 'Four1';
								}
								?>
                                <div class="panel panel-default">
                                    <div class="panel-heading <?php echo $classname; ?>">
                                        <h3 class="panel-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1"
                                               href="#collapse<?php echo $hrefvalue; ?>">
                                                Lorem ipsum dolor sit amet
                                                <i class="fa fa-angle-right pull-right"></i>
                                            </a>
                                        </h3>
                                    </div>
                                    <div id="collapse<?php echo $hrefvalue; ?>" class="panel-collapse <?php echo $classname1; ?>">
                                        <div class="panel-body">
                                            <div class="media accordion-inner">
                                                <div class="pull-left">
													<?php the_post_thumbnail(); ?>
                                                </div>
                                                <div class="media-body">
                                                    <h4><?php the_title(); ?></h4>
                                                    <p><?php the_content(); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<?php
								$counter1++;
							endwhile; ?>
                        </div><!--/#accordion1-->
					<?php endif; ?>
                </div>
            </div>

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#middle-->
