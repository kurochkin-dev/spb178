<?php
/*
Template Name: Допуски
*/
?>
<?php
get_header('home');
?>
	<div class="sro-container">
		<div class="sro-row">
			<h1 class="dopuski_cro"><?php the_field('sro_title') ?></h1>
			<div class="sro__wrap">
                <?php
                $images = get_field('allow_gallery');
                if ($images): ?>
                    <?php foreach ($images as $image): ?>
						<a href="<?php echo $image['url']; ?>" target="_blank" rel="lightbox">
							<img class="sro-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
						</a>
                    <?php endforeach; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
<?php
get_footer('home');
?>