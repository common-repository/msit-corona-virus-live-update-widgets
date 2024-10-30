<?php
/**
 * @link              https://my-softit.com/
 * @since             3.1.1
 * @package           Msit_Coronavirus_Live_Update_Widgets
 *
 * @wordpress-plugin
 * Plugin Name:       MSIT Corona Virus Live Update Widgets
 * Plugin URI:        http://coronaapi.my-softit.com/coronaLiveUpdateWidget/
 * Description:       This MSIT Corona Virus Live Update Widgets is basically showing world and Country wise Corona Virus update Result. After install this plugin you will get a new "MSIT Corona Virus Live Update Widgets" widgets on your wordpress admin panel under appearance menu. Then just use it and enjoy free of cost your wordpress blog or website. You can add this widget on your wordpress sidebar or any widget area
 * Version:           3.1.1
 * Author:            Md.Omar Faruqe
 * Author URI:        https://my-softit.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       msit-coronavirus-live-update-widgets
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MSIT_CORONAVIRUS_LIVE_UPDATE_WIDGETS_VERSION', '3.1.1' );

add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'msit_coronavirus_plugin_action_links');

function msit_coronavirus_plugin_action_links($links)
{
        $links[] = '<a href="https://my-softit.com/donate/" target="_blank">' . __('Donate','msit-coronavirus-live-update-widgets') . '</a>';
        return $links;
}

// getdata from api
function Msit_Corona_Virus_updateWorld($perm = "cases"){
    $msitSource='https://api.focustech24.com/Globals/';
    $msitRequest = wp_remote_get($msitSource);
    $msitResult = wp_remote_retrieve_body( $msitRequest );
    $msitData = json_decode( $msitResult );
    return number_format($msitData->$perm);
}
// getdata from api
function Msit_Corona_Virus_update($perm = "cases", $country=""){
    $msitSource='https://api.focustech24.com/Country/'.$country;
    $msitRequest = wp_remote_get($msitSource);
    $msitResult = wp_remote_retrieve_body( $msitRequest );
    $msitData = json_decode( $msitResult );
    return number_format($msitData->$perm);
}

class Msit_Coronavirus_Live_Update_Widget extends WP_Widget {
	// class constructor
	public function __construct() {
		// widget actual processes
		$param=array(
			'description'=>'This MSIT Corona Virus Live Update Widgets',
			'name'=>'MSIT Corona Virus Live Update Widgets',
			'classname'=>'msit-corona-virus-live-update-widgets'
		);
		parent::__construct('Msit_Coronavirus_Live_Update_Widgets','',$param);
		add_action( 'wp_enqueue_scripts', array( $this, 'register_widget_styles' ) );
		
	}
	//output the widget content on the front-end
	function widget($args, $instance) {
		extract($args,EXTR_SKIP);
		//echo $before_widget;
		include(plugin_dir_path( __FILE__ ).'/views/msit_corona_virus_update.php');
		//echo $after_widget;
	}
	//output the option form field in admin Widgets screen
 	public function form( $instance ) {
	     // PART 1: Extract the data from the instance variable
	     $instance = wp_parse_args( (array) $instance);
	     $title = $instance['title'];
	     $country = $instance['country']; 
	     $background_color = $instance['background_color'];   
	     include(plugin_dir_path( __FILE__ ).'/views/msit_corona_virus_admin.php');
	  }
	//save options	  
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance = $new_instance;
		$instance['title'] = $new_instance['title'];
		$instance['country'] = $new_instance['country'];
		$instance['background_color'] = $new_instance['background_color'];
		return $instance;
	}
	//Register widget style
	function register_widget_styles(){
		//add widget style sheet 
		wp_enqueue_style( 'front-to-back-widget', plugins_url( '/css/msit-coronavirus-live-update-widgets-public.css', __FILE__ ) ); 
	}
	
}

add_action( 'load-widgets.php', 'msit_enqueue_load' );
function msit_enqueue_load() {    
    wp_enqueue_style('wp-color-picker');        
    wp_enqueue_script('wp-color-picker');    
}

add_action( 'widgets_init','msit_corona_virus' );
function msit_corona_virus(){
     register_widget( 'Msit_Coronavirus_Live_Update_Widget' );
}
?>