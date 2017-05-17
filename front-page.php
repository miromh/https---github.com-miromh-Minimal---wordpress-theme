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
		<section id="banner">
			<h2>MINIMAL</h2>
			<p>Lorem ipsum dolor sit amet nullam consequat <br /> interdum vivamus donce sed libero.</p>
			<ul class="actions">
				<li><a href="#" class="button special big">Get Started</a></li>
			</ul>
		</section>
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<!-- One -->
		<section id="one" class="wrapper style1">
			<div class="container 75%">
				<div class="row 200%">
					<div class="6u 12u$(medium)">
						<header class="major">
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							
						</header>
					</div>
					<div class="6u$ 12u$(medium)">
						<?php the_post_thumbnail( array(180,400) ); ?>
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
		</section>
		<?php endwhile; else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		
		<!-- SIDEBAR -->
		<!-- SIDEBAR 1 -->
		<div class="wrapper style2 special">
			<ul>
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</ul>
		</div>
		<!-- SIDEBAR-2 -->
		<div class="wrapper style1 special">
			<ul>
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</ul>
		</div>
		<!-- END SIDEBAR -->
		<!-- Footer -->
		<?php get_footer(); ?>
		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
	</body>
</html>