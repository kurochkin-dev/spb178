<?php
/*
Template Name: Главная
*/
?>

<?php
get_header();
?>

<style>
	.hamburger-icon {
		top: 7%;
	}
</style>
<div id="trailer">
	<img id="polyfil" src="<?php bloginfo('template_directory'); ?>/images/Polyfil.png"
		 alt="Прозрачный полифилл для фона">
	<img id="bg-for-phones" src="<?php bloginfo('template_directory'); ?>/images/construction.jpg"
		 alt="Строительные работы СПБ">
	<video id="video" muted="" autoplay="autoplay" preload="auto"
		   poster="<?php bloginfo('template_directory'); ?>/images/construction.jpg">
		<source src="<?php bloginfo('template_directory'); ?>/images/Kot.mp4">
		<source src="<?php bloginfo('template_directory'); ?>/images/Kot.webm" type="video/webm">
	</video>
</div>

<div class="container">
	<!-- Header navigator -->

	<div class="hamburger-icon" id="icon">
		<div class="icon-1" id="a"></div>
		<div class="icon-2" id="b"></div>
		<div class="icon-3" id="c"></div>
		<div class="clear"></div>
	</div>

	<nav id="nav" class="header_nav" aria-details="navigation">
        <?php wp_nav_menu(array('container' => false)); ?>
		<div id="subnav">
			<img class="subnav__img" src="<?php bloginfo('template_directory'); ?>/images/bg_for_subnav_reverce.png" alt="Фон">
			<ul class="subnav__list">
				<li><a class="service-item" href="/service/construction-work/">Строительные работы</a></li>
				<li><a class="service-item" href="/service/visotnie-raboti/">Высотные работы</a></li>
				<li><a class="service-item" href="/service/vnutrennii_remontnie_raboti/">Внутренние ремонтные
						работы</a></li>
				<li><a class="service-item" href="/service/facade/">Фасадные работы</a></li>
				<li><a class="service-item" href="/service/roof/">Кровельные работы</a></li>
				<li><a class="service-item" href="/service/snow/">Очистка от снега</a></li>
			</ul>
		</div>
	</nav>

	<div class="dark-blue" id="blue"></div>

	<!-- Main -->
	<div class="main-index main">
		<!-- Logo part -->
		<div id="main-logo">
			<picture>
				<source srcset="<?php the_field('logo_main_webp'); ?>" type="image/webp">
				<img class="index__logo" src="<?php the_field('logo_main_png'); ?>" alt="ООО СтройСнаб">
			</picture>
		</div>

		<!-- Offers part -->
		<div class="offer index__offer">
			<p class="offer__desc"><?php the_field('main_desc'); ?>
			</p>
		</div>
		<button id="btn" class="modalShow index__btn" data-page-title="<?= the_title() ?>" aria-haspopup="true">
			Заказать звонок
		</button>
		<div class="mask" role="dialog"></div>
		<div class="modalW" id="modalW">
            <?php echo do_shortcode('[contact-form-7 id="48" title="Форма обратной связи"]') ?>
		</div>
		<div class="main-footer index-footer">
			<div class="index-footer__list">
				<div class="index-footer__item-wrap">
					<a class="address__link" href="https://yandex.ru/maps/-/CKq0V4zU" target="_blank" rel="nofollow">
                        <?php the_field('main_address'); ?>
					</a>
				</div>
				<div class="index-footer__item-wrap">
					<a class="address-tel__link"
					   href="tel:<?php the_field('main_phone_one'); ?>"><?php the_field('main_phone_one'); ?></a>
					<a class="address-tel__link"
					   href="tel:<?php the_field('main_phone_two'); ?>"><?php the_field('main_phone_two'); ?></a>
				</div>
				<div class="index-footer__item-wrap"><a class="address-mail__link"
														href="mailto:spb178.com@yandex.ru"><?php the_field('main_mail'); ?></a>
				</div>
				<div class="index-footer__item-wrap">
					<p class="work-hour"><?php the_field('main_open_hour'); ?></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
if (is_front_page() || is_home()) {
    get_footer('anyscripts');
} else {
    get_footer('home');
}
?>

