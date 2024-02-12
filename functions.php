<?php
    // создаем вебхук, чтобы функция add_scripts_and_styles запускалась при старте. wp_enqueue_scripts - запуск при старте
    add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' ); 
    // создаем вебхук, чтобы подключать фичи после after_setup_theme
    add_action( 'after_setup_theme', 'add_features' ); 
    // создаем хук, чтобы выводить меню из админки
    add_action( 'after_setup_theme', 'add_menu' ); 
    function add_scripts_and_styles() {
        // Подключили спомощью стандартной функции вордпресса наш стайл.css (get_stylesheet_uri)
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    function add_features() {
        // добавили возможность из админки менять логотип
        add_theme_support( 'custom-logo', [
            'height'      => 50,
            'width'       => 100,
            'flex-width'  => false,
            'flex-height' => false,
            'header-text' => '',
        ] );
    }
    // функция, которая регистрирует меню из админки, теперь меню можно выбирать и добавлять из раздела "меню" в админ.панели
    function add_menu() {
        register_nav_menu( 'top', 'Главное меню сайта' );
        register_nav_menu( 'bottom', 'Политика конфиденциальности' );

    }
?>