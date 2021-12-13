<?php
/*
Template Name: Галерея
*/
?>
<?php
get_header('home');
?>

<div class="ceo-message__wrap">
	<h1 class="ceo-message__title"><?php the_field('gallery_main_title'); ?></h1>
	<div class="ceo-message__btn-wrap">
		<button id="ceo-message__btn" class="ceo-message__btn">Обращение Генерального Директора</button>
	</div>
</div>
<?php
include 'ceo-message.php';
?>
<div class="container-line__wrap">
	<div class="gallery__line"></div>
</div>
<div class="container-gallery">
	<div class="gallery__wrap">
		<img src="<?php echo the_field('gallery_img_one'); ?>"
			 alt="Устройство отмостки дома"
			 class="gallery-image">
		<div class="gallery-info__block gallery-info__block--left gallery-info__blind">
			<h2 class="gallery__title"><?php the_field('gallery_subtitle_one'); ?></h2>
			<a href="/service/blindarea" class="gallery__btn">Подробнее</a>
		</div>
	</div>
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_one'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_one')): ?>
                    <?php while (have_rows('gallery_images_one')): the_row();
                        $link = get_sub_field('gallery_image_one');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Устройство отмостки дома Ул. Софьи Ковалевской д. 16 к. 5"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_two'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_two')): ?>
                    <?php while (have_rows('gallery_images_two')): the_row();
                        $link = get_sub_field('gallery_image_two');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Устройство отмостки дома Металлистов д. 99"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="container-line__wrap container-line__wrap--mg">
	<div class="gallery__line"></div>
</div>
<div id="porch" class="container-gallery">
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_three'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_three')): ?>
                    <?php while (have_rows('gallery_images_three')): the_row();
                        $link = get_sub_field('gallery_image_three');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Устройство отмостки дома Металлистов д. 99"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_four'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_four')): ?>
                    <?php while (have_rows('gallery_images_four')): the_row();
                        $link = get_sub_field('gallery_image_four');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Ремонт крыльца Пр. Авиаконструкторов д. 38 к. 1"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="gallery__wrap">
		<img src="<?php the_field('gallery_img_two'); ?>" alt=""
			 class="gallery-image">
		<div class="gallery-info__block gallery-info__block--right gallery-info__porch">
			<h2 class="gallery__title"><?php the_field('gallery_subtitle_two'); ?></h2>
			<a href="service/porch/" class="gallery__btn">Подробнее</a>
		</div>
	</div>
</div>
<div class="container-gallery">
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_five'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_five')): ?>
                    <?php while (have_rows('gallery_images_five')): the_row();
                        $link = get_sub_field('gallery_image_five');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Ремонт крыльца Ул. Кораблестроителей д. 46 к. 1"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_six'); ?>
			</p>
			<div class="gallery-inner">

                <?php if (have_rows('gallery_images_six')): ?>
                    <?php while (have_rows('gallery_images_six')): the_row();
                        $link = get_sub_field('gallery_image_six');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Ремонт крыльца ул. Лени Голикова 27 кор. 3"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_seven'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_seven')): ?>
                    <?php while (have_rows('gallery_images_seven')): the_row();
                        $link = get_sub_field('gallery_image_seven');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Ремонт крыльца Дивенская ул. д. 5"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_eight'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_eight')): ?>
                    <?php while (have_rows('gallery_images_eight')): the_row();
                        $link = get_sub_field('gallery_image_eight');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Ремонт крыльца Железноводская ул. 62"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="container-gallery">
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_nine'); ?>
			</p>
			<div class="gallery-inner">

                <?php if (have_rows('gallery_images_nine')): ?>
                    <?php while (have_rows('gallery_images_nine')): the_row();
                        $link = get_sub_field('gallery_image_nine');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Ремонт крыльца Пр. Обуховской Обороны д. 199"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_ten'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_ten')): ?>
                    <?php while (have_rows('gallery_images_ten')): the_row();
                        $link = get_sub_field('gallery_image_ten');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Ремонт крыльца Комендантский пр. 9"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_eleven'); ?>
			</p>
			<div class="gallery-inner">

                <?php if (have_rows('gallery_images_eleven')): ?>
                    <?php while (have_rows('gallery_images_eleven')): the_row();
                        $link = get_sub_field('gallery_image_eleven');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Ремонт крыльца Пр. Маршала Блюхера"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_twelve'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_twelve')): ?>
                    <?php while (have_rows('gallery_images_twelve')): the_row();
                        $link = get_sub_field('gallery_image_twelve');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Ремонт крыльца 3-я линия В.О. д. 52-54"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_thirteen'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_thirteen')): ?>
                    <?php while (have_rows('gallery_images_thirteen')): the_row();
                        $link = get_sub_field('gallery_image_thirteen');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Ремонт крыльца Пр. Науки д. 41"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div id="room" class="container-line__wrap container-line__wrap--mg">
	<div class="gallery__line"></div>
