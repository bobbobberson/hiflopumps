<?php 
/*
	Template Name: Branch Location Page
*/
?>
<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-12">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'branch-location' ); ?>

				<?php endwhile; endif; ?>

	    	</div>	    	

	    </div>

    </div>

<?php get_footer(); ?>