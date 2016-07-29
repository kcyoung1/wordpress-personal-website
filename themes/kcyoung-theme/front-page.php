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
				<h3>Front End Developer</h3>
			</div><!-- .hero-banner -->

			<!-- About -->

			<section id="scroll-target" class="about">
				<div id="about" class="about-title">
							<h1>About</h1>
				</div>
					<p>I became a Web Developer because my previous career didn't satisfy my need to be creative. Coding is a passion of mine. It allows me to be innovative while challenging me to think outside the box. I'm always interested in meeting new people with new ideas.</p>
			</section><!-- .about -->

			<!-- Projects -->

			<section id="projects" class="projects">
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
			<section id="skills"  class="skills">
						<div class="section-title">
							<h1>Skills</h1>
						</div>
						<?php get_template_part( 'template-parts/content', 'skills' ); ?>
			</section><!-- .skills -->

			<!-- Contact	 -->
			<section id="contact"  class="contact">
				<div class="section-title">
					<h1>Contact</h1>
				</div>
				<div class="center contact-container">
					<div class="contact-form">
						<?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]'); ?>
					</div>
					<div class="contact-message">
							<p>
								If you have an enquiry, please send me an email and I'll get back to you as soon as possible. Thank you.
							</p>
					</div>
				</div>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
