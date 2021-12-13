<?php
/*
Template Name: Отзывы
*/
?>
<?php
get_header('home');
?>
	<div class="feedback">
		<div class="feedback-wrap">
			<h1 class="feedback__title">
                <?php the_field('feedback_title'); ?>
			</h1>
			<button id="ceo-message__btn" class="ceo-message__btn">Обращение Генерального Директора</button>
		</div>
	</div>
<?php
include 'ceo-message.php';
?>
	<section class="feedback-letter">
		<div class="feedback-letter__wrap">
            <?php if (have_rows('feedback_image')): ?>
                <?php while (have_rows('feedback_image')): the_row();
                    $link = get_sub_field('feedback_images');
                    $content = get_sub_field('feedback_desc');
                    ?>
					<a href="<?php echo $link; ?>" class="feedback__link" rel="lightbox">
						<img class="feedback__img" src="<?php echo $link; ?>" alt="<?php echo $content ?>"/>
						<p class="feedback__desc"><?php echo $content ?></p>
					</a>
                <?php endwhile; ?>
            <?php endif; ?>
		</div>
	</section>
	<div class="feedback__line"></div>
<?php
get_footer('home');
?>