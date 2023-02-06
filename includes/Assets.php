<?php


namespace VUE_WP;

class Assets{

    function __construct()
    {
        add_action( 'admin_enqueue_scripts', [$this,'load_assets'] );
        add_filter( 'script_loader_tag', [$this,'filter_script'], 10, 3 );
    }

    function load_assets($hook)
    {
	
        if( $hook != 'toplevel_page_vue-wp' ) 
        {
             return;
        }
        wp_enqueue_style( 'vue_wp_main_css',  VUE_WP_PLUGIN_DIR.'vuejs/dist/index.css' );
        wp_enqueue_script('vue_wp_main_js', VUE_WP_PLUGIN_DIR.'vuejs/dist/index.js' );   
    }

    
    function filter_script( $tag, $handle, $source ) 
    {

        if ( 'vue_wp_main_js' === $handle ) {
            $tag = '<script type="module" crossorigin src="' . $source . '" ></script>';
        }
         
        return $tag;
    }

    
}

    


?>