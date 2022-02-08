<?php
/*
Template Name: Услуги
*/
?>

<?php get_header('home'); ?>

	<!--SERVICE-->
	<div class="big-photo">
		<img alt="Услуги" class="big-photo" src="<?php the_field('service_image'); ?>">
	</div>
	<div class="container">
        <?php query_posts('cat=7&order=ASC');
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
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
                <?php
            }
            wp_reset_query();
        } else {
            echo 'Записей нет';
        }
        ?>
	</div>

<?php get_footer('home'); ?>