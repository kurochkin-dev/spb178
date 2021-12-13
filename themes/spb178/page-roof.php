<?php
/*
Template Name: Кровельные работы
*/
?>
<?php
get_header('home');
?>
<div class="roof-container">
	<div class="img-roof__container">
		<h1 class="img-roof__title">
            <?php the_field('roof_title'); ?>
		</h1>
		<button onclick="return location.href = '/galereya/#snow';" class="facade__btn-link">Галерея готовых объектов
		</button>
	</div>
        <?php the_content(); ?>
</div>
<?php
include 'price-section.php';
?>
<div class="roof__container-outer container__outer roof__container-outer--line">

    <?php the_field('roof_desc'); ?>

	<div class="roof__wrap">
		<img src="<?php the_field('roof_img'); ?>" alt="Кровельные работы"
			 class="roof__img">
	</div>

</div>

<?php
get_footer('home');
?>
