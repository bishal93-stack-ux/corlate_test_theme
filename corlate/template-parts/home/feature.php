<?php
/*
 * Feature Section
 */
?>
<section id="feature" >
	<div class="container">
		<div class="center wow fadeInDown">
			<h2>Features</h2>
			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
		</div>
		<div class="row">
			<?php
			$args = array(
				'post_type'   => 'home_features',
				'post_status' => 'publish',
				'orderby'     => 'date',
				'order'       => 'ASC'
			);
			// the query
			$the_query = new WP_Query( $args );
			$counter1  = 0;
			if ( $the_query->have_posts() ) :
			?>
			<div class="features">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
	                $feature_icon  = get_post_meta( get_the_ID(), 'feature_icon', true );
                ?>
				<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div class="feature-wrap">
						<i class="fa fa-<?php  echo $feature_icon;  ?>"></i>
						<h2><?php the_title();?></h2>
						<h3><?php the_content();?></h3>
					</div>
				</div>
				<?php endwhile;?>
			</div><!--/.services-->
            <?php  endif;?>
		</div><!--/.row-->
	</div><!--/.container-->
</section><!--/#feature-->
