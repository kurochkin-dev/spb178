<section id='header-stick'>
	<div class="header">
		<section>
			<div class="header__contacts">
				<div class="header__link">
					<a href="">Санкт-Петербург, м. Пролетарская, проспект Обуховской Обороны, 199</a>
				</div>
				<div class="header__link">
					<a href="tel:+78124545578">+7 (812) 454-55-78</a>
					<a href="tel:+79219476179">+7 (921) 947-61-79</a>
				</div>
				<div class="header__link">
					<a href="mailto:spb178.com@yandex.ru">spb178.com@yandex.ru</a>
				</div>
				<button id="showModal" type="button" aria-haspopup="true">
					<p>Заказать звонок</p>
				</button>
			</div>
		</section>
	</div>
	<section id="header-sec-two">
		<header class="header__section-two">
			<div class="header__logo">
				<a href="/">
					<picture>
						<source srcset="/wp-content/themes/spb178/img/logo.webp" type="image/webp">
						<img id="logo" src="/wp-content/themes/spb178/img/logo.png" alt="Логотип компании ООО СтройСнаб">
					</picture>
				</a>
			</div>

			<div class="header__nav">
				<nav>
					<div class="header__hr"></div>
					<ul>
						<li><a href="/">Главная</a></li>
						<li id="li1">
							<a id="menu" href="/service/">Услуги</a>
							<img class="svg" src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/icons/triangle.svg" alt="Анимированный треугольник для выпадного меню">
							<ul id="sub-menu" aria-haspopup="true">
								<li><a href="/service/construction-work/">Строительные работы</a></li>
								<li><a href="/service/visotnie-raboti/">Высотные работы</a></li>
								<li><a href="/service/vnutrennii_remontnie_raboti">Внутренние ремонтные работы</a></li>
								<li><a href="/service/facade/">Фасадные работы</a></li>
								<li><a href="/service/roof/">Кровельные работы</a></li>
								<li><a href="/service/snow/">Очистка от снега</a></li>
							</ul>
						</li>
						<li><a href="/cro/">Допуски</a></li>
						<li><a href="/about/">Отзывы</a></li>
						<li><a href="/galereya/">Галерея</a></li>
						<li><a href="/vakansii/">Вакансии</a></li>
						<li><a href="/contact/">Контакты</a></li>
					</ul>
				</nav>
			</div>
		</header>
	</section>
</section>

<div id="mask" class="mask" role="alert"></div>
<div id="modalW" class="modalW">
	<button id="close" type="button" role="button">
		<p>X</p>
	</button>
	<div class="modalW-h2">
		<h2>Форма обратной связи</h2>
	</div>
	<div class="hr"></div>
	<div class="forma">
		<div class="forma-group">
			<label class="forma-group-label" for="name">Имя</label>
			<input name="name" type="text" placeholder="Имя" class="forma-group-input" minlength="2" maxlength="30" required>
		</div>
		<div class="forma-group">
			<label class="forma-group-label" for="phone">Телефон</label>
			<input name="phone" type="tel" placeholder="+7 (999) 888-76-54" class="forma-group-input" required>
		</div>
		<div class="forma-group">
			<label class="forma-group-label" for="mail">Почта</label>
			<input name="mail" type="text" placeholder="Email-адрес" class="forma-group-input">
		</div>
		<div class="forma-group">
			<label class="forma-group-label" for="message">Сообщение</label>
			<textarea id="message" name="message" rows="3" placeholder="Сообщение (не более 500 символов)" maxlength="500"></textarea>
		</div>
		<div class="user-agree">
			<input id="customCheck" type="checkbox" name="Пользовательское соглашение">
			<label for="customCheck">
				<p>Нажимая кнопку, я принимаю условия <a id="uAgree" href="/policy/" target="_blank">Пользовательского
						соглашения</a> и даю своё согласие на обработку моих
					персональных данных, в соответствии с Федеральным законом от 27 июля 2006 года №152-ФЗ «О
					персональных данных».</p>
			</label>
		</div>
		<div class="forma-button">
			<button id="submit" type="button" role="button" disabled>
				<p>Оставить заявку</p>
			</button>
		</div>
	</div>
