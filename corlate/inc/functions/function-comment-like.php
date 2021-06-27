<?php

function swap_comment_order( $comments ) {
	return array_reverse( $comments );
}

add_filter( 'comments_array', 'swap_comment_order' );


