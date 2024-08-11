<?php
/*
 * Plugin Name:       post qr code
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       qr-code
 * Domain Path:       /languages
 */
     
    function qrcode_load_textdomain(){
        load_plugin_textdomain('qr-code',false,dirname(__FILE__)."/languages");
    }
    // text domain add code
    add_action('plugins_loaded','qrcode_load_textdomain');
    
     function qrcode_hook_function($qr_code_arg){
       
        $curent_id=get_the_Id();
        $curent_post_title=get_the_title($curent_id);
        $curent_post_url=urlencode(get_the_permalink($curent_id));
        $curent_post_type=get_post_type($curent_id);


        $excluded_post_type=apply_filters('pqrc_excluded_post_type',array());
        if(in_array($curent_post_type,$excluded_post_type)){
            return $qr_code_arg;
        }
            // hight width
            $height=get_option('QR_Code_height');
            $width=get_option('QR_Code_width');
            // if($height){
            //     echo "done";
            // }
             $height=$height? $height:180;
             $width=$width? $width:180;
            $dimension=apply_filters('pqrc_prcode_dimension','{$width} × {height');
            $class_name_add=apply_filters('class_name_add',null);

        $img_source=sprintf('https://api.qrserver.com/v1/create-qr-code/?size=%s&ecc=L&qzone=1&data=%s',$dimension,$curent_post_url);
        $qr_code_arg .= sprintf('<img src="%s" alt="%s" class="%s">',$img_source,$height,$class_name_add);
        return $qr_code_arg;
     }
    add_filter('the_content','qrcode_hook_function');
?>