</div>

<section id="about">
	<div class="about">
		<div class="about__h1">
			<h1>О компании</h1>
		</div>
		<div class="about__video">
			<video autoplay muted loop poster="/wp-content/themes/spb178/imgcontent/themes/spb178/img/video.jpg">
				<source src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/video.webm" type="video/webm">
				<source src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/video.mp4" type="video/mp4">
			</video>
			<div class="about__description">
				<p>Компания «СтройСнаб» работает с 2010 года, и, судя по <a href="/about/">отзывам</a> наших Заказчиков,
					уже заработала себе имя и положительную репутацию.</p>
				<p>Нашими основными видами деятельности являются:</p>
				<ul>
					<li>кровельные работы;</li>
					<li>фасадные работы;</li>
					<li>очистка кровель от снега и наледи;</li>
					<li>ремонт крылец;</li>
					<li>устройство и ремонт отмосток;</li>
					<li>внутренний ремонт помещений и парадных;</li>
					<li>сантехнические работы;</li>
					<li>асфальтирование;</li>
					<li>благоустройство территорий.</li>
				</ul>
				<p>Своими главными ценностями считаем качество выполненных работ и дружный коллектив. В штате компании
					собрались настоящие профессионалы своего дела, и это касается всех подразделений – и рабочих, и
					инженерных специальностей.</p>
				<p>Современные реалии диктуют новые правила игры, и либо организация будет развиваться, либо
					деградировать. ООО «СтройСнаб» выбрало первый путь, решив не просто сохранить то, что имеет, а выйти
					на качественно новый уровень.</p>
				<p>В связи с расширением, мы, коллектив «СтройСнаб», ищем новых сотрудников, которые станут нашими
					настоящими соратниками и боевыми товарищами. Если Вы готовы выполнять свои обязанности на совесть, а
					не «спустя рукава», Вы являетесь профессионалом в своей специальности и желаете, чтобы Ваши умения
					были оценены по достоинству, ищите не временную подработку, а работу и коллег не на один год – тогда
					коллектив ООО «СтройСнаб» ждет Вас, нажимайте кнопку и звоните!</p>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="vacancy">
		<div class="vacancy__h2">
			<h2>Вакансии</h2>
		</div>
		<p class="pre">Задача организации, в особенности же новая модель организационной деятельности требуют
			определения и уточнения соответствующий условий.</p>
		<div id="slider" class="vacancy-slider">
			<div class="vacancy-slide">
				<picture>
					<div class="vacancy-slide__bg">
						<div class="round">
							<button aria-haspopup="true">
								<p>откликнуться</p>
							</button>
						</div>
					</div>
					<source srcset="/wp-content/themes/spb178/imgcontent/themes/spb178/img/krovelshik.webp" type="image/webp" loading="lazy">
					<img src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/krovelshik.jpg" alt="Вакансия кровельщика компании ООО СтройСнаб" loading="lazy">
				</picture>
				<p id="krovelshik">Кровельщик</p>
			</div>
			<div class="vacancy-slide">
				<picture>
					<div class="vacancy-slide__bg">
						<div class="round">
							<button aria-haspopup="true">
								<p>откликнуться</p>
							</button>
						</div>
					</div>
					<source srcset="/wp-content/themes/spb178/imgcontent/themes/spb178/img/malar.webp" type="image/webp" loading="lazy">
					<img src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/malar.jpg" alt="Вакансия штукатура-маляра компании ООО СтройСнаб" loading="lazy">
				</picture>
				<p>Штукатур-маляр</p>
			</div>
			<div class="vacancy-slide">
				<picture>
					<div class="vacancy-slide__bg">
						<div class="round">
							<button aria-haspopup="true">
								<p>откликнуться</p>
							</button>
						</div>
					</div>
					<source srcset="/wp-content/themes/spb178/imgcontent/themes/spb178/img/universal.webp" type="image/webp" loading="lazy">
					<img src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/universal.jpg" alt="Вакансия отделочника-универсала компании ООО СтройСнаб" loading="lazy">
				</picture>
				<p>Отделочник-универсал</p>
			</div>
			<div class="vacancy-slide">
				<picture>
					<div class="vacancy-slide__bg">
						<div class="round">
							<button aria-haspopup="true">
								<p>откликнуться</p>
							</button>
						</div>
					</div>
					<source srcset="/wp-content/themes/spb178/imgcontent/themes/spb178/img/manager.webp" type="image/webp" loading="lazy">
					<img src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/universal.jpg" alt="Вакансия отделочника-универсала компании ООО СтройСнаб" loading="lazy">
				</picture>
				<p>Менеджер по работе с клиентами</p>
			</div>
