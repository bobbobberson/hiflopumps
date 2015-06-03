<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title('|', true, 'right'); ?><?php echo get_bloginfo('name'); ?></title> 
<?php include 'includes/favicons.php'; ?>
<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >
		<header class="site-header">

			<div class="container">
				<div class="row">

					<div class="hidden-xs col-sm-7 col-md-8 col-lg-8 lefty">
						<div class="header-left">
							<h1 class="site-name">
								<a href="<?php echo home_url(); ?>"><img class="img-responsive" src="http://hiflopumps.co.nz/wp-content/uploads/2014/08/hiflo_logo.png" alt="HiFLOPumps: Service | Expertise | Quality"></a>
								<span class="text-hide sr-only">HiFLOPumps</span>
							</h1>
						</div>
					</div>

					<div class="hidden-xs col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-1 col-lg-3 col-lg-offset-1 righty">
						<div class="header-right">
							<div class="address">
								<div class="region">
									<a href="<?php echo home_url(); echo '/contact-us/auckland'; ?>" class="branch-link-lg">AUCKLAND</a>
									<div class="number-container">
										<span class="glyphicon glyphicon-earphone"></span><span class="number">09 579-6375</span>
									</div>
								</div>

								<div class="region">
									<a href="<?php echo home_url(); echo '/contact-us/rotorua'; ?>" class="branch-link-lg">ROTORUA</a>
									<div class="number-container">
										<span class="glyphicon glyphicon-earphone"></span><span class="number">07 348-7516</span>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="row">

					<div class="col-xs-12 col-sm-9 col-md-9 col-lg-8 morewidth">
						<nav class="navbar" role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							<a class="navbar-brand visible-xs" href="<?php echo home_url(); ?>"><img src="http://hiflopumps.co.nz/wp-content/uploads/2014/10/hiflo-mini-full.png" alt="Circles"></a>
							</div>

							<div class="miniphone miniAK col-xs-6 visible-xs">
								<a class="minibranch" href="<?php echo home_url(); echo '/contact-us/auckland'; ?>">AUCKLAND</a>
								<span class="glyphicon glyphicon-earphone"></span><span class="number">09 579-6375 </span>
							</div>
							<div class="miniphone miniRO col-xs-6 visible-xs">
								<a class="minibranch" href="<?php echo home_url(); echo '/contact-us/rotorua'; ?>">ROTORUA</a>
								<span class="glyphicon glyphicon-earphone"></span><span class="number">07 348-7516</span>
							</div>
							<?php 
								wp_nav_menu( array(
								            'menu'              => 'primary',
								            'theme_location'    => 'primary',
											'depth'             => 2,
											'container'         => 'div',
											'container_class'   => 'collapse navbar-collapse',
											'container_id'      => 'bs-example-navbar-collapse-1',
											'menu_class'        => 'nav navbar-nav',
											'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
											'walker'            => new wp_bootstrap_navwalker() )
								);
							?>
						</nav>
					</div>


				

					<div class="hidden-xs col-sm-3 col-md-3 col-lg-3 col-lg-offset-1 righty">
						<div id="search-container" class="search-box-wrapper menu-item">
							<div class="search-box">
								<form role="search" method="get" id="searchform" class="searchform" action="http://hiflopumps.co.nz/">
									<div class="input-group">
										<label for="s" class="sr-only">Search: </label>
										<input type="text" class="form-control" name="s" id="s" placeholder="Search...">
										<span class="input-group-btn">
											<button class="btn btn-default btn-search" type="submit" id="searchsubmit"><span class="glyphicon glyphicon-search"></span></button>
										</span>
									</div>
								</form>
							</div>
						</div>
					</div>

							
				</div>
			</div>
		</header>
		<main class="main" role="main">
