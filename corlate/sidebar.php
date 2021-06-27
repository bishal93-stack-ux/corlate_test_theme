<?php
/*
 * Template file for themes sidebar
 */
?>
<div class="widget search">
	<?php echo get_search_form(); ?>
</div><!--/.search-->

<div class="widget categories">
    <h3>Recent Comments</h3>
    <div class="row">
        <div class="col-sm-12">
			<?php
			$args     = array(
				'date_query' => array(
					'after'     => '1 weeks ago',
					'before'    => 'tomorrow',
					'inclusive' => true,
				),
			);
			$comments = get_comments( $args );
			foreach ( $comments as $comment ) { ?>
                // Output comments etc here
                <div class="single_comments">
                    <img src="images/blog/avatar3.png" alt=""/>
                    <p><?php echo $comment->comment_content; ?></p>
                    <div class="entry-meta small muted">
                        <span>By <a href="#"><?php echo $comment->comment_author; ?></a></span><span>On <a
                                    href="#">Creative</a></span>
                    </div>
                </div>
			<?php } ?>
        </div>
    </div>
</div><!--/.recent comments-->
<div class="widget categories">
    <h3>Categories</h3>
	<?php
	$categories = get_categories( array(
		'orderby' => 'name',
		'order'   => 'ASC'
	) );
	?>
    <div class="row">
        <div class="col-sm-6">
            <ul class="blog_category">
				<?php foreach ( $categories as $category ) { ?>
                    <li><a href="#"><?php echo $category->name; ?><span
                                    class="badge"><?php echo $category->term_id; ?></span></a></li>
				<?php } ?>
            </ul>
        </div>
    </div>
</div><!--/.categories-->

<div class="widget archieve">
    <h3>Archieve</h3>
    <div class="row">
        <div class="col-sm-12">
            <ul class="blog_archieve">
                <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span
                                class="pull-right">(97)</span></a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span
                                class="pull-right">(32)</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2013 <span
                                class="pull-right">(19)</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2013 <span
                                class="pull-right">(08)</a></li>
            </ul>
        </div>
    </div>
</div><!--/.archieve-->
<div class="widget tags">
    <h3>Tag Cloud</h3>
	<?php
	$tags = get_tags();
	if ( $tags ) { ?>
        <ul class="tag-cloud">
			<?php foreach ( $tags as $tag ) { ?>
                <li><a class="btn btn-xs btn-primary"
                       href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>"
                       title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a>
                </li>
			<?php } ?>
        </ul>
	<?php }
	?>
</div><!--/.tags-->
<div class="widget blog_gallery">
    <h3>Our Gallery</h3>
    <ul class="sidebar-gallery">
        <li><a href="#"><img src="images/blog/gallery1.png" alt=""/></a></li>
        <li><a href="#"><img src="images/blog/gallery2.png" alt=""/></a></li>
        <li><a href="#"><img src="images/blog/gallery3.png" alt=""/></a></li>
        <li><a href="#"><img src="images/blog/gallery4.png" alt=""/></a></li>
        <li><a href="#"><img src="images/blog/gallery5.png" alt=""/></a></li>
        <li><a href="#"><img src="images/blog/gallery6.png" alt=""/></a></li>
    </ul>
</div><!--/.blog_gallery-->
