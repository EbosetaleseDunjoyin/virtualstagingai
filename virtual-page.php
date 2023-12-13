<?php
/*
 * Plugin Name:       Virtual Stageing AI
 * Description:       Handle the basics with this plugin.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Wordpress
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       virtual-staging-ai
 */




if (!defined('ABSPATH')) {
    // die("This is the wrong path");
    exit;
}

if(!defined("VIRTUAL_PATH")){
    define("VIRTUAL_PATH", plugin_dir_path(__FILE__));
}
if(!defined("VIRTUAL_ASSETS")){
    define("VIRTUAL_ASSETS", plugin_dir_path(__FILE__).'/assets');
}
if(!defined("VIRTUAL_ASSETS_URL")){
    define("VIRTUAL_ASSETS_URL", plugin_dir_url(__FILE__).'/assets');
}

if (!class_exists('VirtualStage')) {
    class VirtualStage
    {

        public function __construct()
        {
            require_once( VIRTUAL_PATH. '/vendor/autoload.php');

            $this->setup();

        }

        public function setup()
        {
            require_once(VIRTUAL_PATH . '/includes/utilites.php');
            require_once(VIRTUAL_PATH . '/includes/options-page.php');
            require_once(VIRTUAL_PATH . '/includes/shortcodes.php');
            require_once(VIRTUAL_PATH . '/includes/api.php');

            add_action('wp_enqueue_scripts', [$this, "register_styles_scripts"]);
        }

        public function register_styles_scripts(){
            $nonce = wp_create_nonce('wp_rest');
            wp_enqueue_style('bootstrap_css', "//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css", [], 1.1, "all");
            wp_enqueue_style('bootstrap_icons', "//cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css", [], 1.1, "all");
            wp_enqueue_style('plugin_style_index', VIRTUAL_ASSETS_URL . '/style.css', [], filemtime(VIRTUAL_ASSETS . '/style.css'), 'all');
            wp_enqueue_style('simply_style', "//cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.css", [], 1.1, "all");
            wp_enqueue_style('magnific_style', VIRTUAL_ASSETS_URL . '/magnific.css', [], filemtime(VIRTUAL_ASSETS . '/magnific.css'), 'all');

            wp_enqueue_script('jquery_cdn', "//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js", [], 1.1, true);
            wp_enqueue_script('bootstrap_pooper', "//cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js", [], 1.1, true);
            wp_enqueue_script('bootstrap_js', "//cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js", [], 1.1, true);
            wp_enqueue_script('simply_js', "//cdn.jsdelivr.net/npm/simple-notify@0.5.5/dist/simple-notify.min.js", [], 1.1, true);
            wp_enqueue_script('theme_script_magnific_min', VIRTUAL_ASSETS_URL . '/magnific.min.js', ['jquery_cdn'], filemtime(VIRTUAL_ASSETS . '/magnific.min.js'), true);
            wp_enqueue_script('plugin_script_form', VIRTUAL_ASSETS_URL . '/main.js', ['jquery_cdn'], filemtime(VIRTUAL_ASSETS . '/main.js'), true);
            wp_localize_script('plugin_script_form', 'wpApiSettings', array(
                'root' => esc_url_raw(rest_url()),
                'nonce' => $nonce,
                'user' => wp_get_current_user()
            ));
        
        }



    }

    new VirtualStage;
}