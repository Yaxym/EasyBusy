<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta name="yandex-verification" content="1ca4e280979eff11" />
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<?php wp_head(); ?>
	</head>
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TT1LVP59PY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TT1LVP59PY');
</script>
	<body <?php body_class(); ?>>
		<?php
		if ( function_exists( 'wp_body_open' ) ) :
			wp_body_open();
		endif;
		?>
		<div class="site-container">
			<header class="site-header">
				<div class="header-navbar">
					<div class="header-navbar__start">
						<div class="header-logo">
							<?php
							if ( has_custom_logo() ) :
								the_custom_logo();
							else :
								?>
								<a href="<?php echo esc_url( home_url() ); ?>" rel="home">
									<div class="header-logo__name"><?php bloginfo( 'name' ); ?></div>
									<?php if ( get_bloginfo( 'description' ) ) : ?>
										<div class="header-logo__description"><?php bloginfo( 'description' ); ?></div>
									<?php endif; ?>
								</a>
							<?php endif; ?>
						</div>
					</div>
					<div class="header-navbar__end">
						<div class="header-navbar__burger" data-component="burger">
							<a href="#"><i class="fas fa-bars"></i></a>
							<?php
							wp_nav_menu(
								[
									'theme_location' => 'header',
									'container'      => 'ul',
								]
							);
							?>
						</div>
						<nav class="header-navbar__menu" data-component="menu">
							<?php
							wp_nav_menu(
								[
									'theme_location' => 'header',
									'container'      => 'ul',
								]
							);
							?>
            </nav>
			</header>
			<div class="site-content" id="content">
				<div class="container">
