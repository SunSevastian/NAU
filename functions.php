<?php 

// Подключаем стили
// function register_styles() {
// 	wp_register_style('bootstrap', get_template_directory_uri() .    '/libs/bootstrap/bootstrap-grid-3.3.1.min.css');
// 	wp_enqueue_style('bootstrap');

// 	wp_register_style('magnific', get_template_directory_uri() .     '/css/magnific-popup.css');
// 	wp_enqueue_style('magnific');

// 	wp_register_style('font-awesome', get_template_directory_uri() .     '/css/font-awesome.min.css');
// 	wp_enqueue_style('font-awesome');

// 	wp_register_style('fancybox', get_template_directory_uri() .     '/libs/fancybox/jquery.fancybox.css');
// 	wp_enqueue_style('fancybox');

// 	wp_register_style('carousel', get_template_directory_uri() .     '/libs/owl-carousel/owl.carousel.css');
// 	wp_enqueue_style('carousel');

// 	wp_register_style('countdown', get_template_directory_uri() .     '/libs/countdown/jquery.countdown.css');
// 	wp_enqueue_style('countdown');

// 	wp_register_style('style-main', get_template_directory_uri() .     '/style.css');
// 	wp_enqueue_style('style-main');

// 	wp_register_style('headhesive', get_template_directory_uri() .     '/css/headhesive.css');
// 	wp_enqueue_style('headhesive');

// 	wp_register_style('gamburger', get_template_directory_uri() .     '/css/gamburger.css');
// 	wp_enqueue_style('gamburger');

// 	wp_register_style('accordeon', get_template_directory_uri() .     '/css/acordeon.css');
// 	wp_enqueue_style('accordeon');
// }
// add_action ('wp_enqueue_scripts', 'register_styles');

// // Подключаем скрипты
// function load_my_script() {
// 	wp_deregister_script('jquery');
// 	wp_register_script('jquery', get_template_directory_uri() . '/libs/jquery/jquery-1.11.1.min.js');
// 	wp_enqueue_script('jquery');

// 	wp_register_script('acordeon', get_template_directory_uri() . '/js/accordddeon.js', array('jquery'), null, false);
// 	wp_enqueue_script('acordeon');

// 	wp_register_script('gamburger', get_template_directory_uri() . '/js/gamburger.js', array('jquery'), null, false);
// 	wp_enqueue_script('gamburger');

// 	wp_register_script('headhesive', get_template_directory_uri() . '/js/headhesive.min.js', array('jquery'), null, false);
// 	wp_enqueue_script('headhesive');

// 	wp_register_script('mousewheel', get_template_directory_uri() . '/libs/jquery-mousewheel/jquery.mousewheel.min.js', array('jquery'), null, false);
// 	wp_enqueue_script('mousewheel');

// 	wp_register_script('fancybox', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.pack.js', array('jquery'), null, false);
// 	wp_enqueue_script('fancybox');

// 	wp_register_script('waypoints', get_template_directory_uri() . '/libs/waypoints/waypoints-1.6.2.min.js', array('jquery'), null, false);
// 	wp_enqueue_script('waypoints');

// 	wp_register_script('scrollTo', get_template_directory_uri() . '/libs/scrollto/jquery.scrollTo.min.js', array('jquery'), null, false);
// 	wp_enqueue_script('scrollTo');

// 	wp_register_script('carousel', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.min.js', array('jquery'), null, false);
// 	wp_enqueue_script('carousel');

// 	wp_register_script('countdown', get_template_directory_uri() . '/libs/countdown/jquery.plugin.js', array('jquery'), null, false);
// 	wp_enqueue_script('countdown');

// 	wp_register_script('countdown_min', get_template_directory_uri() . '/libs/countdown/jquery.countdown.min.js', array('jquery'), null, false);
// 	wp_enqueue_script('countdown_min');

// 	wp_register_script('countdown_ru', get_template_directory_uri() . '/libs/countdown/jquery.countdown-ru.js', array('jquery'), null, false);
// 	wp_enqueue_script('countdown_ru');

// 	wp_register_script('navigation', get_template_directory_uri() . '/libs/landing-nav/navigation.js', array('jquery'), null, false);
// 	wp_enqueue_script('navigation');

// 	wp_register_script('magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), null, false);
// 	wp_enqueue_script('magnific');

// 	wp_register_script('my_common', get_template_directory_uri() . '/js/common.js', array('jquery'), null, false);
// 	wp_enqueue_script('my_common');
// }
// add_action ('wp_enqueue_scripts', 'load_my_script');

// Menu+
register_nav_menu ('menu', 'Main menu');
register_nav_menu ('aboutUs', 'Про Нас');
register_nav_menu ('Profession', 'Професії');
register_nav_menu ('Nav_virob_process', 'Навчально-виробничий процес');
register_nav_menu ('Vihovna_robota', 'Виховна робота');
register_nav_menu ('Metodichna_robota', 'Методична робота');
register_nav_menu ('Uchnivske_samovryaduvannya', 'Учнівське самоврядування');
register_nav_menu ('OurPartners', 'Наші партнери');
register_nav_menu ('WeSocial', 'Ми в соцмережах');
register_nav_menu ('OtherLinks', 'Корисні посилання');

// miniatura
add_theme_support('post-thumbnails');
set_post_thumbnail_size('290','350', true);
