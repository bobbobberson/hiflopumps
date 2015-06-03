<?php
/**
 * Outputs the single post content. Displayed by single.php.
 * 
 * @package hiflopumps
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-sm-12">
		<div class="panel panel-default">
			<div class="panel-body no-side-padding">
				<div class="col-sm-12">
					<header class="entry-header clear">
						<a href="<?php echo esc_url( get_permalink( get_page_by_title( get_the_title() ) ) ); ?>" class="more-details-title clearfix" title="Full Product Specs About <?php the_title();?>">
							<h1 class="entry-title sub-heading" id="cat-h1"><?php the_title(); ?></h1>
						</a>
					</header><!-- .entry-header -->
				</div>
				<div class="col-sm-8">
					<div class="panel panel-default">
						<div class="panel-heading no-side-padding clearfix">

						
							<div class="col-sm-12"><p><?php echo get_the_term_list( $post->ID, 'manufacturer', 'Manufacturer: ', ', ' ); ?></p></div> 
							<div class="col-sm-12"><p>Category: <?php the_category( ', ' );?></p></div>
							<div class="col-sm-12"><p><?php echo get_the_term_list( $post->ID, 'pumptags', 'Pump uses: ', ', ' ); ?></p></div> 
				
						</div>
				
						<div class="panel-body">
						   <div class="entry-content">
								<?php 
									$application_content = get_field('application_content');
									if (!empty( $application_content )) {  ?>
									<div class="application-group">
										<?php echo $application_content; ?>
									</div>
								<?php   } ;?>
								<div class="col-sm-12 col-md-5 col-md-offset-7 no-side-padding">
									<h4 class=""><a class="btn btn-custom btn-block" title="More details" role="button" href="<?php echo esc_url( get_permalink( get_page_by_title( get_the_title() ) ) ); ?>">More details... &nbsp; <span class="glyphicon glyphicon-circle-arrow-right"></span></a></h4>
								</div>
							</div><!-- .entry-content -->
						</div>
						<!-- <div class="panel-footer">footer</div> -->
					</div>
				</div> <!-- .col-md-8 -->

				<div class="col-sm-4">
							
		<?php 
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'small-thumb', true);                     
			if($thumb_id):
		?>
					<div class="panel panel-default">
						<div class="panel-heading">
							<p class="featured-image image-archive">
								<a title="Full details" href=" <?php echo esc_url( get_permalink( get_page_by_title( get_the_title() ) ) ); ?>">
									<?php the_post_thumbnail( 'small-thumb', array('class' => 'img-responsive img-thumbnail clear text-center') ); ?>
								</a>
							</p>
						</div>
					</div>

		<?php else: ?>

					<hr>
					<p class="featured-image center">
						<h6><em>Oops!</em></h6>
						<small>Sorry, unfortunately no image is available at this time.</small>
					</p>
					<hr>
		<?php endif ?>
				</div>
				<footer class="entry-footer"></footer><!-- .entry-footer -->
			</div>
		</div>
	</div>
</article><!-- #post-## -->