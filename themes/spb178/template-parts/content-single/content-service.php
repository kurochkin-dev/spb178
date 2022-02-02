<?php
//get_header('home');
//?>

<div class="<?php the_field('class_image'); ?>">
	<h1 class="construction__title title"><?php the_title(); ?></h1>
</div>
<div class="<?php the_field('class_image_corner'); ?>">
	<div class="construction-container__outer container__outer">
		<div class="div_dop_button">
            <?php
            $i = 1;
            if (have_rows('buttons')): ?>
                <?php while (have_rows('buttons')): the_row();
                    $imgClass = get_sub_field('button_class');
                    $buttonImg = get_sub_field('button_img')
                    ?>
					<img id="button<?php echo $i; ?>" class="dop_button <?php echo $imgClass; ?>"
						 src="<?php echo $buttonImg; ?>" alt="Работы">

                    <?php
                    $i++;
                endwhile; ?>
            <?php endif; ?>

		</div>
		<div id="full_dop" class="full_dop">
            <?php the_content(); ?>

            <?php
            $i = 1;
            if (have_rows('construction_modals')): ?>

                <?php while (have_rows('construction_modals')): the_row();
//                        $id = get_sub_field('construction_id');
                    $title = get_sub_field('construction_title');
                    $desc = get_sub_field('construction_p');
                    $list = get_sub_field('construction_list');
                    $btn = get_sub_field('construction_btn');;
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