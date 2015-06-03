<?php get_header(); ?>

<!-- 			<div class="container">
				<div class="row">
 -->
						<?php 
						while ( have_posts() ) : the_post(); ?>
				
						<?php get_template_part( 'content', 'products' ); ?>

						<?php endwhile; ?>			

				<!-- .row -->
				<!-- </div>  -->


			<!-- </div> -->

<?php get_footer(); ?>