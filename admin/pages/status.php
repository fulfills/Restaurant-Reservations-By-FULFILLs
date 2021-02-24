<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    // トップページ
    function rerebf_addpage_status() {
        if($_POST) {
            foreach($_POST['isopen'] as $y => $val1) {
                foreach($val1 as $m => $val2) {
                    foreach($val2 as $d => $val) {
                        $day = new rerebfDay($y, $m, $d);
                        $day->data['is_open'] = ($val === '1');
                        $day->write();
                    }
                }
            }
        }
?>
        <form class="wrap" id="rerebf-status" method="post">
            <h1><?php _e('Status', 'rerebf');?> - Restaurant Reservations By FULFILLs</h1>
            <h2>予約カレンダー</h2>
            <div class="calendar">
                <?php include 'includes/status-calender.php';?>
            </div>
        </form>
<?php
}