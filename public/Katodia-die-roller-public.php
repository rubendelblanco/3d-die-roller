<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    katodia_die_roller
 * @subpackage katodia_die_roller/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    katodia_die_roller
 * @subpackage katodia_die_roller/public
 * @author     Your Name <email@example.com>
 */
class Katodia_die_roller_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $katodia_die_roller    The ID of this plugin.
	 */
	private $katodia_die_roller;

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
	 * @param      string    $katodia_die_roller       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $katodia_die_roller, $version ) {

		$this->plugin_name = $katodia_die_roller;
		$this->version = $version;

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
		 * defined in katodia_die_roller_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The katodia_die_roller_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( 'style-die-roller', plugin_dir_url( __FILE__ ) . 'css/katodia-die-roller-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( 'three', plugin_dir_url( __FILE__ ) . 'js/libs/three.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( 'cannon', plugin_dir_url( __FILE__ ) . 'js/libs/cannon.min.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( 'teal', plugin_dir_url( __FILE__ ) . 'js/teal.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( 'roller-dice', plugin_dir_url( __FILE__ ) . 'js/katodia-die-roller-dice.js', array( 'jquery' ), $this->version, true );
		wp_enqueue_script( 'roller-dice-public', plugin_dir_url( __FILE__ ) . 'js/katodia-die-roller-public.js', array( 'jquery' ), $this->version, true );

	}

	public function display_die_roller(){
		$this->enqueue_scripts();
		$this->enqueue_styles();
		return '
		<div id="info_div" style="display: none">
        <div class="center_field">
            <span id="label"></span>
        </div>
        <div class="center_field">
            <div class="bottom_field">
                <span id="labelhelp">click to continue or tap and drag again</span>
            </div>
        </div>
    </div>
    <div id="selector_div" style="display: none">
        <div class="center_field">
            <div id="sethelp">
                choose your dice set by clicking the dices or by direct input of notation,<br/>
                tap and drag on free space of screen or hit throw button to roll
            </div>
        </div>
        <div class="center_field">
            <input type="text" id="set" value="4d6"></input><br/>
            <button id="clear">clear</button>
            <button style="margin-left: 0.6em" id="throw">throw</button>
        </div>
    </div>
    <div id="canvas"></div>';
	}

	/**
	 * Registers all shortcodes at once
	 *
	 * @return [type] [description]
	 */
	public function register_shortcodes() {
		add_shortcode( '3d_die_roller', array( $this, 'display_die_roller' ) );
	} // register_shortcodes()

}
