<?php
/*
Template Name: Услуги
*/
?>
<?php
get_header('home');
?>
	<div class="big-foto"><img alt="Услуги" style="margin-top: 180px;" class="big-foto"
							   src="<?php the_field('service_image'); ?>"></div>
	<div class="container">
        <?php if (have_rows('service_cards')): ?>
            <?php while (have_rows('service_cards')): the_row();
                $link = get_sub_field('service_link');
				$image = get_sub_field('service_img');
				$title = get_sub_field('service_title');
				$desc = get_sub_field('service_desc');
                ?>
				<a class="app" href="<?php echo $link; ?>">
					<div class="card-wrap cardHov">
						<div class="card">
							<div class="card-bg"
								 style="background-image: url('<?php echo $image; ?>');"></div>
							<div class="card-info">
								<h2 class="service__title" slot="header"><?php echo $title; ?></h2>
								<p class="service__desc" slot="content"><?php echo $desc; ?></p>
							</div>
						</div>
					</div>
				</a>
            <?php endwhile; ?>
        <?php endif; ?>
	</div>
<?php
get_footer('home');
?>