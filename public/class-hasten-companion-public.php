<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       pridethemes.com
 * @since      1.0.0
 *
 * @package    Hasten_Companion
 * @subpackage Hasten_Companion/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Hasten_Companion
 * @subpackage Hasten_Companion/public
 * @author     Pride Themes <info@pridethemes.com>
 */
class Hasten_Companion_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
        add_action( 'admin_notices', array( $this, 'admin_notice' ), 4 );

    }

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hasten_Companion_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hasten_Companion_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/hasten-companion-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Hasten_Companion_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Hasten_Companion_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
        $my_theme = wp_get_theme();
        $theme = $my_theme->get( 'TextDomain' );
        if($theme == 'hasten-lite') {
            $hasten_companion_options = hasten_lite_companion_get_theme_options();
            $map_api = $hasten_companion_options['contact_map_api'];

            if ($map_api != '') {
                $key = '?key=' . $map_api;
            } else {
                $key = '';
            }
            $key = str_replace(' ', '', $key);

            wp_enqueue_script('hasten-companion-google-map-js', 'https://maps.googleapis.com/maps/api/js' . $key . '&sensor=false', array(), '', true);

        }
        wp_enqueue_script( 'hasten-companion-public-js', plugin_dir_url( __FILE__ ) . 'js/hasten-companion-public.js', array( 'jquery' ), $this->version, true );

	}

    function admin_notice() {
        $theme  = wp_get_theme();
        $parent = wp_get_theme()->get( 'TextDomain' );
        $child = is_child_theme();

        if($parent == 'hasten-lite' && $child == true)
        {
            echo '';
        }
        elseif ( ($parent != 'hasten-lite' ) )
        {
            echo '<div class="error">';
            echo 	'<p>' . __('Please note that the <strong>Hasten Companion</strong> plugin is meant to be used only with the Hasten Lite Theme.</p>', 'hasten-companion');
            echo '</div>';
        }

    }
}
