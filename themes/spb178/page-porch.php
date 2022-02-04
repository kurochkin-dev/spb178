<?php
/*
Template Name: Ремонт крыльца
*/
?>
<?php
get_header('home');
?>
<div class="img-container-porch">
	<h1 class="porch__title">
		<?php the_field('porch_title'); ?>
	</h1>
	<button onclick="return location.href = '/galereya/#porch';" class="porch__btn-link">Галерея готовых объектов
	</button>
</div>
<?php the_content(); ?>
<?php
include 'inc/price-section.php';
?>
<div class="porch-container">
	<?php the_field('porch_desc'); ?>
	<div class="porch__wrap">
		<img src="<?php the_field('porch_img'); ?>" alt="Ремонт крыльца" class="porch__img">
	</div>
</div>
<?php the_field('porch_article'); ?>

<?php
get_footer('home');
?>

