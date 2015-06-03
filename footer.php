		
		</main>
		<footer class="site-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12" id="footer-widgets">
			<hr>

							<?php 

								// get_sidebar( 'footer' );

							 ?>			
							<?php 

							if ( ! dynamic_sidebar( 'footer' ) ): 
							?>
							
							
							<?php 
							endif; 
							?>
					</div>
					<div class="col-xs-12">
						<hr>
								
						<p class="text-center">&copy; <?php bloginfo( 'name' ); ?> <?php echo date('Y'); ?></p>
						
						<hr>
					</div>
					<br>

			</div> <!-- .row -->
		</div> <!-- .container -->
	</footer>

		<?php wp_footer(); ?>
		
	</body>
</html>
