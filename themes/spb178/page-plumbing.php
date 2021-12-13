<?php
/*
Template Name: Сантехнические работы
*/
?>
<?php
get_header('home');
?>

	<div class="img-container-plumb">
		<h1 class="plumb__title">
			<?php the_field('plumb_title'); ?>
		</h1>
		<button onclick="return location.href = '/galereya/#plumb';" class="plumb__btn-link">Галерея готовых объектов
		</button>
	</div>
<?php the_content(); ?>

<?php
include 'price-section.php';
?>
<?php
the_field('plumb_article');
the_field('plumb_article_two');
the_field('plumb_article_three');
?>

<?php
get_footer('home');
?>