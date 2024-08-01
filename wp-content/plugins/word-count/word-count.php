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


    function word_count_activation(){}
    register_activation_hook(__FILE__,'word_count_activation');
    function word_count_deactivation(){}
    register_deactivation_hook(__FILE__,'word_count_deactivation');
    function word_count_action($word_count_content){
       $id= get_the_Id($word_count_content);
        return $word_count_content . " " .  $id;
    }
    add_action('the_content','word_count_action');
 
?>