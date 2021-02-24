<?php
    function rerebf_ajax_to_store(){
		check_ajax_referer('rerebf_ajax','secure');
		header('Content-type: text/plain; charset=UTF-8');
        $data_array = json_decode(stripslashes($_REQUEST['data']), true);
		switch($_REQUEST['type']) {
			case 'status':
				include 'status.php';
				break;
			default:
				;
		}
		wp_die();
	}
	add_action('wp_ajax_rerebf_ajax','rerebf_ajax_to_store');
	// add_action('wp_ajax_nopriv_rerebf_ajax','rerebf_ajax_to_store');