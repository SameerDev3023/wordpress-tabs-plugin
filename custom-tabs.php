<?php

/**
 * 
 */
/*
Plugin Name:Custom Tabs
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: This is not just a plugin, it symbolizes the hope and enthusiasm of an entire generation summed up in two words sung most famously by Louis Armstrong: Hello, Dolly. When activated you will randomly see a lyric from <cite>Hello, Dolly</cite> in the upper right of your admin screen on every page.
Author: Matt Mullenweg
Version: 1.7.2
Text Domain:ws-custom-tabs
Author URI: http://ma.tt/
*/
if (!defined('ABSPATH')) {
    exit;
}
if (!defined('PLUGIN_DIR_URL')) {
    define('PLUGIN_DIR_URL', plugin_dir_url(__FILE__));
}
if (!defined('PLUGIN_DIR_PATH')) {
    define('PLUGIN_DIR_PATH', plugin_dir_path(__FILE__));
}

final class Wp_Ct_custom_tabs
{
    private static $instance = null;

    public static function get_instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __construct()
    {
        add_action('plugins_loaded', array($this, 'Wp_ct_init_func'));
    }

    public function Wp_ct_init_func()
    {
        require_once PLUGIN_DIR_PATH . 'includes/wp_ct_custom_tabs_menu.php';
        require_once PLUGIN_DIR_PATH . 'includes/wp_ct_shortcode.php';
        require_once PLUGIN_DIR_PATH . 'admin/cmb2/init.php';
            require_once PLUGIN_DIR_PATH . 'admin/cmb2/cmb2-conditionals.php';
            if (!class_exists('PW_CMB2_Field_Select2')) {
                require_once PLUGIN_DIR_PATH . 'admin/cmb2/cmb-field-select2/cmb-field-select2.php';
            }

    }
}

Wp_Ct_custom_tabs::get_instance();
?>