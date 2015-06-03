<?php 

/*
	1. Link to CSS
	2. Link to JS
	3. Enable Menus
	4. Create Custom Menu
	5. Create Widget Areas
*/

function theme_js() {

	global $wp_scripts;
	
	wp_register_script( 'html5shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );
	
	$wp_scripts->add_data( 'html5shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond', 'conditional', 'lt IE 9' );

	// wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	// wp_enqueue_style( $handle,       $src,                                                $deps,                  $ver,      $media );
	wp_enqueue_style( 'bootstrap_css',  get_template_directory_uri() . '/css/bootstrap.css', array(),                '20141003', 'all' );
	wp_enqueue_style( 'nav_css',        get_template_directory_uri() . '/css/nav.css',       array('bootstrap_css'), '20141003', 'all' );
	wp_enqueue_style( 'hiflopumps_css', get_stylesheet_uri(),                                array(),				 '20141003', 'all' );

	// Conditional load of carousel css for the static front page only.
	if (is_front_page()) {
		wp_enqueue_style( 'carousel_css',   get_template_directory_uri() . '/css/carousel.css',  array('bootstrap_css'), '20141003', 'all' );
	}

	//wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	//wp_enqueue_script( $handle,       $src, 														$deps, 									$ver, $in_footer );
	wp_enqueue_script( 'bootstrap_js',	get_template_directory_uri() . '/js/bootstrap.js', 			array('jquery'), 						'20141003', true );
	wp_enqueue_script( 'hiflopumps_js',	get_template_directory_uri() . '/js/hiflopumps.js',			array('jquery','bootstrap_js'), 		'20140901', true );
	wp_enqueue_script( 'sfish', 		get_template_directory_uri() . '/js/superfish.min.js', 		array('jquery','bootstrap_js'),			'20140901', true );
	wp_enqueue_script( 'sfish-opts', 	get_template_directory_uri() . '/js/superfish-settings.js',	array('jquery','bootstrap_js', 'sfish'),'20140901', true );

	if ( is_page( 'our-people' ) ) {
		wp_enqueue_script( 'hiflopumps-masonry', get_template_directory_uri() . '/js/masonry-settings.js', array('masonry'), '20140411', true );
	}

	// Conditional load of GoogleMapsAPI and ACF javascript on the Auckland and Rotorua pages only.
	if ( is_page( 'auckland' ) || is_page( 'rotorua' ) ) {
		wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(), '20141003', true );
		wp_enqueue_script( 'render-map', get_template_directory_uri() . '/js/render-map.js', array('jquery', 'google-maps'), '20140728', true );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_js' );


// Enable custom menus
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
	add_image_size('large-thumb', 1060, 650, true);
	add_image_size('medium-thumb', 800, 490);
	add_image_size('small-thumb', 400, 1000);
	// Featured image size for small image in archives
	add_image_size('index-thumb', 780, 250, true);


require_once('wp_bootstrap_navwalker.php');

function hiflopumps_search_menu() {
    if ( has_nav_menu( 'search' ) ) {
		wp_nav_menu(
			array(
				'theme_location'  => 'search',
				'container'       => 'div',
				'container_id'    => 'menu-search',
				'container_class' => 'collapse navbar-collapse',
				'menu_id'		  => 'bs-example-navbar-collapse-2',
				'menu_class'      => 'nav navbar-nav',
				'depth'           => 1,
				'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
			)
		);
    }
}


// Create a custom menus
function register_theme_menus() {
	
	register_nav_menus( array(
	    'primary' => __( 'Primary Menu', 'hiflopumps' ),
	    'search'  => __( 'Search Menu',  'hiflopumps' ),
	    'footer'  => __( 'Footer Menu',  'hiflopumps' ),
	    )
	);
}
add_action( 'init', 'register_theme_menus' );

//add_filter('show_admin_bar', '__return_false');

// Function for creating Widegets
function create_widget($name, $id, $description) {

	register_sidebar(array(
		'name' => __( $name ),	 
		'id' => $id, 
		'description' => __( $description ),
		'before_widget' => '<div class="col-sm-12 col-md-4"><div class="widget">',
		'after_widget' => '</div></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>'
	));

}

// Create widgets in the footer
// create_widget("Page Sidebar", "page", "Displays in the side navigation of pages");
// create_widget("Blog Sidebar", "blog", "Displays in the side navigation of blog posts and main blog page");

create_widget("Footer Area", "footer", "Displays in bottom footer");

// create_widget("Front Page Left", "front-left", "Displays on the left hand side of the homepage");
// create_widget("Front Page Center", "front-center", "Displays in the center of the homepage");
// create_widget("Front Page Right", "front-right", "Displays on the right hand side of the homepage");





// Paginated Navigation for category and taxonomy index pages.
// Borrowed from twentyfourteen-> simone-> 
function hiflopumps_paging_nav() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}

	$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
	$pagenum_link = html_entity_decode( get_pagenum_link() );
	$query_args   = array();
	$url_parts    = explode( '?', $pagenum_link );

	if ( isset( $url_parts[1] ) ) {
		wp_parse_str( $url_parts[1], $query_args );
	}

	$pagenum_link = remove_query_arg( array_keys( $query_args ), $pagenum_link );
	$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

	$format  = $GLOBALS['wp_rewrite']->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
	$format .= $GLOBALS['wp_rewrite']->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

	// Set up paginated links.
	$links = paginate_links( array(
		'base'     => $pagenum_link,
		'format'   => $format,
		'total'    => $GLOBALS['wp_query']->max_num_pages,
		'current'  => $paged,
		'mid_size' => 2,
		'prev_next' => true,
		'add_args' => array_map( 'urlencode', $query_args ),
		'prev_text' => __( '&larr; Previous', 'hiflopumps' ),
		'next_text' => __( 'Next &rarr;', 'hiflopumps' ),
        'type'      => 'list',
	) );

	if ( $links ) :
	?>
	<div class="col-xs-12">
		<!-- <h4 class="screen-reader-text text-center"> -->
			<?php 
			// _e( 'More...', 'hiflopumps' ); 
			?>
		<!-- </h4> -->
		<nav class="navigation paging-navigation text-center" role="navigation">
				<?php echo $links; ?>
		</nav><!-- .navigation -->
	</div>
	<?php
	endif;
}