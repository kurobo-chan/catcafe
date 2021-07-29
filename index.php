<?php get_header(); ?>
<div class="mainWrap">
	<div class="main-title">
		<?php if (has_post_thumbnail()) : ?>
			<figure class="titleFigure">
				<?php the_post_thumbnail(); ?>
			</figure>
		<?php endif; ?>
		<div class="partsGrid titleText">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
	<main class="main">

		<div class="partsGrid">
			<div class="grid12 main-contents">
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
					<?php endwhile;
					endif; ?>
				
			</div>
		</div>

	</main>
	<?php get_footer(); ?>
</div>
<?php wp_footer(); ?>
</body>

</html>