<?php
/*
Template Name: Видео
*/
?>
<?php get_header('home'); ?>
	<div class="video__container">
		<h3 class="video__title">
			<?php the_title(); ?>
		</h3>
		<div class="container__inner">
            <?php if (have_rows('videos')): ?>
                <?php while (have_rows('videos')): the_row();
                    $link = get_sub_field('video'); ?>
					<iframe width="560" height="315" src="<?php echo $link; ?>"
							title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
                <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</div>

<?php get_footer('home'); ?>