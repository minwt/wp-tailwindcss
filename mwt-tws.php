<?php
/*
Plugin Name: MWT-Tailwindcss
Description: 將Tailwind CSS元件加入佈景主題中，讓在WordPress中也可使用Twailwindcss
Version: 1.0
Author: Minggo Chou
Author URI: https://www.minwt.com/
*/

add_action('wp_head', 'mwt_add_tws');
function mwt_add_tws() {
  $twd_config  = get_option('twd_config');
  $twd_style  = get_option('twd_style');
    
  echo "<!-- Twilwind CSS CDN-->
        <script src='https://cdn.tailwindcss.com'></script>
        <script>
          tailwind.config = {
            theme: {
              extend: {
                ".$twd_config."}
            }
          }
        </script>
        <style type='text/tailwindcss'>
          @layer components {".$twd_style."}
        </style>";
}
function mwt_tws_actions() { 
	if (current_user_can('manage_options'))  {
		add_theme_page("Tailwind CSS", "Tailwind CSS初始化", 'manage_options', "get-tws-set", "mwt_tws_setting");	  
  }
} 

function mwt_tws_setting(){
	include('get-tws-set.php'); 
}

add_action('admin_menu', 'mwt_tws_actions'); 