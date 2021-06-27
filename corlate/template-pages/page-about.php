<?php
/* Template Name: Test */
get_header(); ?>

    <!-- site-content -->
    <div class="site-content clearfix">

        <h1>Blog Posts About Us</h1>
        <?php

        $ourCurrentPage = get_query_var('paged');

        $aboutPosts = new WP_Query(array(
	        'post_type'   => 'post',
            'posts_per_page' => 1,
            'paged' => $ourCurrentPage
        ));

        if ($aboutPosts->have_posts()) :
            while ($aboutPosts->have_posts()) :
                $aboutPosts->the_post();
                ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li> <?php
            endwhile;

            echo paginate_links(array(
                'total' => $aboutPosts->max_num_pages
            ));

        endif;

        ?>


    </div><!-- /site-content -->

<?php get_footer();

?>