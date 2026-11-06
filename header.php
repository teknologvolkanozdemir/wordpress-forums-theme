<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'accessible-forums' ); ?></a>
<header class="site-header">
	<div class="site-branding">
		<?php if ( has_custom_logo() ) : ?>
			<?php the_custom_logo(); ?>
		<?php endif; ?>
		<div>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php $accessible_forums_description = get_bloginfo( 'description', 'display' ); ?>
			<?php if ( $accessible_forums_description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo esc_html( $accessible_forums_description ); ?></p>
			<?php endif; ?>
		</div>
	</div>
	<nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'accessible-forums' ); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'primary-menu',
				'fallback_cb'    => 'wp_page_menu',
			)
		);
		?>
	</nav>
</header>
