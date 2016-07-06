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
				<div class="about-title">
							<h1>About</h1>
				</div>
					<p>
						Web Developer who creates amazing websites for amazing people. Born and raised in Edmonton, Alberta, living in Vancouver, B.C.
					</p>
			</section><!-- .about -->

			<!-- Projects -->

			<section class="projects">
				<div class="center section-title">
					<h1>Projects</h1>
				</div>

				<?php get_template_part( 'template-parts/content', 'projects' ); ?>

				<div class="button-div clearfix">
					<div class="solid-line"></div>
					<a href="/projects" class="button">View More</a>
				</div>
			</section><!-- .projects -->

			<!-- Skills -->
			<section class="skills">
						<div class="section-title">
							<h1>Skills</h1>
						</div>
						<?php get_template_part( 'template-parts/content', 'skills' ); ?>
			</section><!-- .skills -->

			<!-- Contact	 -->
			<section class="contact">
				<div class="section-title">
					<h1>Contact</h1>
				</div>
				<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
