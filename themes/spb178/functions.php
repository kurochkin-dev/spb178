<?php

//add_action('wp_enqueue_scripts', 'wph_add_google_fonts');
//
//function wph_add_google_fonts()
//{
////    if (!is_admin()) {
//        wp_register_style('google-roboto-black', get_template_directory_uri() . '/assets/fonts/Roboto-Black.ttf', false, null);
//        wp_register_style('google-roboto-bold', get_template_directory_uri() . '/assets/fonts/Roboto-Bold.ttf', false, null);
//        wp_register_style('google-roboto-light', get_template_directory_uri() . '/assets/fonts/Roboto-Light.ttf', false, null);
//        wp_register_style('google-roboto-medium', get_template_directory_uri() . '/assets/fonts/Roboto-Medium.ttf', false, null);
//        wp_register_style('google-roboto-regular', get_template_directory_uri() . '/assets/fonts/Roboto-Regular.ttf', false, null);
//        wp_enqueue_style('google-roboto-black');
//        wp_enqueue_style('google-roboto-bold');
//        wp_enqueue_style('google-roboto-light');
//        wp_enqueue_style('google-roboto-medium');
//        wp_enqueue_style('google-roboto-regular');
//
////    }
//}


add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
    include_once('../../plugins/acf-field-video-master/acf-video.php');
}


add_action('wp_enqueue_scripts', 'include_custom_jquery');
function include_custom_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.4.1.min.js', array(), '3.4.1', false);
}

//add_action('wp_enqueue_scripts', 'include_swiper_scripts');
//function include_swiper_scripts()
//{
//    wp_enqueue_style('swiper_style', get_template_directory_uri() . '/api/swiper-bundle.min.css');
//    wp_enqueue_script('swiper_scripts', get_template_directory_uri() . '/api/swiper-bundle.min.js', array(), '6.3.5', true);
//}

//
//add_action('wp_enqueue_scripts', 'my_custom_styles');
//function my_custom_styles()
//{
//    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
//    wp_enqueue_style('contact', get_template_directory_uri() . '/assets/css/contact.css');
//    wp_enqueue_style('modal', get_template_directory_uri() . '/assets/css/modal.css');
//    wp_enqueue_style('uslugi', get_template_directory_uri() . '/assets/css/uslugi.css');
//    wp_enqueue_style('vacancii', get_template_directory_uri() . '/assets/css/vakancii.css', array(), null, true);
//    wp_enqueue_style('m_vacancii', get_template_directory_uri() . '/assets/css/m_vakancii.css', array(), null, true);
//    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.min.css');
//}

