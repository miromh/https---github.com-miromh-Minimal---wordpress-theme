<!DOCTYPE HTML>
<html>
	<head>
		<title><?php bloginfo( 'name' ); ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	<body class="landing">
		<!-- Header -->
		<?php
		get_header();
		?>
		<a href="#menu" class="navPanelToggle"><span class="fa fa-bars"></span></a>
		<!-- Banner -->
		<section id="banner_small">
			
		</section>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- One -->
		<section id="one" class="wrapper style1">
			<div class="container 75%">
				<div class="row 200%">
					<div class="6u 12u$(medium)">
						<header class="major">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<div>
								<?php the_post_thumbnail( array(250,500) ); ?>
							</div>
							<div><h5><?php the_date(); ?></h5></div>
						</header>
					</div>
					
				</div>
				<div>
					<?php the_content(); ?>
					<div><h5>Author: <?php the_author(); ?></h5></div>
					<!-- <div><h5>______________________</h5></div> -->
					<div><?php comments_template(); ?></div>
				</div>
			</div>
		</section>
		<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
		<!-- Footer -->
		<?php get_footer(); ?>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>