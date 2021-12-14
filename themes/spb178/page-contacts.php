<?php
/*
Template Name: Контакты
*/
?>
<?php
get_header();
?>
	<script>
        window.onload = function () {
            setTimeout(function () {
                document.getElementById('ya-map').src = 'https://yandex.ru/map-widget/v1/-/CKw3bPJC';
            }, 1500);
        };
	</script>
	<style>
		.hamburger-icon {
			top: 10%;
		}
	</style>

	<div id="trailer">

		<img id="polyfil" src="<?php echo get_template_directory_uri(); ?>/images/yellowPolifil.png"
			 alt="Прозрачный полифилл для фона">

		<div class="container">
			<!-- Header navigator -->

			<div class="hamburger-icon" id="icon">
				<div class="icon-1" id="a"></div>
				<div class="icon-2" id="b"></div>
				<div class="icon-3" id="c"></div>
				<div class="clear"></div>
			</div>

			<nav id="nav" class="header_nav" aria-details="navigation">
				<ul class="menu contacts-menu">
					<li class="menu__item scalable mr-20"><a class="menu__link" href="/">Главная</a></li>
					<li class="menu__item scalable mr-20">
						<a class="menu__link" id="uslugi" href="/service/">Услуги <i class="fa fa-angle-down"></i></a>
						<ul class="submenu contacts__submenu">
							<li><a class="contacts-submenu__link" href="/service/construction-work/">Строительные работы</a></li>
							<li><a class="contacts-submenu__link" href="/service/visotnie-raboti/">Высотные работы</a></li>
							<li><a class="contacts-submenu__link" href="/service/vnutrennii_remontnie_raboti/">Внутренние ремонтные работы</a></li>
							<li><a class="contacts-submenu__link" href="/service/facade/">Фасадные работы</a></li>
							<li><a class="contacts-submenu__link" href="/service/roof/">Кровельные работы</a></li>
							<li><a class="contacts-submenu__link" href="/service/snow/">Очистка от снега</a></li>
						</ul>
					</li>
					<li class="menu__item scalable mr-20"><a class="menu__link" href="/cro/">Допуски</a></li>
					<li class="menu__item scalable mr-20"><a class="menu__link" href="/about/">Отзывы</a></li>
					<li class="menu__item scalable mr-20"><a class="menu__link" href="/galereya/">Галерея</a></li>
					<li class="menu__item scalable mr-20"><a class="menu__link" href="/vakansii/">Вакансии</a></li>
					<li class="menu__item mr-20"><span class="menu__link">Контакты</span></li>
				</ul>
			</nav>

			<div class="dark-blue" id="blue"></div>

			<!-- Main -->
			<div class="main main-contacts">
				<!-- Logo part -->
				<div class="main-logo" id="main-logo">
					<picture>
						<source srcset="<?php the_field('contact_logo_webp'); ?>" type="image/webp">
						<img class="contacts__logo" src="<?php the_field('contact_logo_png'); ?>" alt="ООО СтройСнаб">
					</picture>
				</div>

				<!-- Offers part -->
				<div class="offer contacts__offer">
					<p><b>Наш адрес:</b> <a class="contacts-address__link" href="https://yandex.ru/maps/-/CKq0V4zU" rel="nofollow"
											target="_blank"><?php the_field('contact_address'); ?></a></p>
					<p><b>Телефоны: </b><a class="contacts-address-tel__link"
							href="tel:<?php the_field('contact_phone_one'); ?>"><?php the_field('contact_phone_one'); ?></a>,
						<a class="contacts-address-tel__link" href="tel:<?php the_field('contact_phone_two'); ?>"><?php the_field('contact_phone_two'); ?></a>
					</p>
					<p><b>Email: </b><a class="contacts-address-mail__link" href="mailto:spb178.com@yandex.ru"><?php the_field('contact_mail'); ?></a></p>
					<p class="contacts__data"><b>Время работы:</b>
						<span><?php the_field('contact_open_hours'); ?></span></p>
					<p class="contacts__data"><b>ИНН:</b> <span><?php the_field('contact_inn'); ?></span></p>
					<p class="contacts__data"><b>ОГРН:</b> <span><?php the_field('contact_ogrn'); ?></span></p>
				</div>

				<button id="btn" class="contacts__btn modalShow" aria-haspopup="true">
					<p class="contacts__btn-name">Заказать звонок</p>
				</button>

				<div class="mask" role="dialog"></div>
                <?php echo do_shortcode('[contact-form-7 id="48" title="Форма обратной связи"]') ?>

				<div class="main-footer contacts-footer">
					<div class="icon-list"><b>Мы в социальных сетях:</b>
						<div class="icon-list-item">
							<a href="https://vk.com/stroysnab178" rel="nofollow" target="_blank"><i
									class="fab fa-vk cont_fa"></i></a>
							<a href="https://www.instagram.com/stroysnab.spb" rel="nofollow" target="_blank"><i
									id="insta" class="fab fa-instagram cont_fa"></i></a>
							<a href="https://www.youtube.com/channel/UCKkoxPPkZpcE1ueJfhUIVNg" rel="nofollow"
							   target="_blank"><i class="fab fa-youtube cont_fa"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="contact-map">
				<div style="position:relative; overflow:hidden; height: 100%;">
					<a href="https://yandex.ru/maps/org/stroysnab/1522698137/?utm_medium=mapframe&utm_source=maps"
					   style="color:#eee;font-size:12px;position:absolute;top:0px;">Стройснаб</a>
					<a href="https://yandex.ru/maps/2/saint-petersburg/category/building_company/?utm_medium=mapframe&utm_source=maps"
					   style="color:#eee;font-size:12px;position:absolute;top:14px;">Строительная компания в
						Санкт‑Петербурге</a>
					<a href="https://yandex.ru/maps/2/saint-petersburg/category/facades/?utm_medium=mapframe&utm_source=maps"
					   style="color:#eee;font-size:12px;position:absolute;top:28px;">Фасады и фасадные системы в
						Санкт‑Петербурге</a>
					<iframe id="ya-map" src="" width="auto" height="100%" frameborder="1"
							allowfullscreen="true" style="position:relative;"></iframe>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer('anyscripts')
?>