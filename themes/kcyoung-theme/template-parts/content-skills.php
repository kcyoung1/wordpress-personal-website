<?php
/**
 * Template part for displaying skills.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kcyoung_theme
 */

?>

	<ul class="skills-wrap">
	<?php
		$skills = array(
			'post_type' => 'skills',
			'order' => 'ASC',
			'orderby' => 'date',
			'posts_per_page' => 15);
			$skills_posts = get_posts( $skills);
		foreach ( $skills_posts as $post ) : setup_postdata($post) ; ?>

		<li>
				<div class="skills-info">
					<h3><?php the_title(); ?></h3>
					<div class="skills-image">
							<?php the_post_thumbnail('full'); ?>
					</div>
				</div>
		</li>

	<?php endforeach;
							wp_reset_postdata(); ?>
</ul>
