<?php
/**
 * Theme Setup
 * @package styleblog
 * @subpackage setup
 * @link http://www.fayazk.com
 * @author Fayaz K <allshore.php44@gmail.com>
 */

function styleblog_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
     */
    add_theme_support('post-thumbnails');

    //  Let's Register some menu locations.
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'styleblog'),
    ));

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ));
}

add_action('after_setup_theme', 'styleblog_setup');

/**
 * Register some Widget Areas
 */
function styleblog_sidebars()
{
    register_sidebar(array(
        'name' => __('Primary Sidebar', 'styleblog'),
        'id' => 'sidebar-primary',
        'description' => __('Add widgets here to appear in your sidebar.', 'styleblog'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));

}

add_action('widgets_init', 'styleblog_sidebars');
