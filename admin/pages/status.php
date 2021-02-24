<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    // トップページ
    function rerebf_addpage_status() {
?>
        <form class="wrap rerebf-store" id="rerebf-status" rerebf="status">
            <h1><?php _e('Status', 'rerebf');?> - Restaurant Reservations By FULFILLs</h1>
            <h2>予約カレンダー</h2>
            <div class="calendar">
                <?php include 'includes/status-calender.php';?>
            </div>
        </form>
<?php
}