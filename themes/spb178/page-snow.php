
<?php
get_header('home');
?>

<div class="img-container-snow">
	<h1 class="snow__title">
        <?php the_field('snow_title'); ?>
	</h1>
	<button onclick="return location.href = '/galereya/#snow';" class="snow__btn-link">Галерея готовых объектов
	</button>
</div>
<?php the_content(); ?>
<?php
include 'price-section.php';
?>
<div class="snow-container">
	<div class="snow__wrap wrap">
		<div class="snow__wrap-gradient">
            <?php the_field('snow_desc'); ?>
		</div>
	</div>
	<div class="snow__wrap wrap">
        <?php $images = get_field('snow_images');
        if ($images): ?>
			<img src="<?php the_field('snow_image'); ?>" alt="" class="snow__img">
			<div class="snow__block-img">
                <?php foreach ($images as $image): ?>
					<a href="<?php echo $image; ?>" class="gallery-link" rel="lightbox">
						<img class="gallery-imgmin" src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>"/>
					</a>
                <?php endforeach; ?>
			</div>
        <?php endif; ?>
	</div>
</div>
<?php the_field('snow_desc_two'); ?>

<?php
get_footer('home');
?>
