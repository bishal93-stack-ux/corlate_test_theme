<?php
get_header();
?>
    <div class="container">
        <div class="search-wrap">
			<?php if ( have_posts() ) : ?>
                <header class="page-header">
                    <h2 class="page-title">
						<?php
						printf( esc_html__( 'Search Results for: "%s"', 'corlate' ), '<span id="keyword">' . get_search_query() . '</span>' );
						?>
                    </h2>
                </header>
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>
        </div>
    </div>
<?php

get_footer();

