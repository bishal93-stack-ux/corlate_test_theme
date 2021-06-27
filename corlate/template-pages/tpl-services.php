<?php
/* Template Name: Services */
get_header();
get_template_part( 'template-parts/home/feature' ); ?>
    <div class="clients-area center wow fadeInDown">
       <?php the_content();?>
    </div>
<?php
$args = array(
	'post_type'   => 'clients',
	'post_status' => 'publish',
	'orderby'     => 'date',
	'order'       => 'ASC'
);
// the query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
	?>
    <div class="row">
		<?php while ( $the_query->have_posts() ) : $the_query->the_post();
			$client_post = get_post_meta( get_the_ID(), 'client_post', true );
			?>
            <div class="col-md-4 wow fadeInDown">
                <div class="clients-comments text-center">
					<?php the_post_thumbnail( array( 'class' => ' img-circle' ) ); ?>
					<?php
					echo '<h3>';
					the_content();
					echo '</h3>
                <h4><span>-';
					the_title();
					echo '/</span>';
					echo $client_post; ?></h4>
                </div>
            </div>
		<?php endwhile; ?>
    </div>
<?php endif;
get_footer();
