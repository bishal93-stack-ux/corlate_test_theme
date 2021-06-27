<?php
/* Template Name: Pricing */
get_header();
?>
    <section class="pricing-page">
    <div class="container">
    <div class="center">
		<?php
		$pricing_page_head = get_post_meta( get_the_ID(), 'pricing-head', true );
		$pricing_page_lead = get_post_meta( get_the_ID(), 'pricing-lead', true );
		echo '<h2>' . $pricing_page_head . '</h2>';
		echo '<p class="lead">' . $pricing_page_lead . '</p>'; ?>
    </div>
    <div class="pricing-area text-center">
<?php
$args = array(
	'post_type'   => 'pricing_plan',
	'post_status' => 'publish',
	'orderby'     => 'date',
	'order'       => 'ASC'
);
// the query
$the_query = new WP_Query( $args );
$counter1  = 1;
if ( $the_query->have_posts() ) :
	?>
    <div class="row">
	<?php while ( $the_query->have_posts() ) : $the_query->the_post();
	if ($counter1 == 1) {
	    $classname = 'one';
    }
	elseif ($counter1 == 2) {
		$classname = 'two';
    }
	else {
		$classname = 'three';
    }
	?>
    <div class="col-sm-4 plan price-<?php  echo $classname; ?> wow fadeInDown">
        <ul>
            <li class="heading-<?php  echo $classname; ?>">
               <?php  the_title(); ?>
            </li>
          <?php the_content();?>
            <li class="plan-action">
                <a href="" class="btn btn-primary">Sign up</a>
            </li>
        </ul>
    </div>
    <?php  $counter1++; endwhile;?>

    </div>
<?php endif;?>
    </div><!--/pricing-area-->
    </div><!--/container-->
    </section><!--/pricing-page-->
	<?php
	get_template_part( 'template-parts/home/bottom' );
	get_footer();
