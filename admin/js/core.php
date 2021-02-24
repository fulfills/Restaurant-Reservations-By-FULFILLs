<?php 
	function rerebf_admin_add_js() {

        global $CFBF_MAIN_SLUG;

		if(preg_match('/restaurant-reservations-by-fulfills/', $_GET['page']))
			wp_enqueue_script( 'rerebf-store', plugins_url($CFBF_MAIN_SLUG.'/admin/js/store.js'), array(), date('His'), true);

	}
	add_action('admin_enqueue_scripts', 'rerebf_admin_add_js');

	function rerebf_admin_header_js() {
		echo '
			<script>
				var rerebf_save_ajax_url = "'.admin_url('admin-ajax.php', __FILE__).'";
				var rerebf_nonce = "'.wp_create_nonce('rerebf_ajax').'";
			</script>
		';
	}
	add_action( 'admin_head', 'rerebf_admin_header_js' );