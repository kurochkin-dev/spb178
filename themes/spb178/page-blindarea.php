<?php
/*
Template Name: Устройство отмостки дома
*/
?>
<?php
get_header('home');
?>
<div class="img-container-blindarea">
	<h1 class="blindarea__title">
		Устройство отмостки дома
	</h1>
	<button onclick="return location.href = '/galereya/#blindarea';" class="blindarea__btn-link">
		Галерея готовых объектов
	</button>
</div>
<?php the_content(); ?>

<?php
include 'inc/price-section.php';
?>

<div class="blindarea-container">
    <?php the_field('blindarea_article'); ?>

	<div class="blindarea__wrap wrap">
        <?php $images = get_field('blindarea_images');
        if ($images): ?>
			<img src="<?php the_field('blindarea_image'); ?>" alt="Отмостка дома" class="blindarea__img">
			<div class="blindarea__block-img">
                <?php foreach ($images as $image): ?>
					<a href="<?php echo $image; ?>" class="gallery-link" rel="lightbox">
						<img class="gallery-imgmin" src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>"/>
					</a>
                <?php endforeach; ?>
			</div>
        <?php endif; ?>
		<div class="blindarea-btn__wrap">
			<button onclick="return location.href = '/galereya/';" class="blindarea__btn">галерея</button>
		</div>
	</div>
</div>
<?php the_field('blindarea_article_two'); ?>

<?php
get_footer('home');
?>