<!--			<div class="vacancy-slide">-->
<!--				<picture>-->
<!--					<source srcset="/img/manager.webp" type="image/webp" loading="lazy">-->
<!--					<img src="/img/manager.jpg" alt="Вакансия менеджера по работе с клиентами компании ООО СтройСнаб" loading="lazy">-->
<!--				</picture>-->
<!--				<p>Менеджер по работе с клиентами</p>-->
<!--			</div>-->
		</div>
	</div>

</section>
<section>
	<div class="choose">
		<div class="choose__h2">
			<h2>Почему вам стоит работать у нас</h2>
		</div>
		<div class="choose-container">
			<div class="choose__card">
				<picture>
					<source srcset="/wp-content/themes/spb178/imgcontent/themes/spb178/img/icons/money.webp" type="image/webp" loading="lazy">
					<img src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/icons/money.png" alt="Стабильная заработная плата без задержек - ООО СтройСнаб" loading="lazy">
				</picture>
				<p>Стабильная <span>зароботная плата</span><span>(без задержек)</span></p>
			</div>
			<div class="choose__card">
				<picture>
					<source srcset="/wp-content/themes/spb178/imgcontent/themes/spb178/img/icons/ruki.webp" type="image/webp" loading="lazy">
					<img src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/icons/ruki.png" alt="Дружный коллектив - ООО СтройСнаб" loading="lazy">
				</picture>
				<p>Дружный<span>коллектив</span></p>
			</div>
			<div class="choose__card">
				<picture>
					<source srcset="/wp-content/themes/spb178/imgcontent/themes/spb178/img/icons/year.webp" type="image/webp" loading="lazy">
					<img src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/icons/year.png" alt="Больше 10 лет на рынке - ООО СтройСнаб" loading="lazy">
				</picture>
				<p>Больше 10 лет на<span>рынке</span></p>
			</div>
			<div class="choose__card">
				<picture>
					<source srcset="/wp-content/themes/spb178/imgcontent/themes/spb178/img/icons/time.webp" type="image/webp" loading="lazy">
					<img src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/icons/time.png" alt="Работа вне зависимости от сезона - ООО СтройСнаб" loading="lazy">
				</picture>
				<p>Работа вне<span>зависимости от</span><span>сезона</span></p>
			</div>
		</div>
	</div>
