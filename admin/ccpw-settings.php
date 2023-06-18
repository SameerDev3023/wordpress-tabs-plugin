<?php


/**
 * Define the metabox and field configurations.
 */
function cmb2_ct_metaboxes()
{

    $cmb2 = new_cmb2_box( array(
        'id'            => 'live_preview1',
        'title'         => __( 'Tabs Live Preview', 'cmb2' ),
        'object_types'  => array( 'wp_ct_custom_tabs'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ) );
    $cmb = new_cmb2_box(array(
        'id' => 'generate_shortcode1',
        'title' => __('Tabs  Settings', 'cmb2'),
        'object_types' => array('wp_ct_custom_tabs'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

  
    
    $cmb->add_field(array(
        'name' => 'Head Title<span style="color:red;">*</span>',
        'id' => 'main_title',
        'type' => 'text',
        'default' => 'Enter Your Head Title',
    )); 

    $cmb->add_field(array(
        'name' => 'Tabs First Content<span style="color:red;">*</span>',
        'id' => 'first_tab_title',
        'type' => 'text',
        'default' => 'Enter your First Tab Title',
    )); 

    $cmb->add_field(array(
        'name' => 'First Tab Description',
        'desc' => 'Enter Your First Tab Content',
        'id' => 'ft_desc',
        'type' => 'textarea',

    ));
    
    $cmb->add_field(array(
        'name' => 'Tabs Second Title<span style="color:red;">*</span>',
        'id' => 'second_tab_title',
        'type' => 'text',
        'default' => 'Enter your Second Tab Title',
    )); 

    $cmb->add_field(array(
        'name' => 'Second Tab Content',
        'desc' => 'Enter Your Second Tab Content',
        'id' => 'st_content',
        'type' => 'textarea',

    ));
    $cmb->add_field(array(
        'name' => 'Tabs Third Title<span style="color:red;">*</span>',
        'id' => 'third_tab_title',
        'type' => 'text',
        'default' => 'Enter your Third Tab Title',
    )); 
    $cmb->add_field(array(
        'name' => 'Third Tab Content',
        'desc' => 'Enter Your Third Tab Content',
        'id' => 'tt_content',
        'type' => 'textarea',

    ));
   
    $cmb->add_field(array(
        'name' => 'Background Color',
        'desc' => 'Select background color',
        'id' => 'back_color',
        'type' => 'colorpicker',
        'default' => '#eee',
        'attributes' => array(
            'data-conditional-id' => 'type',
            'data-conditional-value' => json_encode(array('multi-currency-tab', 'list-widget', 'ticker')),
        ),
    ));

    $cmb->add_field(array(
        'name' => 'Font Color',
        'desc' => 'Select font color',
        'id' => 'font_color',
        'type' => 'colorpicker',
        'default' => '#000',
        'attributes' => array(
            'data-conditional-id' => 'type',
            'data-conditional-value' => json_encode(array('multi-currency-tab', 'list-widget', 'ticker')),
        ),
    ));

   

    
    $cmb2->add_field( array(
        'name' => '',
        'desc' =>display_live_preview(),
        'type' => 'title',
        'id'   => 'live_preview'
    ) );

}


