<?php
/**
 * The main template file.
 *
 * @package Accessible_Forums
 */

get_header();
?>
<main id="primary" class="site-main">
	<?php if ( have_posts() ) : ?>
		<?php if ( is_home() && ! is_front_page() ) : ?>
			<header class="page-header"><h1><?php single_post_title(); ?></h1></header>
		<?php endif; ?>
		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</header>
				<div class="entry-summary"><?php the_excerpt(); ?></div>
			</article>
		<?php endwhile; ?>
		<?php the_posts_pagination(); ?>
	<?php else : ?>
		<h1><?php esc_html_e( 'Nothing found', 'accessible-forums' ); ?></h1>
		<p><?php esc_html_e( 'There is no content to display yet.', 'accessible-forums' ); ?></p>
	<?php endif; ?>
</main>
<?php
get_footer();
