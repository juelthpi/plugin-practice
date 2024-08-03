<?php
/*
 * Plugin Name:       My Basics Word Count
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
 * Text Domain:       word-count
 * Domain Path:       /languages
 */
    function wordcount_activation_hook(){}
    register_activation_hook(__FILE__,'wordcount_activation_hook');
    function deactivation_hook(){}
    register_deactivation_hook(__FILE__,'wordcount_deactivation_hook');

    function wordcount_load_textdomain(){
        load_plugin_textdomain('word-count',false,dirname(__FILE__)."/languages");
    }
    // text domain add code
    add_action('plugins_loaded','wordcount_load_textdomain');
    function wordcount_count_word($content_argument){
        // html tag remove strip_tags
        $content_argument=strip_tags($content_argument);
        // word count ar jonno str_word_count()
        $word_count=str_word_count($content_argument);
        $label_text=__('Total Number of Words','word-count');
        $label_text=apply_filters('label_text_heading',$label_text);
        $content_argument .= sprintf('<h2> %s = %s </h2>', $label_text, $word_count);
        return $content_argument;
    }
    // content pawar jonno filter name the_content
    add_filter('the_content','wordcount_count_word');
    
     
 
?>