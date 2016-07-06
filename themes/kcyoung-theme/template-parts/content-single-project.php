<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kcyoung_theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="single-image">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'full' ); ?>
			<?php endif; ?>
		</div>

		<h1><?php the_title(); ?></h1>
		<h3><?php echo wp_kses_post(CFS()->get( 'description' )); ?></h3>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<a href="<?php echo wp_kses_post(CFS()->get( 'github-link' )); ?>"></a>
</article><!-- #post-## -->
