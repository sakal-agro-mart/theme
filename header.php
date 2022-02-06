<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sakal
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'sakal'); ?></a>

		<header id="masthead" class="site-header">
			<nav id="site-navigation" class="main-navigation d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div id="navbar-hamburger" class="col-3 col-md-4 col-xl-6 order-md-2 d-flex align-items-center">
							<i class="bi bi-list d-md-none d-block"></i>
							<div id="menu-links-wrapper">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'navbar-menu',
										'menu_id'        => 'navbar-menu',
									)
								);
								?>

							</div>
						</div>
						<div class="col-6 col-md-5 col-xl-3 order-md-1 d-flex justify-content-center align-items-center">
							<?php the_custom_logo() ?>
						</div>

						<div class="col-3 order-md-3 d-flex justify-content-end align-items-center">
							<div class="nav-cart-icon-wrapper">
								<a class="cart-customlocation me-3" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e('View your shopping cart'); ?>">
									<i class="bi bi-cart3"></i>
									<div class="no-of-items">
										<div>
											<?php echo sprintf('%d', WC()->cart->get_cart_contents_count()); ?>
										</div>
									</div>
								</a>
							</div>

							<i class="bi bi-search"></i>
						</div>
					</div>
				</div>
			</nav>
		</header>