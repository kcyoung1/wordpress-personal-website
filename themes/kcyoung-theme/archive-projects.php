<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kcyoung_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="projects">
						<?php
							get_template_part( 'template-parts/content', 'projects-archive' );
					endif; ?>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer(); ?>
