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
		<ul class="menu index-menu">
			<li class="menu__item mr-20"><span class="menu__link">Главная</span></li>
			<li class="menu__item scalable mr-20">
				<a id="uslugi" href="/service/" class="menu__link mr-22">Услуги <i class="fa fa-angle-down"></i></a>
				<ul class="submenu index__submenu">
					<li class="submenu__item"><a class="submenu__link" href="/service/construction-work/">Строительные
							работы</a></li>
					<li class="submenu__item"><a class="submenu__link" href="/service/visotnie-raboti/">Высотные
							работы</a></li>
					<li class="submenu__item"><a class="submenu__link" href="/service/vnutrennii_remontnie_raboti/">Внутренние
							ремонтные работы</a></li>
					<li class="submenu__item"><a class="submenu__link" href="/service/facade/">Фасадные работы</a></li>
					<li class="submenu__item"><a class="submenu__link" href="/service/roof/">Кровельные работы</a></li>
					<li class="submenu__item"><a class="submenu__link" href="/service/snow/">Очистка от снега</a></li>
				</ul>
			</li>
			<li class="menu__item scalable mr-20"><a class="menu__link" href="/cro/">Допуски</a></li>
			<li class="menu__item scalable mr-20"><a class="menu__link" href="/video/">Видео</a></li>
			<li class="menu__item scalable mr-20"><a class="menu__link" href="/about/">Отзывы</a></li>
			<li class="menu__item scalable mr-20"><a class="menu__link" href="/galereya/">Галерея</a></li>
			<li class="menu__item scalable mr-20"><a class="menu__link" href="/vakansii/">Вакансии</a></li>
			<li class="menu__item scalable"><a class="menu__link" href="/contact/">Контакты</a></li>
			<div id="subnav">
				<img class="subnav__img" src="<?php bloginfo('template_directory'); ?>/images/bg_for_subnav_reverce.png"
					 alt="">
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
		</ul>
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

		<button id="btn" class="modalShow index__btn" aria-haspopup="true">
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
get_footer('anyscripts');
?>
