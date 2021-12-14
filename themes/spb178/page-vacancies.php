<?php
/*
Template Name: Вакансии
*/
?>
<?php
get_header('home');
?>
	<section class="about" id="about">
		<div class="container-about">
			<div class="about__h1">
				<h1 class="about__title"><?php the_field('vacancy_main_title'); ?></h1>
			</div>
			<div class="about__video">
				<video autoplay muted loop poster="<?php echo get_template_directory_uri(); ?>/img/video.jpg">
					<source src="<?php echo get_template_directory_uri(); ?>/img/video.webm" type="video/webm">
					<source src="<?php echo get_template_directory_uri(); ?>/img/video.mp4" type="video/mp4">
				</video>
				<div class="about__description">
					<p><?php the_field('vacancy_main_desc'); ?></p>

					<p><?php the_field('vacancy_first_subtitle'); ?></p>
					<ul>
                  		<?php the_field('vacancy_list'); ?>
					</ul>
			</div>
		</div>
		<div class="about__description-text">
			<?php the_field('vacancy_comp_desc'); ?>
		</div>
		</div>
	</section>
	<section class="vacancy">
		<div class="container-vacancy">
			<div class="vacancy__h2">
				<h2 class="vacancy__title"><?php the_field('vacancy_title'); ?></h2>
			</div>
			<p class="vacancy__subtitle"><?php the_field('vacancy_basic_desc'); ?></p>
			<div id="slider" class="vacancy-slider">

                <?php if (have_rows('vacancy_items')): ?>
                    <?php while (have_rows('vacancy_items')): the_row();
                        $item = get_sub_field('vacancy_item');
                        $desc = get_sub_field('vacancy_desc');
                        ?>
						<div class="vacancy-slide">
							<div class="round">
								<button class="vacancy__btn" aria-haspopup="true">
									откликнуться
								</button>
							</div>
							<img class="vacancy__img" src="<?php echo $item; ?>"
								 alt="Вакансия кровельщика компании ООО СтройСнаб" loading="lazy">
							<p><?php echo $desc ?></p>
						</div>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</section>
	<section class="choose">
		<div class="choose__wrap">
			<div class="choose__h2">
				<h2 class="choose__title"><?php the_field('vacancy_choose_title'); ?></h2>
			</div>
			<div class="choose-container">

                <?php if (have_rows('vacancy_benefits')): ?>
                    <?php while (have_rows('vacancy_benefits')): the_row();
                        $image = get_sub_field('vacancy_benefit');
                        $desc = get_sub_field('vacancy_benefit_desc');
                        ?>
						<div class="choose__card">
							<img src="<?php echo $image; ?>"
								 alt="Стабильная заработная плата без задержек - ООО СтройСнаб" loading="lazy">
							<p><?php echo $desc; ?></p>
						</div>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</section>
	<section id="contacts">
		<div class="contacts">
			<div class="contacts-h2">
				<h2 class="contacts__title"><?php the_field('vacancy_contacts_title'); ?></h2>
			</div>
			<div class="container-contacts">
				<div class="contacts-column">
					<div class="contacts-phone__wrap">
						<div class="phone-number__wrap">
							<p class="phone__title">Телефоны:</p>
							<a class="phone-number" href="tel:+78124545578"><?php the_field('vacancy_contacts_tel_one'); ?></a>
							<a class="phone-number" href="tel:+79219476179"><?php the_field('vacancy_contacts_tel_two'); ?></a>
						</div>
						<div class="time__wrap">
							<p class="time__title">Время работы:</p>
							<p class="time-hours"><?php the_field('vacancy_work_hours'); ?></p>
						</div>
					</div>
					<div class="contacts__wrap">
						<div class="contacts-mail__wrap">
							<div class="mail__wrap">
								<p class="mail__title">Email:</p>
								<a class="mail__address" href="mailto:spb178.com@yandex.ru"><?php the_field('vacancy_work_mail'); ?></a>
							</div>
						</div>
						<div class="contacts-address__wrap">
							<div class="address__wrap">
								<p class="address__title">Наш адрес:</p>
								<a class="address__map" href="https://yandex.ru/maps/-/CCUEUHVvsD"><?php the_field('vacancy_work_address'); ?></a>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div id="contacts-right-column" class="contacts-right-column">
				<button id="vacancy-btn" aria-label="Закрыть окно вакансии">
					<img class="svg" src="<?php echo get_template_directory_uri(); ?>/img/icons/x-mark.svg"
						 alt="Закрыть модальное окно">
				</button>
				<div class="contacts-right-column__h2">
					<h2>Присоединяйтесь к команде<br> <span>специалистов!</span></h2>
				</div>
                <?php echo do_shortcode('[contact-form-7 id="47" title="Форма вакансий"]'); ?>
			</div>
		</div>
	</section>
	<section class="map-section" id="map-section">
		<div id="map" class="map">
			<div id="ymap_ctrl_display">
				<div>
					Чтобы изменить масштаб, прокручивайте карту, удерживая клавишу Ctrl.
				</div>
			</div>
		</div>
	</section>
	<script>
        ymaps.ready(init);

        async function init() {
            var myMap = new ymaps.Map('map', {
                    center: [59.867995, 30.461287],
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
                    iconImageHref: '<?php echo get_template_directory_uri(); ?>/img/icons/map-pointer.png',
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
            myMap.events.add(['wheel', 'mousedown'], function (e) {
                if (e.get('type') == 'wheel') {
                    if (!ctrlKey) { // Ctrl не нажат, показываем уведомление
                        $('#ymap_ctrl_display').fadeIn(300);
                        ctrlMessVisible = true;
                        clearTimeout(timer); // Очищаем таймер, чтобы продолжать показывать уведомление
                        timer = setTimeout(function () {
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
            $(document).keydown(function (e) {
                if (e.which === 17 && !ctrlKey) { // Ctrl нажат: включаем масштабирование мышью
                    ctrlKey = true;
                    myMap.behaviors.enable('scrollZoom');
                }
            });
            $(document).keyup(function (e) { // Ctrl не нажат: выключаем масштабирование мышью
                if (e.which === 17) {
                    ctrlKey = false;
                    myMap.behaviors.disable('scrollZoom');
                }
            });
            // END CTRL
        }
	</script>
<?php
get_footer('home');
?>