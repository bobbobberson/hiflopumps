<?php get_header(); ?>

    <div class="container" role="main">

	    <div class="row">

	    	<div class="col-md-9">
			
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
				    <div class="page-header">	
				    	<h1><?php echo 'Welcome to the index'; ?></h1>
				    </div>

					<?php the_content(); ?>

				<?php endwhile; endif; ?>

	    	</div>


	    </div>

    </div>

<?php get_footer(); ?>