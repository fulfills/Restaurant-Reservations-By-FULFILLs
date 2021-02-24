<?php 
    $day_label = [
        __('Sunday'),
        __('Monday'),
        __('Tuesday'),
        __('Wednesday'),
        __('Thursday'),
        __('Friday'),
        __('Saturday'),
    ];
    $ymd_this = wp_date('Y-m');  // 今月の始め
    $ymd_next = wp_date('Y-m', strtotime("$ymd_this + 1 month"));  // 来月の始め
    $ymd_nextnext = wp_date('Y-m', strtotime("$ymd_this + 2 month"));  // 再来月の始め
    foreach([
        [strtotime($ymd_this), strtotime("last day of $ymd_this")],
        [strtotime($ymd_next), strtotime("last day of $ymd_next")],
        [strtotime($ymd_nextnext), strtotime("last day of $ymd_nextnext")]
    ] as $rerebf_time):
    $y = intval(wp_date('Y', $rerebf_time[0])); // 年（変数）
    $m = intval(wp_date('m', $rerebf_time[0])); // 月（変数）
    $d_l = intval(wp_date('d', $rerebf_time[1]));   // 最終日（日）
    // echo sprintf('%04d', $y).sprintf('%02d', $m).sprintf('%02d', $d);
?>
<h3><?php echo wp_date(get_option('date_format'), $rerebf_time[0]);?> - <?php echo wp_date(get_option('date_format'), $rerebf_time[1]);?></h3>
<div class="table">
    <?php foreach($day_label as $label):?>
    <div class="label"><?php echo $label;?></div>
    <?php endforeach;?>
    <?php for($i = 0; $i < intval(wp_date('w', $rerebf_time[0])); $i++) echo '<div class="blank"></div>'; // 開始曜日の調整 ?>
    <?php for($d = 1; $d <= $d_l; $d++):?>
        <?php $day = new rerebfDay($y, $m, $d);?>
        <div class="active <?php echo ((wp_date('Ym', $rerebf_time[0]) === wp_date('Ym') && $d == intval(wp_date('d'))) ? 'today' : '');?>">
            <div class="date"><?php echo $d;?></div>
            <label class="is_open">
                <?php if(!$day->data['is_open']):?>
                    <input type="checkbox" name="<?php echo "isopen[{$y}][{$m}][{$d}]";?>" value="1">
                <?php endif;?>
                <span class="open">OPEN</span>
                <span class="close">CLOSED</span>
            </label>
            <?php var_dump($day);?>
        </div>
    <?php endfor;?>
    <?php for($i = intval(wp_date('w', $rerebf_time[1])) + 1; $i < 7; $i++) echo '<div class="blank"></div>'; // 終了曜日の調整 ?>
</div>
<?php endforeach;?>
<input type="submit" value="送信する">