</section>
<section id="contacts">
	<div class="contacts">
		<div class="contacts-h2">
			<h2>Контакты</h2>
		</div>
		<div class="container">
			<div class="contacts-column">
				<div class="row">
					<div class="contacts-column-phones">
						<p>Телефоны:</p>
						<div class="contacts-column-phones__links">
							<a href="tel:+78124545578">+7 (812) 454-55-78</a>
							<a href="tel:+79219476179">+7 (921) 947-61-79</a>
						</div>
					</div>
					<div class="contacts-column-time">
						<div class="contacts-column-time__p">
							<p>Время работы:</p>
						</div>
						<span>По будням 9:00 - 18:00</span>
					</div>
				</div>
				<div class="row">
					<div class="contacts-column-mail">
						<div class="contacts-column-mail__p">
							<p>Email:</p>
						</div>
						<a href="mailto:spb178.com@yandex.ru">spb178.com@yandex.ru</a>
					</div>
					<div class="contacts-column-address">
						<div class="contacts-column-address__p">
							<p>Наш адрес:</p>
						</div>
						<a href="https://yandex.ru/maps/-/CCUEUHVvsD">СПб, пр. Обуховской Обороны, 199</a>
					</div>
				</div>
			</div>
			<div id="contacts-right-column" class="contacts-right-column">
				<button id="vacancy-btn" aria-label="Закрыть окно вакансии">
					<img class="svg" src="/wp-content/themes/spb178/imgcontent/themes/spb178/img/icons/x-mark.svg" alt="Закрыть модальное окно">
				</button>
				<div class="contacts-right-column__h2">
					<h2>Присоединяйтесь к команде <span>специалистов!</span></h2>
				</div>
				<div class="forma" aria-label="Форма обратной связи присоединения к команде специалистов">
					<section>
						<input name="name" type="text" placeholder="Имя">
						<input name="phone" type="tel" placeholder="Телефон">
					</section>
					<button id="contacts-send" type="button" aria-haspopup="false" aria-label="Кнопка отправки запроса на присоединение к команде специалистов компании ООО СтройСнаб">
						<p>Присоединиться к команде</p>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="map-section">

	<div id="map" class="map">
		<div id="ymap_ctrl_display">
			<div>
				Чтобы изменить масштаб, прокручивайте карту, удерживая клавишу Ctrl.</div>
		</div>
	</div>
</section>
<script>
	ymaps.ready(init);
	async function init() {
		var myMap = new ymaps.Map('map', {
				center: [59.866974, 30.468195],
				zoom: 16,
				controls: []
			}),
			myPlacemark1 = new ymaps.Placemark([59.867878, 30.461632], {
				balloonContentHeader: "СтройСнаб",
				balloonContentBody: 'проспект Обуховской Обороны 199',
				balloonContentFooter: '<a href="tel:+7-812-454-55-78">+7 (812) 454-55-78</a> <a href="tel:+7-921-947-61-79">+7 (921) 947-61-79</a> <a href="mailto:spb178.com@yandex.ru">spb178.com@yandex.ru</a>',
				hintContent: 'проспект Обуховской Обороны 199'
			}, {
				iconLayout: 'default#image',
				iconImageClipRect: [
					[0, 0],
					[40, 52]
				],
				iconImageHref: '/img/icons/map-pointer.png',
				iconImageSize: [40, 52],
				iconImageOffset: [-16, -40],
			});
		myMap.behaviors.disable('scrollZoom');
		myMap.geoObjects.add(myPlacemark1);
		// CTRL
		var ctrlKey = false;
		var ctrlMessVisible = false;
		var timer;

		// Отслеживаем скролл мыши на карте, чтобы показывать уведомление
		myMap.events.add(['wheel', 'mousedown'], function(e) {
			if (e.get('type') == 'wheel') {
				if (!ctrlKey) { // Ctrl не нажат, показываем уведомление
					$('#ymap_ctrl_display').fadeIn(300);
					ctrlMessVisible = true;
					clearTimeout(timer); // Очищаем таймер, чтобы продолжать показывать уведомление
					timer = setTimeout(function() {
						$('#ymap_ctrl_display').fadeOut(300);
						ctrlMessVisible = false;
					}, 1500);
				} else { // Ctrl нажат, скрываем сообщение
					$('#ymap_ctrl_display').fadeOut(100);
				}
			}
			if (e.get('type') == 'mousedown' && ctrlMessVisible) { // Скрываем уведомление при клике на карте
				$('#ymap_ctrl_display').fadeOut(100);
			}
		});

		// Обрабатываем нажатие на Ctrl
		$(document).keydown(function(e) {
			if (e.which === 17 && !ctrlKey) { // Ctrl нажат: включаем масштабирование мышью
				ctrlKey = true;
				myMap.behaviors.enable('scrollZoom');
			}
		});
		$(document).keyup(function(e) { // Ctrl не нажат: выключаем масштабирование мышью
			if (e.which === 17) {
				ctrlKey = false;
				myMap.behaviors.disable('scrollZoom');
			}
		});
		// END CTRL
	}
</script>