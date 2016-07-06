<?php
/**
 * Template part for displaying projects.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kcyoung_theme
 */

?>

<div class="project-container">
	<ul>
	<?php
		$projects = array(
			'post_type' => 'projects',
			'order' => 'DSC',
			'orderby' => 'date',
			'posts_per_page' => 20);
			$projects_posts = get_posts( $projects );
		foreach ( $projects_posts as $post ) : setup_postdata($post) ; ?>

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

	<?php endforeach;
							wp_reset_postdata(); ?>
	</ul>
</div><!-- .project-container -->
