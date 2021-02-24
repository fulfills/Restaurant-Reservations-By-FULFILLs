<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    // トップページ
    function rerebf_addpage_status() {
?>
    <div class="wrap" id="rerebf-status">
        <h1><?php _e('Status', 'rerebf');?> - Restaurant Reservations By FULFILLs</h1>
        <h2>予約カレンダー</h2>
        <?php include 'includes/status-calender.php';?>
    </div>
<?php
}