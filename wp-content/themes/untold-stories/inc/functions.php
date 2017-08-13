<?php
if ( ! function_exists( 'untoldstories_get_social_networks') ) {
	function untoldstories_get_social_networks() {
		return array(
			array(
				'name'  => 'facebook',
				'label' => esc_html__( 'Facebook', 'untold-stories' ),
				'icon'  => 'fa-facebook'
			),
			array(
				'name'  => 'twitter',
				'label' => esc_html__( 'Twitter', 'untold-stories' ),
				'icon'  => 'fa-twitter'
			),
			array(
				'name'  => 'pinterest',
				'label' => esc_html__( 'Pinterest', 'untold-stories' ),
				'icon'  => 'fa-pinterest'
			),
			array(
				'name'  => 'instagram',
				'label' => esc_html__( 'Instagram', 'untold-stories' ),
				'icon'  => 'fa-instagram'
			),
			array(
				'name'  => 'gplus',
				'label' => esc_html__( 'Google Plus', 'untold-stories' ),
				'icon'  => 'fa-google-plus'
			),
			array(
				'name'  => 'linkedin',
				'label' => esc_html__( 'LinkedIn', 'untold-stories' ),
				'icon'  => 'fa-linkedin'
			),
			array(
				'name'  => 'tumblr',
				'label' => esc_html__( 'Tumblr', 'untold-stories' ),
				'icon'  => 'fa-tumblr'
			),
			array(
				'name'  => 'flickr',
				'label' => esc_html__( 'Flickr', 'untold-stories' ),
				'icon'  => 'fa-flickr'
			),
			array(
				'name'  => 'bloglovin',
				'label' => esc_html__( 'Bloglovin', 'untold-stories' ),
				'icon'  => 'fa-heart'
			),
			array(
				'name'  => 'youtube',
				'label' => esc_html__( 'YouTube', 'untold-stories' ),
				'icon'  => 'fa-youtube'
			),
			array(
				'name'  => 'vimeo',
				'label' => esc_html__( 'Vimeo', 'untold-stories' ),
				'icon'  => 'fa-vimeo'
			),
			array(
				'name'  => 'dribbble',
				'label' => esc_html__( 'Dribbble', 'untold-stories' ),
				'icon'  => 'fa-dribbble'
			),
			array(
				'name'  => 'wordpress',
				'label' => esc_html__( 'WordPress', 'untold-stories' ),
				'icon'  => 'fa-wordpress'
			),
			array(
				'name'  => '500px',
				'label' => esc_html__( '500px', 'untold-stories' ),
				'icon'  => 'fa-500px'
			),
			array(
				'name'  => 'soundcloud',
				'label' => esc_html__( 'Soundcloud', 'untold-stories' ),
				'icon'  => 'fa-soundcloud'
			),
			array(
				'name'  => 'spotify',
				'label' => esc_html__( 'Spotify', 'untold-stories' ),
				'icon'  => 'fa-spotify'
			),
			array(
				'name'  => 'vine',
				'label' => esc_html__( 'Vine', 'untold-stories' ),
				'icon'  => 'fa-vine'
			),
		);
	}
}

