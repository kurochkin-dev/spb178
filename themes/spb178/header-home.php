<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, shrink-to-fit=no">
	<!-- <meta name="viewport" content="width=320, user-scalable=no, minimal-ui,target-densitydpi=device-dpi"> -->
	<meta name="description"
		  content="Компания 'СтройСнаб' выполняет строительные, высотные, ремонтные и монтажные работы любой сложности в Санкт-Петербурге. Звоните +7 (812) 454-55-78.">
	<meta name="keywords" content="">
	<meta name="robots" content="index, follow, noodp">
	<meta name="googlebot" content="index, follow">
	<meta name="google" content="notranslate">
	<meta http-equiv="Cache-Control" content="no-cache"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
	<meta name="format-detection" content="telephone=no">

	<!--	<link href="/css/--><?php //echo $prefix; ?><!--vakancii.css" rel="stylesheet"/>-->

	<script src="https://api-maps.yandex.ru/2.1/?apikey=ac441832-f13a-4b1d-9214-122da571f681&amp;lang=ru_RU"
			type="text/javascript"></script>

	<!-- <?php echo $prefix; ?> -->

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/spb178/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/spb178/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/spb178/icons/favicon-16x16.png">
	<link rel="manifest" href="/wp-content/themes/spb178/site.webmanifest">
	<link rel="mask-icon" href="/wp-content/themes/spb178/icons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<title><?php wp_title(); ?></title>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(30583767, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
	</script>
	<noscript>
		<div><img src="https://mc.yandex.ru/watch/30583767" style="position:absolute; left:-9999px;" alt=""/></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
    <?php wp_head(); ?>

</head>

<header class="header">
	<div id="head-adress" class="head-address">
		<div class="top-address top-address-adr">
			<ul>
				<li class="top-address-text top-address-text1" id="top-adress-text1"><a href="https://yandex.ru/maps/-/CWDm5AN3" rel="nofollow" target="_blank">Санкт-Петербург, м. Пролетарская, проспект Обуховской Обороны, 199</a></li>
			</ul>
		</div>
		<div class="top-address top-address-tel top-address-text">
			<ul class="ul-address">
				<li><a href="tel: +78124545578">+7 (812) 454-55-78</a><br></li>
				<li><a href="tel: +79219476179">+7 (921) 947-61-79</a></li>
			</ul>
		</div>
		<div class="top-address top-address-none top-address-text">
			<span><a href="mailto: spb178.com@yandex.ru">spb178.com@yandex.ru</a></span>
		</div>
		<div class="top-address">
			<button id="top-button" class="top-adress-text modalShow">Заказать звонок</button>
		</div>
	</div>
	<div id="cont-logo" class="cont-logo">
		<div id="logo" class="logo__wrap">
			<a href="/">
				<picture class="logo">
					<source
						srcset="<?php echo get_template_directory_uri(); ?>/images/logo.webp"
						type="image/webp">
					<img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/logo.png">
				</picture>
			</a>
			<div class="hr__wrap">
				<hr class="hr-line">
			</div>
		</div>
	</div>
	<div class="main-menu">

		<div class="hamburger-icon" id="icon">
			<div class="icon-1" id="a"></div>
			<div class="icon-2" id="b"></div>
			<div class="icon-3" id="c"></div>
			<div class="clear"></div>
		</div>

		<nav id="nav" class="header_nav" aria-details="navigation">
			<ul class="menu menu-main">
				<li class="menu__item scalable mr-20"><a class="menu__link punkt-menu" href="/">Главная</a></li>
				<li class="menu__item scalable mr-20">
					<a class="menu__link punkt-menu item-service" id="uslugi" href="/service/" style="color: #e5e5e5;">Услуги<i class="fa fa-angle-down mar5"></i></a>
					<ul class="submenu middle__submenu">
						<li><a class="punkt-menu" href="/service/construction-work/">Строительные работы</a></li>
						<li><a class="punkt-menu" href="/service/visotnie-raboti/">Высотные работы</a></li>
						<li><a class="punkt-menu" href="/service/vnutrennii_remontnie_raboti">Внутренние ремонтные работы</a></li>
						<li><a class="punkt-menu" href="/service/facade/">Фасадные работы</a></li>
						<li><a class="punkt-menu" href="/service/roof/">Кровельные работы</a></li>
						<li><a class="punkt-menu" href="/service/snow/">Очистка от снега</a></li>
					</ul>
				</li>
				<li class="menu__item scalable mr-20"><a class="menu__link punkt-menu"  href="/cro/">Допуски</a></li>
				<li class="menu__item scalable mr-20"><a class="menu__link punkt-menu"  href="/video/">Видео</a></li>
				<li class="menu__item scalable mr-20"><a class="menu__link punkt-menu" href="/about/">Отзывы</a></li>
				<li class="menu__item scalable mr-20"><a class="menu__link punkt-menu" href="/galereya/">Галерея</a></li>
				<li class="menu__item scalable mr-20"><a class="menu__link punkt-menu" href="/vakansii/">Вакансии</a></li>
				<li class="menu__item scalable"><a class="menu__link punkt-menu" href="/contact/">Контакты</a></li>
			</ul>
		</nav>

		<div class="dark-blue" id="blue"></div>

	</div>
	<div class="mask" role="dialog"></div>
    <?php echo do_shortcode('[contact-form-7 id="48" title="Форма обратной связи"]') ?>
</header>