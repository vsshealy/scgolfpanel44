<?php 
    /**
     * functions.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2024.05.11)
     * @copyright 2024 (2024.05.11)
    **/
?>

<?php 

    if (! defined('ABSPATH')) {
        exit;
    }

    define('HELLO_ELEMENTOR_CHILD_VERSION', '2.0.0');

    // LOAD THEME STYLESHEET AND SCRIPTS
        add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

        function my_theme_enqueue_styles() {
            $parent_style = 'hello-elementor';

            wp_enqueue_style($parent_style, get_template_directory_uri().'/style.min.css');
            wp_enqueue_style('child-style',
                get_stylesheet_directory_uri().'/style.min.css',
                array($parent_style),
                wp_get_theme() -> get('Version')
            );
        }

    // REGISTER MENUS
        $hook_result = apply_filters_deprecated('elementor_hello_theme_register_menus', [true], '2.0', 'hello_elementor_register_menus');

        if (apply_filters('hello_elementor_register_menus', $hook_result)) {
            register_nav_menus(['menu-3' => __('Header-Primary', 'scgolfpanel')]);
            register_nav_menus(['menu-4' => __('Header-Secondary', 'scgolfpanel')]);
            register_nav_menus(['menu-5' => __('Header-Mobile', 'scgolfpanel')]);
            register_nav_menus(['menu-6' => __('Footer-Primary', 'scgolfpanel')]);
            register_nav_menus(['menu-7' => __('Footer-Secondary', 'scgolfpanel')]);
            register_nav_menus(['menu-8' => __('Footer-Mobile', 'scgolfpanel')]);
            register_nav_menus(['menu-9' => __('Members-Primary', 'scgolfpanel')]);
            register_nav_menus(['menu-10' => __('Members-Secondary', 'scgolfpanel')]);
            register_nav_menus(['menu-11' => __('Members-Mobile', 'scgolfpanel')]);
        }

?>