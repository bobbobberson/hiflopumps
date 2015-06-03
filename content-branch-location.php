<?php
/**
 * The template used for displaying page content in page-branch-location.php
 *
 * @package hiflopumps
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <br> -->
	<div class="entry-content">
			
			<header class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header><!-- .entry-header -->
			<hr>

		<div class="col-md-3">
			<?php the_content(); ?>
	
		</div>
	</div><!-- .entry-content -->

	<div class="col-md-9">
		<?php 
			if ( has_post_thumbnail() ) {
				echo '<div class="single-post-thumbnail img-thumbnail img-responsive clear">';
				echo the_post_thumbnail( 'large-thumb' ); 
				echo '</div>';
			}
		?>
	</div>
	<script>
	jQuery(document).ready(function($){
		$('img').addClass('img-responsive');
	});
	</script>

	<div class="col-md-12">
		<div class="map-wrapper">
			
			<?php 
			$location = get_field('google_map');
					// <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
			if( !empty($location) ) { ?>
					<div class="acf-map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
					</div>
			<?php } ?>

		</div>
	</div>

</article><!-- #post-## -->
