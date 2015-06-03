<?php
/**
 *  Taxonomy index template
 */

get_header(); ?>
    <div class="container" role="main">
	    <div class="row">
	    	
		
			<?php if ( have_posts() ) : ?>

	    	<div class="col-md-12">
				<header class="page-header">
					<h1 class="page-title">
						<?php 
						single_cat_title();
						$current_term = get_queried_object();
						$taxonomy = get_taxonomy($current_term->taxonomy);

						if ($taxonomy->label == 'manufacturers') {
							echo 'Manufacturer' . ': ' . $current_term->name;
						}

						if ($taxonomy->label == 'pumptags') {
							echo 'Pump Applications' . ': ' . $current_term->name;
						}

						?>
					</h1>
					<?php
						// Show an optional term description.
						$term_description = term_description();
						if ( ! empty( $term_description ) ) :
							printf( '<div class="taxonomy-description">%s</div>', $term_description );
						endif;
					?>
				</header><!-- .page-header -->
			</div> <!-- col-md-12 -->
		</div> <!-- .row -->

		<div class="row">
                

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content' );
				?>

			<?php endwhile; ?>

			<?php 
				hiflopumps_paging_nav();
			?>


		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

    	</div>
		
	</div>



<?php get_footer(); ?>
