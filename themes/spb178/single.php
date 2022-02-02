<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package spb178
 */

get_header();
?>

<?php

if (is_single()) {
    $cats = get_the_category();
    $cat = $cats[0];
} else {
    $cat = get_category(get_query_var('cat'));
}
$cat_slug = $cat->slug;

while (have_posts()) :
    the_post();

    ?>

    <?php
    if ($cat_slug == "service") {
        get_template_part('template-parts/content-single/content', 'service');
    } else {
        echo 'Записей нет';
    }


endwhile;
?>

<?php
get_footer();
