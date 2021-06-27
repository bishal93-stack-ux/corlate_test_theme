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
	<?php
	$post_date      = get_the_date( 'j M' );
	$post_id        = get_the_ID();
	$comments_count = wp_count_comments( $post_id );
	?>
    <div class="blog">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-item">
					<?php the_post_thumbnail(); ?>
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
                            <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_content(); ?></p>
                            <div class="post-tags">
								<?php
								$post_tags = get_the_tags();
								if ( $post_tags ) {
									foreach ( $post_tags as $tag ) {
										echo '<strong>Tag:</strong>';
										echo $tag->name . '/ ';
									}
								}
								?>
                            </div>
                        </div>
                    </div>
                </div><!--/.blog-item-->
                <div id="contact-page clearfix">
                    <div class="status alert alert-success" style="display: none"></div>
                    <!--div class="message_heading">
                        <h4>Leave a Replay</h4>
                        <p>Make sure you enter the(*)required information where indicate.HTML code is not allowed</p>
                    </div-->
                    <div class="comments-wrapper section-inner">
	                    <?php comments_template(); ?>
                    </div><!-- .comments-wrapper -->
                </div><!--/#contact-page-->
            </div><!--/.col-md-8-->
            <aside class="col-md-4">
	            <?php get_sidebar();?>
            </aside>
        </div><!--/.row-->

    </div><!--/.blog-->

</section><!--/#blog-->
