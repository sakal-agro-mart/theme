<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sakal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="text-center">

		<div class="h1">
			<?php the_title() ?>
		</div>
		<div class="pb-4 sakal-single-blog-date-line">
			<span>
				<i class="bi bi-calendar3 me-2"></i>
			</span>
			<?php the_date() ?>

			<span class="ps-2">
				<?php the_author() ?>

			</span>

		</div>

		<?php sakal_post_thumbnail(); ?>
	</div>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->