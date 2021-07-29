<?php get_header(); ?>
<?php if (has_post_thumbnail()) : ?>
	<figure class="hero">
		<?php the_post_thumbnail(); ?>
	</figure>
<?php endif; ?>
<main class="main main-top">
	<div class="partsGrid">
		<div class="grid12">
			<div class="show">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
				<?php endwhile;
				endif; ?>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>

</html>