<?php 
	function rerebf_admin_add_js() {
		
        global $CFBF_MAIN_SLUG;
		if(preg_match('/restaurant-reservations-by-fulfills/', $_GET['page']))
			wp_enqueue_script( 'admin-design', plugins_url($CFBF_MAIN_SLUG.'/admin/js/store.js'), array(), date('His'));
			
	}
	add_action('admin_enqueue_scripts', 'rerebf_admin_add_js');