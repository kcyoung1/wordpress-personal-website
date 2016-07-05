<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kcyoung_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<!-- Hero Banner -->
			<div class="hero-banner" data-type="background" data-speed="10">
				<h1>Kurtis Young</h1>
			</div><!-- .hero-banner -->

			<!-- About -->
			<section id="scroll-target" class="about">
					<h1>About</h1>
					<p>
						This is my about section. I will talk about how cool and awesome I am. Yes I made this website all by myself.
					</p>
			</section><!-- .about -->

			<!-- Projects -->

			<section class="projects">
				<div class="center">
					<h1>Projects</h1>
				</div>

				<div class="project-container">
					<ul>
					<?php
						$query = new WP_Query( array(
							'post_type' => 'projects',
							'order' => 'DSC',
							'orderby' => 'date',
							'posts_per_page' => 6)
						);

						while ( $query->have_posts() ) : $query->the_post(); ?>

						<li>
							<div class="project-wrap">
								<div class="project-image">
									<?php the_post_thumbnail( 'full' ); ?>
								</div>
								<div id="hidden" class="project-info">
									<h3><?php the_title(); ?></h3>
									<p><?php echo wp_kses_post(CFS()->get( 'description' )); ?></p>
									<a class="read-btn" href="<?php the_permalink(); ?>">Read More</a>
								</div>
							</div>
						</li>

						<?php endwhile;
											wp_reset_postdata(); ?>
					</ul>
				</div><!-- .project-container -->
				<div class="button-div clearfix">
					<div class="solid-line"></div>
					<a href="/projects" class="button">View More</a>
				</div>
			</section><!-- .projects -->


			<!-- Abilities -->
			<section class="abilities">
				<h1>Abilities</h1>
			</section>



			<!-- Contact	 -->
			<section class="contact">
				<h1>Contact</h1>
			</section>



			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
