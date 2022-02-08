<?php

//удаление тегов <br> в формах contacts form 7
add_filter('wpcf7_autop_or_not', '__return_false');

//Регистрация кастомных полей для видео
add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
    include_once('../../plugins/acf-field-video-master/acf-video.php');
}

//Добавление font-awesome
add_action('wp_enqueue_scripts', 'enqueue_load_fa');
function enqueue_load_fa()
{
    wp_enqueue_style('load-fa', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
}

//Регистрация стилей и скриптов для определенных страниц определенные стили и скрипты, иначе все посыпется
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
        wp_enqueue_script('new_script_one', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), null, false);
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

    wp_enqueue_script('new_script_eight', get_template_directory_uri() . '/assets/js/video.js', array('jquery'), null, false);
    wp_enqueue_script('new_script_three', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
    wp_enqueue_script('new_script_one', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), null, true);

    wp_enqueue_style('style-name', get_stylesheet_uri());
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style('media_queries', get_template_directory_uri() . '/assets/css/media.css', array(), null, 'all');

}

//Вывод кастомных полей для header-home.php и footer-home.php в админку через acfpro
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Общие настройки темы',
        'menu_title' => 'Настройки темы',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Настройки шапки темы',
        'menu_title' => 'Шапка',
        'parent_slug' => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Настройки подвала темы',
        'menu_title' => 'Подвал',
        'parent_slug' => 'theme-general-settings',
    ));
}

//Регистрация меню
register_nav_menus(array(
    'menu' => 'Основное меню'
));


