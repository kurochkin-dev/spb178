<?php
/*
Template Name: Высотные работы
*/
?>
<?php
get_header('home');
?>

<div class="img-container-hight">
	<h1 class="hight__title title">
		<?php the_field('hight_title'); ?>
	</h1>
</div>
<div class="hight-container">
	<div class="hight-container__outer container__outer">
		<div class="div_dop_button">
			<img id="button1" class="dop_button button-roof" src="<?php bloginfo('template_directory'); ?>/images/rem_krishi_dop4.jpg" alt="">
			<img id="button2" class="dop_button button-snow" src="<?php bloginfo('template_directory'); ?>/images/ochistka_ot_snega_dop4.jpg" alt="">
			<img id="button3" class="dop_button button-facade" src="<?php bloginfo('template_directory'); ?>/images/rem_fasad_dop4.jpg" alt="">
		</div>
		<div id="full_dop" class="full_dop">
			<?php the_content(); ?>

            <?php
            $i=1;
            if (have_rows('hight_modals')): ?>

                <?php while (have_rows('hight_modals')): the_row();
                    $title = get_sub_field('hight_title');
                    $desc = get_sub_field('hight_p');
                    $list = get_sub_field('hight_list');
					$descTwo = get_sub_field('hight_p_two');
                    $btn = get_sub_field('hight_btn');;
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

<?php
get_footer('home');
?>
