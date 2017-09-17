<?php
    function add_admin_page() {
        // adding settings menu
        add_menu_page( 'Code Theme Options', 'Code', 'manage_options', 'code', 'code_theme_create_page', 'dashicons-editor-quote', 110 );
        // adding settings submenu 
        add_submenu_page( 'code', 'Code Theme Options', 'Settings', 'manage_options', 'code', 'code_theme_create_page' );
        add_submenu_page( 'code', 'Code Settings', 'CSS', 'manage_options', 'code_css', 'code_theme_settings_page' );
        // adding settings
        add_action( 'admin_init', 'add_code_custom_settings' );
    }

    add_action( 'admin_menu', 'add_admin_page' );

    function add_code_custom_settings() {
        register_setting( 'code-settings-group', 'first_name' );
        add_settings_section( 'code-sidebar-options', 'Sidebar Options', 'code_sidebar_options', 'code' );
        add_settings_field( 'sidebar-name', 'First Name', 'code_sidebar_name', 'code', 'code-sidebar-options' );
    }

    function code_sidebar_options() {

    }

    function code_sidebar_name() {
        $firstname = esc_attr( get_option( 'first_name' ) );
        echo '<input type="text" name="first_name" value="' . $firstname . '" placeholder="First Name"/>';
    } 

    function code_theme_create_page() {
        require_once get_template_directory().'/inc/templates/code-admin.php';
    }

    function code_theme_settings_page() {

    }