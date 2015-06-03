<?php get_header(); ?>

    <div class="container">

	    <div class="row">

	    	<div class="col-md-12">

				<div class="page-header">	
				
				<?php /* If this is a category archive */ if (is_category()) { ?>
					<h1 class="pagetitle">Archive for the <?php single_cat_title(); ?> Category</h1>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h1 class="pagetitle">Posts Tagged <?php single_tag_title(); ?></h1>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h1>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h1>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1 class="pagetitle">Archive for <?php the_time('Y'); ?></h1>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1 class="pagetitle">Author Archive</h1>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1 class="pagetitle">Blog Archives</h1>
				<?php } ?>
				

				</div>
					    		
			
				<?php while ( have_posts() ) : the_post(); ?>
				<article>

				    <div class="page-header">	
				    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				    	hello
				    </div>				

					<?php the_excerpt(); ?>

				</article>
				<?php endwhile; ?>

	    	</div>

	    </div>

    </div>

<?php get_footer(); ?>