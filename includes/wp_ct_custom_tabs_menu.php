<?php
class Wp_Ct_Admin_menu
{

    public function __construct()
    {
        add_action('add_meta_boxes', array($this, 'ws_ct_register_meta_box'));
        add_action('admin_menu', array($this, 'Wp_Ct_Admin_menu_menu_page'));
        add_action('init', array($this, 'wp_ct_register_custom_post_type'));
        add_action('admin_init', array($this, 'ws_ct_settings'));
        require_once PLUGIN_DIR_PATH . 'admin/ccpw-settings.php';

        add_action( 'cmb2_admin_init', 'cmb2_ct_metaboxes' );
		// add_action('cmb2_save_options-page_fields', array($this, 'Settings_callback2'));

    }
    function ws_ct_register_meta_box()
    {
        add_meta_box('ws-ct-shortcode', 'Tabs Shortcode', array($this, 'ws_ct_shortcode_tabs'), 'wp_ct_custom_tabs', 'side', 'high');
    }
    // public function Settings_callback2()
    // {		
    //     $old_api = get_option('ccpw_old_api');			
         
    //       $api = get_option('ccpw_options');
    //     $api = (!isset($api['select_api']) && empty($api['select_api'])) ? "coin_gecko" : $api['select_api'];
    //     if ($api!=$old_api) {
    //        $db = new ccpw_database();
    //        // $db->truncate_table();
    //         $db->drop_table();
    //         //$db->create_table();
    //         delete_transient('ccpw-saved-coindata');
    //         delete_option('ccpw_data_save');
    //         $db->create_table();
    //         $api = get_option('ccpw_options');
    //         $api = (!isset($api['select_api']) && empty($api['select_api'])) ? "coin_gecko" : $api['select_api'];
    //         $api_obj = new CCPW_api_data();

    //         $data = ($api == "coin_gecko") ? $api_obj->ccpw_get_coin_gecko_data() : $api_obj->ccpw_get_coin_paprika_data();

    //         update_option('ccpw_old_api',$api);

    //     }

    // }
    function ws_ct_shortcode_tabs()
    {
        $id = get_the_ID();
        $dynamic_attr = '';
        esc_html_e('Paste this shortcode anywhere in Page/Post.', 'ws-custom-tabs');

        $element_type = get_post_meta($id, 'pp_type', true);
        $dynamic_attr .= "[ct-tabs id=\"{$id}\"";
        $dynamic_attr .= ']';
        ?>
        <input style="width:100%" onClick="this.select();" type="text" class="regular-small" name="my_meta_box_text"
            id="my_meta_box_text" value="<?php echo esc_attr(htmlentities($dynamic_attr)); ?>" readonly />
        <div>
        </div>
        <?php
    }
    public function Wp_Ct_Admin_menu_menu_page()
    {
        add_menu_page(
            'Wp_Ct_Admin_menu',
            'Custom Tabs',
            'manage_options',
            'Wp_Ct_Admin_menu',
            array($this, 'Wp_Ct_Admin_menu_menu_func'),
            'dashicons-format-image',
            20
        );
        add_submenu_page(
            'Wp_Ct_Admin_menu',
            'Add New Tabs',
            '↳ Add New Tabs',
            'manage_options',
            'post-new.php?post_type=wp_ct_custom_tabs',
            // array($this,'ws_ct_submenu_func'),
            false,
            17
        );
        add_submenu_page(
            'Wp_Ct_Admin_menu',
            'Add New Tabs',
            '↳ Edit Tabs',
            'manage_options',
            'edit.php?post_type=wp_ct_custom_tabs',
            false,
            17
        );
    }
    public function wp_ct_register_custom_post_type()
    {
        $args = array(
            'labels' => array(
                'name' => 'Custom Tabs',
                'singular_name' => 'Custom Post',
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'wp_ct_custom_tabs'),
            'publicly_queryable' => true,
            'show_in_menu' => 'Wp_Ct_Admin_menu',
            // Specify the menu slug of your admin menu page
            'supports' => array('title', 'thumbnail'), // Exclude 'editor' from supports
        );
        register_post_type('wp_ct_custom_tabs', $args);
    }
}

$wp_ct_admin_menu = new Wp_Ct_Admin_menu();


?>