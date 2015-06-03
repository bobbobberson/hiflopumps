<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package hiflopumps
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<h1 class="product-title"><?php the_title(); ?></h1>
		<div class="col-md-12 clearfix">
			
			<hr>
		</div>
			<?php 
				if ( is_page('our-people') ) {

					include 'includes/content-our-people.php';

				} elseif ( is_page('privacy-policy') ) {

					include 'includes/content-privacy-policy.php';

				} elseif ( is_page('request-service') ) {

					echo '<div class="col-md-8 col-md-offset-2">';

				} elseif ( ( is_page('system-design') ) || (is_page('reports'))  ) {

					echo '<div class="col-md-12">';
				}
			?>

			<?php the_content(); ?>

			<?php 
				if (( is_page('request-service')) || (is_page('system-design')) || (is_page('reports')) ){
					echo '</div>';
				}
			 ?>

	

	</div><!-- .entry-content -->

		<?php 
			if ( has_post_thumbnail() ) {
				echo '<div class="col-md-6">';
				echo '<div class="single-post-thumbnail img-thumbnail img-responsive clear">';
				echo the_post_thumbnail( 'large-thumb' ); 
				echo '</div>', '</div>';
			}
		?>

		
		
	<script>
	jQuery(document).ready(function($){
		$('img').addClass('img-responsive');
	});
	</script>

</article><!-- #post-## -->
