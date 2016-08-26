<?php
/**
 * Created by PhpStorm.
 * User: fayazk
 * Date: 26/8/16
 * Time: 12:49 PM
 */

function styleblog_enqueue_scripts(){
    wp_enqueue_style('bootstrap-css',STYLEBLOG_URI.'assets/css/bootstrap.css',array(),'3.3.4');

    wp_enqueue_style('fonts','//fonts.googleapis.com/css?family=Raleway:400,600,700');
    wp_enqueue_style('styleblog-css',STYLEBLOG_URI.'assets/css/style.css');

    wp_enqueue_script('bootstrap-js', STYLEBLOG_URI . 'assets/js/bootstrap.min.js', array('jquery'), '3.3.4');
}
add_action('wp_enqueue_scripts', 'styleblog_enqueue_scripts');
