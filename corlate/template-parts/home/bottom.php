<?php
?>
<section id="bottom">
    <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="row">
			<?php
			$count = 1;
			while ( $count <= 4 ) {
			    if ($count == 1 ){
			        $index_value = 'footer-1';
                }
			    elseif ($count == 2) {
				    $index_value = 'footer-2';
                }
                elseif ($count == 3) {
				    $index_value = 'footer-3';
			    }
			    else {
				    $index_value = 'footer-4';
                }
				if ( is_active_sidebar( $index_value ) ) {
					?>
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
							<?php dynamic_sidebar( $index_value ); ?>
                        </div>
                    </div><!--/.col-md-3-->
					<?php
				}
				$count++;
			} ?>
        </div>

    </div>
</section><!--/#bottom-->

