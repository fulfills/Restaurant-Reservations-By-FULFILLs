<?php 
	function rerebf_admin_add_stylesheet() {
		// wp_enqueue_style( 'wp-color-picker' );
		// wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/fonts/css/all.css', array(), date('His'));
		// if(preg_match('/ftheme_themes/', $_GET['page']))
		// 	wp_enqueue_style( 'admin-all', get_template_directory_uri().'/admin/css/all.css', array(), date('His'));
        global $CFBF_MAIN_SLUG;
		if($_GET['page'] === 'restaurant-reservations-by-fulfills-status')
			wp_enqueue_style( 'admin-design', plugins_url($CFBF_MAIN_SLUG.'/admin/css/status.css'), array(), date('His'));
	}
	add_action('admin_enqueue_scripts', 'rerebf_admin_add_stylesheet');

	// function my_header_stylesheet() {
	// 	global $fulfills_fonts;
	// 	if(!is_single()) {
	// 		$op = fulfills_option_read('text');
	// 		echo '
	// 			<style>
	// 			main {
	// 				background-image: url("'.wp_get_attachment_url($op['bgimage']).'");
	// 				background-repeat: '.($op['bgimage-roop'] ? 'no-repeat' : 'repeat').';
	// 				background-size: '.($op['bgimage-is'] ? 'cover' : 'unset').';
	// 				background-color: '.($op['bgcolor']).';
	// 				font-family: '.$fulfills_fonts[$op['text-font']].';
	// 				font-size: '.$op['text-size'].'px;
	// 				color: '.$op['text-color'].';
	// 				text-align: '.$op['text-align'].';
	// 				line-height: '.$op['text-line'].';		
	// 			}

	// 			main * {
	// 				border-color: '.$op['bcolor'].';
	// 			}

	// 			main h2 {
	// 				font-family: '.$fulfills_fonts[$op['h2-font']].';
	// 				font-size: '.$op['h2-size'].'px;
	// 				color: '.$op['h2-color'].';
	// 				text-align: '.$op['h2-align'].';
	// 				line-height: '.$op['h2-line'].';
	// 			}

	// 			main h3 {
	// 				font-family: '.$fulfills_fonts[$op['h3-font']].';
	// 				font-size: '.$op['h3-size'].'px;
	// 				color: '.$op['h3-color'].';
	// 				text-align: '.$op['h3-align'].';
	// 				line-height: '.$op['h3-line'].';
	// 			}
	// 			</style>
	// 		';
	// 	}
	// 	else {
	// 		$op = fulfills_option_read('entry');
	// 		echo '
	// 			<style>
	// 			main {
	// 				background-image: url("'.wp_get_attachment_url($op['bgimage']).'");
	// 				background-repeat: '.($op['bgimage-roop'] ? 'no-repeat' : 'repeat').';
	// 				background-size: '.($op['bgimage-size'] ? 'cover' : 'unset').';
	// 				background-color: '.($op['bgcolor']).';
	// 				font-family: '.$fulfills_fonts[$op['content-font']].';
	// 				font-size: '.$op['content-size'].'px;
	// 				color: '.$op['content-color'].';
	// 				text-align: '.$op['content-position'].';
	// 				// line-height: '.$op['text-line'].';	
	// 			}

	// 			main * {
	// 				border-color: '.$op['border-color'].';
	// 			}

	// 			main h2 {
	// 				font-family: '.$fulfills_fonts[$op['h2-font']].';
	// 				font-size: '.$op['h2-size'].'px;
	// 				color: '.$op['h2-color'].';
	// 				text-align: '.$op['h2-position'].';
	// 				// line-height: '.$op['h2-line'].';
	// 			}

	// 			main h3 {
	// 				font-family: '.$fulfills_fonts[$op['h3-font']].';
	// 				font-size: '.$op['h3-size'].'px;
	// 				color: '.$op['h3-color'].';
	// 				text-align: '.$op['h3-position'].';
	// 				// line-height: '.$op['h3-line'].';
	// 			}
	// 			</style>
	// 		';
	// 	}
	// 	echo stripcslashes(fulfills_option_read('font_family')['head']?:'');
	// }
	// add_action( 'wp_head', 'my_header_stylesheet');

	// function admin_header_stylesheet() {
	// 	$op = fulfills_option_read('text');
	// 	global $fulfills_fonts, $post_type;
	// 	echo '
	// 		<style>
	// 		body * {
	// 			border-color: '.$op['bcolor'].';
	// 		}
	// 		</style>
	// 	';
	// 	if($_GET['page'] === 'ftheme_themes_design' || $_GET['page'] === 'ftheme_themes_button')
	// 	echo '
	// 		<style>
	// 			div.design-preview, a.design-float {
	// 				background-image: url("'.wp_get_attachment_url($op['bgimage']).'");
	// 				background-repeat: '.($op['bgimage-roop'] ? 'no-repeat' : 'repeat').';
	// 				background-size: '.($op['bgimage-is'] ? 'cover' : 'unset').';
	// 				background-color: '.($op['bgcolor']).';
	// 				font-family: '.$fulfills_fonts[$op['text-font']].';
	// 				font-size: '.$op['text-size'].'px;
	// 				color: '.$op['text-color'].';
	// 				text-align: '.$op['text-align'].';
	// 				line-height: '.$op['text-line'].';		
	// 			}
	// 		</style>
	// 	';
	// 	echo stripcslashes(fulfills_option_read('font_family')['head']?:'');
	// }
	// add_action( 'admin_head', 'admin_header_stylesheet' );

	// // 「投稿」 編集ページ CSS適用
	// add_editor_style(get_stylesheet_directory_uri()."/css/tinymce.php?ver=".date('Hms'));