<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class('top'); ?>>
	<?php wp_body_open(); ?>
	<header class="header header-top">
		<div class="partsGrid">
			<div class="inner">
				<a href="<?php echo esc_url(home_url('/')); ?>" class="siteName">
					<img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" />
				</a>
				<button class="navBtn" onclick="navFunc()">
					<span class="sr-only">MENU</span>
				</button>
				<?php if (has_nav_menu('primary')) : ?>
					<nav class="nav">
						<?php wp_nav_menu(array(
							'theme_loccation' => 'primary'
						)); ?>
					</nav>
				<?php endif; ?>
			</div>
		</div>
	</header>