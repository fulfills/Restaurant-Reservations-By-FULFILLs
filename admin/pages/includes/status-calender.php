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
    foreach([
        [strtotime('first day of this month'), strtotime('last day of this month')],
        [strtotime('first day of next month'), strtotime('last day of next month')],
        [strtotime('first day of 2 month'), strtotime('last day of 2 month')]
    ] as $rerebf_time):
?>
<h3><?php echo wp_date(get_option('date_format'), $rerebf_time[0]);?> - <?php echo wp_date(get_option('date_format'), $rerebf_time[1]);?></h3>
<div class="table">
    <?php foreach($day_label as $label):?>
    <div class="label"><?php echo $label;?></div>
    <?php endforeach;?>
    <?php for($i = 0; $i < intval(wp_date('w', $rerebf_time[0])); $i++) echo '<div></div>'; // 開始曜日の調整 ?>
    <?php for($day = 1; $day <= intval(wp_date('d', $rerebf_time[1])); $day++):?>
        <div class="active">
            <?php echo $day;?>
        </div>
    <?php endfor;?>
</div>
<?php endforeach;