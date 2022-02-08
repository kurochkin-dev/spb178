<?php
/*
Template Name: Внутренний ремонт помещений
*/
?>
<?php get_header('home'); ?>

<div class="img-container-room">
	<h1 class="room__title">
		<?php the_field('room_title'); ?>
	</h1>
	<button onclick="return location.href = '/galereya/#room';" class="room__btn-link">Галерея готовых объектов
	</button>
</div>
<?php the_content(); ?>

<?php
include 'inc/price-section.php';
?>
<div class="room-container">
	<div class="room__wrap wrap">
		<div class="room__wrap-gradient">
			<?php the_field('room_article'); ?>
		</div>
	</div>
	<div class="room__wrap wrap">
        <?php $images = get_field('room_images');
        if ($images): ?>
			<img src="<?php the_field('room_image'); ?>" alt="Изображение" class="room__img">
			<div class="room__block-img">
                <?php foreach ($images as $image): ?>
					<a href="<?php echo $image; ?>" class="gallery-link" rel="lightbox">
						<img class="gallery-imgmin gallery-imgmin--room" src="<?php echo $image; ?>" alt="<?php echo $image['alt']; ?>"/>
					</a>
                <?php endforeach; ?>
			</div>
        <?php endif; ?>
		<div class="room-btn__wrap">
			<button onclick="return location.href = '/galereya/';" class="room__btn">галерея</button>
		</div>
	</div>
</div>
<?php the_field('room_article_two'); ?>
<?php get_footer('home'); ?>
