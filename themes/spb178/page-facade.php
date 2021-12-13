<?php
/*
Template Name: Фасадные работы
*/
?>
<?php
get_header('home');
?>
<div class="img-container-facade">
	<h1 class="facade__title">
		<?php the_field('facade_title'); ?>
	</h1>
	<button onclick="return location.href = '/galereya/#facade';" class="facade__btn-link">Галерея готовых объектов
	</button>
</div>
<?php the_content(); ?>

<?php
include 'price-section.php';
?>
<div class="facade-container">
	<div class="facade__wrap wrap">
		<div class="facade__wrap-gradient">
			<?php the_field('facade_desc'); ?>
		</div>
	</div>
	<div class="facade__wrap wrap">
		<img src="<?php the_field('facade_img'); ?>" alt="Фасад" class="facade__img">
	</div>
</div>
<div class="facade-bottom__container">
	<div class="facade-last__block">
		<p class="facade__text">
            <?php the_field('facade_desc_two'); ?>
		</p>
	</div>
</div>
<?php
get_footer('home');
?>