add_action('wp_enqueue_scripts', 'enqueue_load_fa');
function enqueue_load_fa()
{
    wp_enqueue_style('load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}


//add_action('wp_enqueue_scripts', 'my_scripts_method');
//function my_scripts_method()
//{
//    wp_enqueue_script('new_script_vue', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js', array(), '2.0.1', false);
//
//    wp_enqueue_script('new_script_two', get_template_directory_uri() . '/assets/js/m_main.js', array('jquery'), null, true);
//    wp_enqueue_script('new_script_three', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, false);
//    wp_enqueue_script('new_script_four', get_template_directory_uri() . '/assets/js/mask.js', array('jquery'), null, false);
//    wp_enqueue_script('new_script_five', get_template_directory_uri() . '/assets/js/middle-form.js', array('jquery'), null, false);
//    wp_enqueue_script('new_script_six', get_template_directory_uri() . '/assets/js/nat.js', array('jquery'), null, false);
//    wp_enqueue_script('new_script_seven', get_template_directory_uri() . '/assets/js/phone.js', array('jquery'), null, false);
//    wp_enqueue_script('new_script_eight', get_template_directory_uri() . '/assets/js/video.js', array('jquery'), null, false);
//    wp_enqueue_script('new_script_one', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), null, false);
//}

add_action('wp_enqueue_scripts', 'script_for_service');
function script_for_service()
{
    if (is_page_template('page-service.php')) {
        wp_enqueue_style('uslugi', get_template_directory_uri() . '/assets/css/uslugi.css', array(), null, 'all');
        wp_enqueue_style('modal', get_template_directory_uri() . '/assets/css/modal.css', array(), null, 'all');
        wp_enqueue_script('anime-lib', get_template_directory_uri() . '/assets/js/anime.min.js', array('jquery'), null, true);
        wp_enqueue_script('animate-fx', get_template_directory_uri() . '/assets/js/animatefx.js', array('jquery'), null, true);
        wp_enqueue_script('new_script_three', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
        wp_enqueue_script('new_script_one', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), null, true);

        wp_enqueue_style('style-name', get_stylesheet_uri());

    }
}

add_action('wp_enqueue_scripts', 'script_for_allowance');
function script_for_allowance()
{
    if (is_page_template('page-allowance.php')) {
        wp_enqueue_style('new_script_three', get_template_directory_uri() . '/assets/css/modal.css', array(), null, false);
        wp_enqueue_script('new_script_three', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, false);
        wp_enqueue_script('new_script_three', get_template_directory_uri() . '/assets/js/script.js', array('new_script_vue'), null, true);
        wp_enqueue_script('new_script_vue', 'https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.1/vue.min.js', array(), '2.0.1', false);
        wp_enqueue_script('new_script_one', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), null, false);
        wp_enqueue_script('new_script_seven', get_template_directory_uri() . '/assets/js/phone.js', array('jquery'), null, false);
        wp_enqueue_script('new_script_four', get_template_directory_uri() . '/assets/js/mask.js', array('jquery'), null, false);
    }

}

add_action('wp_enqueue_scripts', 'script_for_vacancies');
function script_for_vacancies()
{
    if (is_page_template('page-vacancies.php')) {
        wp_enqueue_style('vacancii', get_template_directory_uri() . '/assets/css/vacancies.css', array());
        wp_enqueue_style('vacancii-two', get_template_directory_uri() . '/assets/css/vakancii.css', array(), null, true);

    }
}

add_action('wp_enqueue_scripts', 'script_for_contacts');
function script_for_contacts()
{
    if (is_page_template('page-contacts.php')) {
        wp_enqueue_style('contact', get_template_directory_uri() . '/assets/css/contact.css', array());
        wp_enqueue_script('new_script_one', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'));

    }
}


add_action('wp_enqueue_scripts', 'theme_name_scripts');
function theme_name_scripts()
{
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('contact', get_template_directory_uri() . '/assets/css/contact.css');
    wp_enqueue_style('modal', get_template_directory_uri() . '/assets/css/modal.css');
    wp_enqueue_style('vacancii', get_template_directory_uri() . '/assets/css/vakancii.css', array(), null, true);
    wp_enqueue_style('m_vacancii', get_template_directory_uri() . '/assets/css/m_vakancii.css', array(), null, true);
    wp_enqueue_style('uslugi', get_template_directory_uri() . '/assets/css/uslugi.css', array(), null, false);
    wp_enqueue_style('app', get_template_directory_uri() . '/assets/css/app.min.css');


    wp_enqueue_script('new_script_one', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array('jquery'), null, true);
//    wp_enqueue_script('new_script_two', get_template_directory_uri() . '/assets/js/m_main.js', array('jquery'), null, true);

    wp_enqueue_script('new_script_four', get_template_directory_uri() . '/assets/js/mask.js', array('jquery'), null, true);
    wp_enqueue_script('new_script_five', get_template_directory_uri() . '/assets/js/middle-form.js', array('jquery'), null, false);
    wp_enqueue_script('new_script_six', get_template_directory_uri() . '/assets/js/nat.js', array('jquery'), null, true);
    wp_enqueue_script('new_script_seven', get_template_directory_uri() . '/assets/js/phone.js', array('jquery'), null, false);
    wp_enqueue_script('new_script_eight', get_template_directory_uri() . '/assets/js/video.js', array('jquery'), null, false);
    wp_enqueue_script('new_script_three', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('new_script_one', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), null, true);




    wp_enqueue_style('style-name', get_stylesheet_uri());
    wp_enqueue_style('media_queries', get_template_directory_uri() . '/assets/css/media.css', array(), null, 'all');

}
