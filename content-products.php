<?php
/**
 * Outputs the single post content. Displayed by single.php.
 * 
 * @package hiflopumps
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12 clearfix">
					<h1 class="product-title"><?php the_title(); ?></h1>
				
					<div class="col-md-4"><p><?php echo get_the_term_list( $post->ID, 'manufacturer', 'Manufacturer: ', ', ' ); ?></p></div> 
					<div class="col-md-4"><p>Category: <?php the_category( ', ' );?></p></div>
					<div class="col-md-4 clearfix"><p><?php echo get_the_term_list( $post->ID, 'pumptags', 'Pump uses: ', ', ' ); ?></p></div> 
					<hr>
				</div>
			</div>
		</div>
	</header><!-- .entry-header -->



		<!-- <div class="col-xs-12"> </div> -->
	<div class="entry-content">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">

				<?php 
					$application_content = get_field('application_content');
					if (!empty( $application_content )) {  ?>

					<div class="application-group">
						<h2 class="sub-heading">Applications</h2>
						<?php echo $application_content; ?>
					</div>
					<hr>
				<?php  	} 
 

					$features_content = get_field('features_content');
					if (!empty( $features_content )) {  ?>

							<div class="features-group">
								<h2 class="sub-heading">Features</h2>
								<?php echo $features_content; ?>
							</div>
							<hr>
				<?php  	}


						$construction_content = get_field('construction_content');
					if (!empty( $construction_content )) {  ?>

							<div class="construction-group">
								<h2 class="sub-heading">Construction</h2>
								<?php echo $construction_content; ?>
							</div>
							<hr>

				<?php  	} ; ?>
				</div>

		<?php 
			if( has_post_thumbnail() ):
		?>
				<div class="col-xs-12 col-sm-6">
					<p class="featured-image">
						<?php echo the_post_thumbnail( 'thumbnail-size', array( 'class' => "img-responsive img-thumbnail" ) ); ?>
					</p>
					<hr>
				</div>
		
		<?php 
			else:
		 ?>	
				<div class="col-xs-12 col-sm-6">
					<hr>
					<p class="featured-image center">
						<h6><em>Oops!</em></h6>
						<small>Sorry, unfortunately no image is available at this time.</small>
					</p>
					<hr>
				</div>
		<?php 
			endif; 
		?>
			</div> <!-- .row -->
		</div> <!-- .container -->

	</div><!-- .entry-content -->
</article><!-- #post -->







</div>
<!-- .container	 -->
