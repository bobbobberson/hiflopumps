<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		
		<div class="item active">
			<img src=" <?php echo get_template_directory_uri() . '/includes/img/quality1.jpg'; ?>" alt="HIFLOPumps use only high quality">
			<div class="carousel-caption">
				<h3>Quality</h3>
			</div>
		</div>

		<div class="item">
			<img src=" <?php echo get_template_directory_uri() . '/includes/img/expertise1.jpg'; ?>" alt="We have the expertise to handle any job">
			<div class="carousel-caption">
				<h3>Expertise</h3>
			</div>
		</div>

		<div class="item">
			<img src=" <?php echo get_template_directory_uri() . '/includes/img/service1.jpg'; ?>" alt="Service and the attention to detail that makes for satisfied customers">
			<div class="carousel-caption">
				<h3>Service</h3>
			</div>
		</div>

		<div class="item">
			<img src=" <?php echo get_template_directory_uri() . '/includes/img/expertise2.jpg'; ?>" alt="We have the experience to get the job done right, first time">
			<div class="carousel-caption">
				<h3>Expertise</h3>
			</div>
		</div>


	</div> <!-- .carousel-inner -->

	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>