<?php
/*
Template Name: Фасадные, кровельные работы
Template Post Type: post
*/
?>
<?php get_header('home'); ?>

<div class="img-container-facade">
    <h1 class="facade__title">
        <?php the_field('facade_title'); ?>
    </h1>
    <button onclick="return location.href = '/galereya/#facade';" class="facade__btn-link">Галерея готовых объектов
    </button>
</div>
<?php the_content(); ?>

<script async="" src="<?php echo get_template_directory_uri(); ?>/assets/js/video.js"></script>
<div class="<?php the_field('class_for_facade_video'); ?>" role="dialog"></div>
<div class="modalV" role="alert">
	<button class="close" role="button">X</button>
	<h2>Посмотрите как мы ремонтируем фасады!</h2>
	<div class="video">
		<a class="video__link" href="https://youtu.be/137fPEN5DRg" target="_blank" rel="nofollow">
			<picture>
				<source type="image/webp" srcset="https://i.ytimg.com/vi_webp/9_a0Yq_OCcw/maxresdefault.webp">
				<img class="video__media" src="https://i.ytimg.com/vi/9_a0Yq_OCcw/maxresdefault.jpg"
					 alt="Фасадные работы в Санкт-Петербурге">
			</picture>
		</a>
		<button onclick=" window.open('https://youtu.be/137fPEN5DRg','_blank')" class="video__button"
				aria-label="Запустить видео">
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="video-player__btn homeVideoPlayButton"
				 width="96" height="96" viewBox="0 0 48 48">
				<g>
					<path class="video__button-shape"
						  d="M 43.199219 33.898438 C 42.800781 36 41.101563 37.601563 39 37.898438 C 35.699219 38.398438 30.199219 39 24 39 C 17.898438 39 12.398438 38.398438 9 37.898438 C 6.898438 37.601563 5.199219 36 4.800781 33.898438 C 4.398438 31.601563 4 28.199219 4 24 C 4 19.800781 4.398438 16.398438 4.800781 14.101563 C 5.199219 12 6.898438 10.398438 9 10.101563 C 12.300781 9.601563 17.800781 9 24 9 C 30.199219 9 35.601563 9.601563 39 10.101563 C 41.101563 10.398438 42.800781 12 43.199219 14.101563 C 43.601563 16.398438 44.101563 19.800781 44.101563 24 C 44 28.199219 43.601563 31.601563 43.199219 33.898438 Z "></path>
					<path class="video__button-icon" d="M 20 31 L 20 17 L 32 24 Z "></path>
				</g>
			</svg>
		</button>
	</div>
</div>

<?php include(TEMPLATEPATH . '/inc/price-section.php'); ?>

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
    <div class="<?php the_field('class_for_bottom_container'); ?>">
        <p class="facade__text">
            <?php the_field('facade_desc_two'); ?>
        </p>
    </div>
</div>
<hr class="service-line">

<?php get_footer('home'); ?>
