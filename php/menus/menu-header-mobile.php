<?php 
    /**
     * php/menus/menu-header-mobile.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2024.05.11)
     * @copyright 2024 (2024.05.11)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-5',
            'menu_id' => 'Header-Mobile'
        )
    );
?>