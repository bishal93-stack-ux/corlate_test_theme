<?php
/*
** Function  for Widgets
*/
function corlate_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 1', 'corlate' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets here.', 'corlate' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 2', 'corlate' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add widgets here.', 'corlate' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>'
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 3', 'corlate' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add widgets here.', 'corlate' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Widget 4', 'corlate' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add widgets here.', 'corlate' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);

}
add_action( 'widgets_init', 'corlate_widgets_init' );