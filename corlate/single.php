<?php
get_header();
?>
    <div id="primary" class="content-area">
        <main id="site-content" role="main">
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content/content', 'single' );
				}
			}
			?>
        </main><!-- #site-content -->
    </div><!-- #primary -->
<?php get_footer(); ?>