if ( ! function_exists( 'untoldstories_get_layout_classes' ) ) {
	function untoldstories_get_layout_classes( $setting ) {
		$layout      = get_theme_mod( $setting, 'classic_side' );
		$content_col = '';
		$sidebar_col = '';
		$main_class  = 'entries-classic';
		$post_class  = '';
		$post_col    = '';
		$masonry     = false;

		switch ( $layout ) {
			case 'classic_side':
				$content_col = 'col-md-8';
				$sidebar_col = 'col-md-4';
				break;
			case 'classic_full' :
				$content_col = 'col-md-8 col-md-offset-2';
				break;
			case 'small_side' :
				$content_col = 'col-md-8';
				$sidebar_col = 'col-md-4';
				$main_class  = 'entries-list';
				$post_class  = 'entry-list';
				break;
			case 'small_full' :
				$content_col = 'col-md-8 col-md-offset-2';
				$main_class  = 'entries-list';
				$post_class  = 'entry-list';
				break;
			case '2cols_side' :
				$content_col = 'col-md-8';
				$sidebar_col = 'col-md-4';
				$main_class  = 'entries-grid';
				$post_class  = 'entry-grid';
				$post_col    = 'col-sm-6';
				break;
			case '2cols_full' :
				$content_col = 'col-md-12';
				$main_class  = 'entries-grid';
				$post_class  = 'entry-grid';
				$post_col    = 'col-sm-6';
				break;
			case '2cols_narrow' :
				$content_col = 'col-md-8 col-md-offset-2';
				$main_class  = 'entries-grid';
				$post_class  = 'entry-grid';
				$post_col    = 'col-sm-6';
				break;
			case '2cols_masonry' :
				$content_col = 'col-md-8';
				$sidebar_col = 'col-md-4';
				$main_class  = 'entries-grid';
				$post_class  = 'entry-grid';
				$post_col    = 'col-sm-6';
				$masonry     = true;
				break;
			case '3cols_full' :
				$content_col = 'col-md-12';
				$main_class  = 'entries-grid';
				$post_class  = 'entry-grid';
				$post_col    = 'col-md-4 col-sm-6';
				break;
			case '3cols_masonry' :
				$content_col = 'col-md-12';
				$main_class  = 'entries-grid';
				$post_class  = 'entry-grid';
				$post_col    = 'col-md-4 col-sm-6';
				$masonry     = true;
				break;
		}

		return array(
			'layout'      => $layout,
			'content_col' => $content_col,
			'sidebar_col' => $sidebar_col,
			'main_class'  => $main_class,
			'post_class'  => $post_class,
			'post_col'    => $post_col,
			'masonry'     => $masonry
		);
	}
}



if ( ! function_exists( 'untoldstories_pagination' ) ):
	/**
	 * Echoes pagination links if applicable. Output depends on pagination method selected from the customizer.
	 *
	 * @param array $args An array of arguments to change default behavior.
	 * @param object|bool $query A WP_Query object to paginate. Defaults to boolean false and uses the global $wp_query
	 *
	 * @return void
	 */
	function untoldstories_pagination( $args = array(), $query = false ) {
		$args = wp_parse_args( $args, apply_filters( 'untoldstories_pagination_default_args', array(
			'container_id'        => 'paging',
			'container_class'     => 'group',
			'prev_text'           => esc_html__( 'Previous page', 'untold-stories' ),
			'next_text'           => esc_html__( 'Next page', 'untold-stories' ),
			'paginate_links_args' => array()
		) ) );

		if ( 'object' != gettype( $query ) || 'WP_Query' != get_class( $query ) ) {
			global $wp_query;
			$query = $wp_query;
		}

		// Set things up for paginate_links()
		$unreal_pagenum = 999999999;
		$permastruct    = get_option( 'permalink_structure' );

		$paginate_links_args = wp_parse_args( $args['paginate_links_args'], array(
			'base'    => str_replace( $unreal_pagenum, '%#%', esc_url( get_pagenum_link( $unreal_pagenum ) ) ),
			'format'  => empty( $permastruct ) ? '&page=%#%' : 'page/%#%/',
			'total'   => $query->max_num_pages,
			'current' => max( 1, get_query_var( 'paged' ), get_query_var( 'page' ) ),
		) );

		$method = get_theme_mod( 'pagination_method', 'numbers' );

		if ( $query->max_num_pages > 1 ) {
			?>
			<div
			<?php echo empty( $args['container_id'] ) ? '' : 'id="' . esc_attr( $args['container_id'] ) . '"'; ?>
			<?php echo empty( $args['container_class'] ) ? '' : 'class="' . esc_attr( $args['container_class'] ) . '"'; ?>
			><?php

			switch ( $method ) {
				case 'text':
					previous_posts_link( $args['prev_text'] );
					next_posts_link( $args['next_text'], $query->max_num_pages );
					break;
				case 'numbers':
				default:
					echo paginate_links( $paginate_links_args );
					break;
			}

			?></div><?php
		}

	}
endif;
