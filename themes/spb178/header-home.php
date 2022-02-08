<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, shrink-to-fit=no">
	<meta name="description"
		  content="Компания 'СтройСнаб' выполняет строительные, высотные, ремонтные и монтажные работы любой сложности в Санкт-Петербурге. Звоните +7 (812) 454-55-78.">
	<meta name="keywords" content="">
	<meta name="robots" content="index, follow, noodp">
	<meta name="googlebot" content="index, follow">
	<meta name="google" content="notranslate">
	<meta http-equiv="Cache-Control" content="no-cache"/>
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
	<meta name="format-detection" content="telephone=no">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/spb178/icons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/spb178/icons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/spb178/icons/favicon-16x16.png">
	<link rel="manifest" href="/wp-content/themes/spb178/site.webmanifest">
	<link rel="mask-icon" href="/wp-content/themes/spb178/icons/safari-pinned-tab.svg" color="#5bbad5">

	<title><?php wp_title(); ?></title>

	<!-- Yandex.Metrika counter -->
	<script src="https://api-maps.yandex.ru/2.1/?apikey=ac441832-f13a-4b1d-9214-122da571f681&amp;lang=ru_RU"
			type="text/javascript"></script>

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
		<div><img src="https://mc.yandex.ru/watch/30583767" style="position:absolute; left:-9999px;" alt="Карта"/></div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
    <?php wp_head(); ?>

</head>
<body <?php body_class() ?>>
<header class="header">
	<div class="head-address">
		<div class="top-address top-address-adr">
			<ul>
				<li class="top-address-text top-address-text1">
					<a class="header__address" href="https://yandex.ru/maps/-/CWDm5AN3" rel="nofollow noreferrer"
					   target="_blank">
                        <?php the_field('header_address', 'option'); ?>
					</a>
				</li>
			</ul>
		</div>
		<div class="top-address top-address-tel top-address-text">
			<ul class="ul-address">
				<li><a class="header__tel"
					   href="tel: +78124545578"><?php the_field('header_phone_one', 'option'); ?></a><br></li>
				<li><a class="header__tel"
					   href="tel: +79219476179"><?php the_field('header_phone_two', 'option'); ?></a></li>
			</ul>
		</div>
		<div class="top-address top-address-none top-address-text">
			<span><a class="header__mail"
					 href="mailto: spb178.com@yandex.ru"><?php the_field('header_mail', 'option'); ?></a></span>
		</div>
		<div class="top-address">
			<button class="top-button top-address-text modalShow" data-page-title="<?= the_title() ?>">
				Заказать звонок
			</button>
		</div>
	</div>
	<div id="cont-logo" class="cont-logo">
		<div id="logo" class="logo__wrap">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<picture class="logo">
					<source
						srcset="<?php the_field('header_logo_webp', 'option'); ?>"
						type="image/webp">
					<img class="logo-img" src="<?php the_field('header_logo_png', 'option'); ?>" alt="ООО СтройСнаб">
				</picture>
			</a>
			<div class="hr__wrap">
				<hr class="hr-line">
			</div>
		</div>
	</div>
	<div class="hamburger-icon" id="icon">
		<div class="icon-1" id="a"></div>
		<div class="icon-2" id="b"></div>
		<div class="icon-3" id="c"></div>
		<div class="clear"></div>
	</div>
	<nav id="nav" class="header_nav" aria-details="navigation">
        <?php wp_nav_menu(array('container' => false)); ?>
	</nav>
	<div class="dark-blue" id="blue"></div>
	<div class="mask" role="dialog"></div>
	<div class="modalW" id="modalW">
        <?php echo do_shortcode('[contact-form-7 id="885" title="Форма в шапке сайта"]') ?>
	</div>
</header>

