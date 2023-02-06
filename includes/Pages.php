<?php

namespace VUE_WP;

class Pages{

    function __construct()
    {
     add_action( 'admin_menu', [$this,'vue_wp_register_admin_page'] );
    }


    function vue_wp_register_admin_page() 
    {
        add_menu_page(
            __( 'vue-wp', 'vue-wp' ),
            __( 'vue-wp', 'vuw-wp' ),
            'manage_options',
            'vue-wp',
            [$this,'vue_wp_admin_page_contents'],
            'dashicons-schedule',
            3
        );
    }




    function vue_wp_admin_page_contents() 
    {
        ?>
            <div id="app"></div>
        <?php
    
    }
}

    


?>