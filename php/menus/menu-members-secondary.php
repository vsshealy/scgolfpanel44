<?php 
    /**
     * php/menus/menu-members-secondary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2024.05.11)
     * @copyright 2024 (2024.05.11)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-10',
            'menu_id' => 'Members-Secondary'
        )
    );
?>