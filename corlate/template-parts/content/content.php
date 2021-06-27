<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage corlate
 */
?>
<section id="blog" class="container">
    <div class="center">
        <h2>Blogs</h2>
        <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
    </div>
    <div class="blog">
        <div class="row">
			<?php
			$ourCurrentPage = get_query_var( 'paged' );
			$aboutPosts     = new WP_Query( array(
				'post_type'      => 'post',
				'post_status'    => 'publish',
				'posts_per_page' => 2,
				'paged'          => $ourCurrentPage
			) );
			if ( $aboutPosts->have_posts() ) : ?>
                <div class="col-md-8">
					<?php while ( $aboutPosts->have_posts() ) :
						$aboutPosts->the_post();
						$post_date      = get_the_date( 'j M' );
						$post_id        = get_the_ID();
						$comments_count = wp_count_comments( $post_id );
						?>
                        <div class="blog-item">
                            <div class="row">
                                <div class="col-xs-12 col-sm-2 text-center">
                                    <div class="entry-meta">
                                        <span id="publish_date"><?php echo $post_date; ?></span>
                                        <span><i class="fa fa-user"></i> <a href="#"><?php the_author(); ?></a></span>
                                        <span><i class="fa fa-comment"></i> <a
                                                    href="blog-item.html#comments"><?php echo $comments_count->total_comments; ?> Comments</a></span>
                                        <span><i class="fa fa-heart"></i><a href="#">56 Likes</a></span>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-10 blog-content">
                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail(); ?></a>
                                    <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <h3><?php the_content(); ?></h3>
                                    <a class="btn btn-primary readmore"
                                       href="<?php echo esc_url( get_permalink() ); ?>">Read More <i
                                                class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div><!--/.blog-item-->
					<?php endwhile;
					echo paginate_links( array(
						'total' => $aboutPosts->max_num_pages
					) );
					?>
                    <!--ul class="pagination pagination-lg">
						<li><a href="#"><i class="fa fa-long-arrow-left"></i>Previous Page</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">Next Page<i class="fa fa-long-arrow-right"></i></a></li>
					</ul--><!--/.pagination-->
                </div><!--/.col-md-8-->
			<?php endif; ?>
            <aside class="col-md-4">
		        <?php get_sidebar();?>
            </aside>
        </div><!--/.row-->
    </div>
</section><!--/#blog-->

