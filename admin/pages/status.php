<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    // トップページ
    function rerebf_addpage_status() {
?>
    <div class="wrap" id="rerebf-status">
        <h1><?php _e('Status', 'rerebf');?> - Restaurant Reservations By FULFILLs</h1>
        <?php if($_GET['y'] && $_GET['m'] && $_GET['d']):?>
            <h2>予約管理（<?php echo wp_date(get_option('date_format'), strtotime(wp_date($_GET['y'].'-'.$_GET['m'].'-'.$_GET['d'])));?>）</h2>
            <?php rerebf_include('admin/pages/includes/status-eachday.php');?>
        <?php else:?>
            <h2>予約カレンダー</h2>
            <?php rerebf_include('admin/pages/includes/status-calender.php');?>
        <?php endif;?>
    </div>
<?php
}