</div>
<div class="container-gallery">
	<div class="gallery__wrap">
		<img src="<?php the_field('gallery_img_three'); ?>"
			 alt=""
			 class="gallery-image">
		<div class="gallery-info__block gallery-info__block--left gallery-info__room">
			<h2 class="gallery__title"><?php the_field('gallery_subtitle_three'); ?></h2>
			<a href="service/room/" class="gallery__btn">Подробнее</a>
		</div>
	</div>
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_fourteen'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_fourteen')): ?>
                    <?php while (have_rows('gallery_images_fourteen')): the_row();
                        $link = get_sub_field('gallery_image_fourteen');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Внутренний ремонт помещений пр. Обуховской Обороны д.199"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_fifteen'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_fifteen')): ?>
                    <?php while (have_rows('gallery_images_fifteen')): the_row();
                        $link = get_sub_field('gallery_image_fifteen');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Внутренний ремонт помещений Ул. Омская д. 17"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="container-gallery">
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_sixteen'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_sixteen')): ?>
                    <?php while (have_rows('gallery_images_sixteen')): the_row();
                        $link = get_sub_field('gallery_image_sixteen');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Внутренний ремонт помещений ул. Чапаева д. 30"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_seventeen'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_seventeen')): ?>
                    <?php while (have_rows('gallery_images_seventeen')): the_row();
                        $link = get_sub_field('gallery_image_seventeen');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Внутренний ремонт помещений Пр. Стачек д. 105 кор. 5"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_eighteen'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_eighteen')): ?>
                    <?php while (have_rows('gallery_images_eighteen')): the_row();
                        $link = get_sub_field('gallery_image_eighteen');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Внутренний ремонт помещений Ул. Фучика, д.2, ТРЦ РИО, павильон La Mia Borsa"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="container-line__wrap container-line__wrap--mg">
	<div class="gallery__line"></div>
</div>
<div id="plumb" class="container-gallery">
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_nineteen'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_nineteen')): ?>
                    <?php while (have_rows('gallery_images_nineteen')): the_row();
                        $link = get_sub_field('gallery_image_nineteen');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Сантехнические работы ул. Бухарестская д. 35 к. 1"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_twenty'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_twenty')): ?>
                    <?php while (have_rows('gallery_images_twenty')): the_row();
                        $link = get_sub_field('gallery_image_twenty');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Сантехнические работы ул. Фрунзе д. 18"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="gallery__wrap">
		<img src="<?php the_field('gallery_img_four'); ?>" alt="Сантехнические работы" class="gallery-image">
		<div class="gallery-info__block gallery-info__block--right gallery-info__plumb">
			<h2 class="gallery__title"><?php the_field('gallery_subtitle_four'); ?></h2>
			<a href="service/plumbing/" class="gallery__btn">Подробнее</a>
		</div>
	</div>
</div>
<div class="container-line__wrap container-line__wrap--mg">
	<div class="gallery__line"></div>
