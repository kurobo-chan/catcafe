<footer class="footer">
	<div class="partsGrid">
		<div class="inner">
			<figure class="siteName">
				<img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>" />
			</figure>
			<div class="address">
				<p>
					<?php the_author_meta('postalcode'); ?><br />
					<?php the_author_meta('address'); ?>
				</p>
				<p class="tel"><?php the_author_meta('telnmber'); ?></p>
			</div>
			<p class="copyLight">©2021 CAT CAFE</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>