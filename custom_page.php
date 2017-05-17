<?php
/*
Template Name: Custom page
*/
?>
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
		<!-- Banner -->
		<section id="banner_small">
		</section>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section id="one" class="wrapper style1">
			<div class="container 5%">
				<div class="row 200%">
					<div class="6u 12u$(medium)">
						<header class="major">
							<h2><?php the_title(); ?></h2>
							<div>
								<?php the_post_thumbnail( array(250,500) ); ?>
							</div>
						</header>
					</div>
					
				</div>
				<div>
					<?php the_content(); ?>
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