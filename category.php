<?php
/**
 *  Category index template
 *  
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

						// $thisCat = get_category(get_query_var('cat'),false);

						// if ($thisCat) {
						// 	echo '<br><hr><pre>';
						// 	print_r($thisCat);
						// 	echo '</pre><hr><br>';
						// }

						
			?>
					</h1>
					<?php
						// Show an optional term description.
						$category_description = category_description();
						if ( ! empty( $category_description ) ) :
							echo category_description();
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
					// get_template_part( 'content', get_post_format() );
					get_template_part( 'content' );
				?>

			<?php endwhile; ?>

			<?php hiflopumps_paging_nav(); ?>



		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

    	</div>
		
	</div>



<?php get_footer(); ?>
