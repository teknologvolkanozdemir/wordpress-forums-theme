<?php
/**
 * bbPress forum template.
 *
 * @package Accessible_Forums
 */

get_header();
?>
<main id="primary" class="site-main">
	<?php while ( have_posts() ) : ?>
		<?php the_post(); ?>
		<div class="entry-content"><?php the_content(); ?></div>
	<?php endwhile; ?>
</main>
<?php
get_footer();
