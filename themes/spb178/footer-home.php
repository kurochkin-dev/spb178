<footer class="footer">
	<div class="footer_block block_bot_1">
		<img class="footer_block_img"
			 src="<?php echo get_template_directory_uri(); ?>/img_menu/Dark-Background-left.png">
	</div>
	<div class="footer_block top-block block_bot_2">
		<ul class="footer__list footer__list--contacts">
			<li class="line1"><a href="/" class="href_footer">Главная</a></li>
			<li class="line1"><a href="/service/" class="href_footer">Услуги</a></li>
			<li class="line1"><a href="/cro/" class="href_footer">Допуски СРО</a></li>
			<li class="line1"><a href="/video/" class="href_footer">Видео</a></li>
			<li class="line1"><a href="/about/" class="href_footer">Отзывы</a></li>
			<li class="line1"><a href="/contact/" class="href_footer">Контакты</a></li>
		</ul>
	</div>
	<div class="footer_block top-block block_bot_3">
		<ul class="footer__list footer__list--work">
			<li class="line"><a href="/service/facade/" class="href_footer">Фасадные работы</a></li>
			<li class="line"><a href="/service/vnutrennii_remontnie_raboti/" class="href_footer">Внутренние ремонтные
					работы</a></li>
			<li class="line"><a href="/service/construction-work/" class="href_footer">Общестроительные работы</a></li>
			<li class="line"><a href="/service/visotnie-raboti/" class="href_footer">Высотные работы</a></li>
			<li class="line"><a href="/service/roof/" class="href_footer">Кровельные работы</a></li>
			<li class="line"><a href="/service/snow/" class="href_footer">Очистка от снега</a></li>
		</ul>
	</div>
	<div class="footer_block top-block block_bot_4">
		<ul class="footer__list footer__list--address">
			<li><b>Наш адрес:</b><br> <a class="link href_footer" href="https://yandex.ru/maps/-/CWDm5AN3"
										 rel="nofollow noreferrer"
										 target="_blank"><?php the_field('footer_address', 'option'); ?></a></li>
			<li><b>Телефоны:</b><br><a class="link href_footer"
									   href="tel: +78124545578"><?php the_field('footer_phone_one', 'option'); ?></a><br>
				<a class="link href_footer"
				   href="tel: +79219476179"><?php the_field('footer_phone_two', 'option'); ?></a>
			</li>
			<li><b>Email:</b><br> <a class="link href_footer footer__mail"
									 href="mailto: spb178.com@yandex.ru"><?php the_field('footer_mail', 'option'); ?></a>
			</li>
			<li class="li_block"><b>Время работы:</b><br><?php the_field('footer_hours', 'option'); ?></li>
		</ul>
	</div>
	<div class="footer_block top-block block_bot_5">
		<div class="footer__list footer__list--social">
			<span><b>Мы в социальных сетях:</b></span>
			<div class="footer__block-wrap">
				<a href="https://vk.com/stroysnab178" rel="nofollow noreferrer" target="_blank">
					<i class="fab fa-vk" aria-hidden="true"></i>
				</a>
				<a href="https://www.instagram.com/stroysnab.spb" rel="nofollow noreferrer" target="_blank">
					<i class="fab fa-instagram" aria-hidden="true"></i>
				</a>
				<a href="https://www.youtube.com/channel/UCOC4smtr4dU-yHpiWsOS7iQ" rel="nofollow noreferrer"
				   target="_blank">
					<i class="fab fa-youtube" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
	<div class="footer_block footer_block_right">
		<img class="footer_block_img" src="<?php bloginfo('template_directory'); ?>/img_menu/Dark-Background-right.png">
	</div>
	<div id="cookie_notification">
		<p>
			Для улучшения работы сайта и его взаимодействия с пользователями мы используем файлы cookie. Продолжая работу
			с сайтом, Вы разрешаете использование cookie-файлов. Вы всегда можете отключить файлы cookie в настройках
			Вашего браузера.
		</p>
		<button class="button cookie_accept">Принять</button>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>