<?php
get_header();
?>
<?php
get_template_part( 'template-parts/home/feature' );
get_template_part( 'template-parts/home/recent','works' );
get_template_part( 'template-parts/home/home','services' );
get_template_part( 'template-parts/home/middle');
get_template_part( 'template-parts/home/home-content/home','content');
get_template_part( 'template-parts/home/partner');
get_template_part( 'template-parts/home/conacat-info');
get_template_part( 'template-parts/home/bottom');
?>
<?php get_footer(); ?>
