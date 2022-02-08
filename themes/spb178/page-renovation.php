<?php
/*
Template Name: Внутренние ремонтные работы
*/
?>
<?php get_header('home'); ?>

<div class="img-container-renovation">
	<h1 class="renovation__title">
        <?php the_field('renovation_title'); ?>
	</h1>
</div>
<div class="renovation-container">
	<div class="renovation-container__outer container__outer">
		<div class="div_dop_button">
			<img id="button1" class="dop_button button-room"
				 src="<?php bloginfo('template_directory'); ?>/images/rem_room.jpg" alt="Ремонт помещений">
			<img id="button2" class="dop_button button-plum"
				 src="<?php bloginfo('template_directory'); ?>/images/rem_paradnih.jpg" alt="Ремонт парадных">
			<img id="button3" class="dop_button button-cerem"
				 src="<?php bloginfo('template_directory'); ?>/images/santex.jpg" alt="Сантехнические работы">
		</div>
		<div id="full_dop" class="full_dop">
            <?php the_content(); ?>

            <?php
            $i = 1;
            if (have_rows('renovation_modals')): ?>

                <?php while (have_rows('renovation_modals')): the_row();
                    $title = get_sub_field('renovation_title');
                    $desc = get_sub_field('renovation_p');
                    $list = get_sub_field('renovation_list');
                    $descTwo = get_sub_field('renovation_p_two');
                    $btn = get_sub_field('renovation_btn');;
                    ?>
					<div id="div_info_<?php echo $i; ?>">

						<div class="div_dop_text">
							<p class="dop_zagolovok">
                                <?php echo $title; ?>
							</p>
							<p id="lh-15">
                                <?php echo $desc; ?>
							</p>
							<ul class="construction-list">
                                <?php echo $list; ?>
							</ul>
							<p id="lh-15">
                                <?php echo $descTwo; ?>
							</p>
							<button class="construction__btn"
									onclick="return location.href = '<?php echo $btn; ?>';">
								перейти в раздел
							</button>
						</div>
					</div>
                    <?php
                    $i++;
                endwhile; ?>
            <?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer('home'); ?>