</div>
<div id="facade" class="container-gallery">
	<div class="gallery__wrap">
		<img src="<?php the_field('gallery_img_five'); ?>" alt="Фасадные работы" class="gallery-image">
		<div class="gallery-info__block gallery-info__block--left gallery-info__facade">
			<h2 class="gallery__title"><?php the_field('gallery_subtitle_five'); ?></h2>
			<a href="service/facade/" class="gallery__btn">Подробнее</a>
		</div>
	</div>
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_twenty-one'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_twenty-one')): ?>
                    <?php while (have_rows('gallery_images_twenty-one')): the_row();
                        $link = get_sub_field('gallery_image_twenty-one');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Фасадные работы Кондратьевский пр. д. 38"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_twenty-two'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_twenty-two')): ?>
                    <?php while (have_rows('gallery_images_twenty-two')): the_row();
                        $link = get_sub_field('gallery_image_twenty-two');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Фасадные работы Петропавловская улица д. 4"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div class="container-gallery">
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_twenty-three'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_twenty-three')): ?>
                    <?php while (have_rows('gallery_images_twenty-three')): the_row();
                        $link = get_sub_field('gallery_image_twenty-three');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Фасадные работы пр. Обуховской обороны д. 199"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_twenty-four'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_twenty-four')): ?>
                    <?php while (have_rows('gallery_images_twenty-four')): the_row();
                        $link = get_sub_field('gallery_image_twenty-four');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Фасадные работы Энергетиков д. 21 (герметизация швов)"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
                <?php the_field('address_twenty-five'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_twenty-five')): ?>
                    <?php while (have_rows('gallery_images_twenty-five')): the_row();
                        $link = get_sub_field('gallery_image_twenty-five');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Фасадные работы пр. Химиков д. 28"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
</div>
<div id="snow" class="container-line__wrap container-line__wrap--mg">
	<div class="gallery__line"></div>
</div>
<div class="container-gallery">
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_twenty-six'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_twenty-six')): ?>
                    <?php while (have_rows('gallery_images_twenty-six')): the_row();
                        $link = get_sub_field('gallery_image_twenty-six');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Очистка кровли от снега и наледи ул. Авангардная д. 16"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_twenty-seven'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_twenty-seven')): ?>
                    <?php while (have_rows('gallery_images_twenty-seven')): the_row();
                        $link = get_sub_field('gallery_image_twenty-seven');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Очистка кровли от снега и наледи Басков переулок д. 8"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="gallery__wrap">
		<img src="<?php the_field('gallery_img_six'); ?>" alt="Очистка кровли от снега и наледи"
			 class="gallery-image">
		<div class="gallery-info__block gallery-info__block--right gallery-info__snow">
			<h2 class="gallery__title"><?php the_field('gallery_subtitle_six'); ?></h2>
			<a href="service/snow/" class="gallery__btn">Подробнее</a>
		</div>
	</div>
</div>
<div class="container-gallery">
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_twenty-eight'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_twenty-eight')): ?>
                    <?php while (have_rows('gallery_images_twenty-eight')): the_row();
                        $link = get_sub_field('gallery_image_twenty-eight');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Очистка кровли от снега и наледи Гатчинская улица"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
                <?php the_field('address_twenty-nine'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_twenty-nine')): ?>
                    <?php while (have_rows('gallery_images_twenty-nine')): the_row();
                        $link = get_sub_field('gallery_image_twenty-nine');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Очистка кровли от снега и наледи Пеньковая улица"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--left">
			<p class="gallery__address">
				<?php the_field('address_thirty'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_thirty')): ?>
                    <?php while (have_rows('gallery_images_thirty')): the_row();
                        $link = get_sub_field('gallery_image_thirty');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Очистка кровли от снега и наледи Рабфаковский переулок"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
	<div class="gallery__wrap">
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
				<?php the_field('address_thirty-one'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_thirty-one')): ?>
                    <?php while (have_rows('gallery_images_thirty-one')): the_row();
                        $link = get_sub_field('gallery_image_thirty-one');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Очистка кровли от снега и наледи Малая Морская, Гороховая 9"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
		<div class="gallery-outer gallery-outer--right">
			<p class="gallery__address">
				<?php the_field('address_thirty-two'); ?>
			</p>
			<div class="gallery-inner">
                <?php if (have_rows('gallery_images_thirty-two')): ?>
                    <?php while (have_rows('gallery_images_thirty-two')): the_row();
                        $link = get_sub_field('gallery_image_thirty-two');
                        ?>
						<a href="<?php echo $link; ?>" class="gallery-link" rel="lightbox">
							<img class="gallery-imgmin" src="<?php echo $link; ?>"
								 alt="Очистка кровли от снега и наледи ул. Бухарестская д. 35"/>
						</a>
                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php
get_footer('home');
?>
