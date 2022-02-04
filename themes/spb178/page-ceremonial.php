<?php
/*
Template Name: Ремонт парадных
*/
?>
<?php
get_header('home');
?>

	<div class="img-container-cerem">
		<h1 class="cerem__title">
			<?php the_field('cerem_title'); ?>
		</h1>
		<button onclick="return location.href = '/galereya/#cerem';" class="cerem__btn-link">Галерея готовых объектов
		</button>
	</div>
<?php the_content(); ?>


<?php
include 'inc/price-section.php';
?>
<?php
the_field('cerem_article');
the_field('cerem_article_two');
the_field('cerem_article_three');
?>

<?php
get_footer('home');
?>