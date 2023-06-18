<?php

class Ws_Ct_Shortcode
{

    public function __construct()
    {
        // main plugin shortcode for list widget
        add_shortcode('ct-tabs', array($this, 'ws_ct_shortcode'));
        wp_enqueue_style('ws-ct-bootstrap-cdn', PLUGIN_DIR_URL . 'assets/cdn/bootstrap5.css', array(), '1.0', 'all');
        wp_enqueue_style('ws-ct-tabs-style', PLUGIN_DIR_URL . 'assets/css/ws_ct_tabs.css', array(), '1.0', 'all');
        add_action('wp_enqueue_scripts',array($this,'wp_ct_enqueue_script'));
    }


   public function wp_ct_enqueue_script() {
        // Enqueue your script here
        wp_enqueue_script('ws-tabs-js', PLUGIN_DIR_URL . 'assets/js/ws_ct_tabs.js', '', '1.0', true);
    }
    public function ws_ct_shortcode($atts, $content = null)
    {
        $atts = shortcode_atts(
            array(
                'id' => '',
                'class' => '',
            ),
            $atts,
            'ct-tabs'
        );
        $id = $atts['id'];
        $mainTitle= get_post_meta($id,'main_title',true);

        $title1 = get_post_meta($id,'first_tab_title',true);

        $title2 = get_post_meta($id,'second_tab_title',true);
        $title3 = get_post_meta($id,'third_tab_title',true);

        $firstContent = get_post_meta($id,'ft_desc',true);
        $secondContent = get_post_meta($id,'st_content',true);
        $thirdContent = get_post_meta($id,'tt_content',true);
        $bgColor = get_post_meta($id,'back_color',true);

        $FontColor = get_post_meta($id,'font_color',true);

        




        $htmlOutput = '
        <body class="d-flex justify-content-center align-items-center bg-light">
        <div class="card p-3 shadow" style="max-width: 600px;color:'.$FontColor.';background-color:'.$bgColor.'">
            <h2 class="text-center p-3">'.$mainTitle.'</h2>
            <nav>
                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">'.$title1.'</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">'.$title2.'</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">'.$title3.'</button>
                </div>
            </nav>
            <div class="tab-content"  style="background-color:'.$bgColor.'" id="nav-tabContent">
                <div class="tab-pane" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <p>'.$firstContent.'</p>
                </div>
                <div class="tab-pane"  style="background-color:'.$bgColor.'" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <p>'.$secondContent.'</p>
                </div>
                <div class="tab-pane"  style="background-color:'.$bgColor.'" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <p>'.$thirdContent.'</p>
                </div>
            </div>
        </div>
    </body      
        ';
        
        return $htmlOutput;   
    }


 }
 $Ws_Ct_Shortcode = new Ws_Ct_Shortcode();

?>