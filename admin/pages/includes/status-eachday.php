<?php
    // パラメータチェック
    $y = intval($_GET['y']);
    $m = intval($_GET['m']);
    $d = intval($_GET['d']);
    $day = new rerebfDay($y, $m, $d);
    if($day->data['is_open']):
        // var_dump($day);
?>

<form class="calendar rerebf-store" rerebf="eachday">
    <h3>営業時間</h3>
    <?php // ECHO ?>
    <table class="form-table">
        <tr>
            <th>営業開始時間</th>
            <td>
                <select name="open" style="width: 100px;">
                    <?php for($i = 0; $i <= 48; $i++):?>
                    <option value="<?php echo ($i / 2);?>" <?php if($day->get('open_time') == ($i / 2)) echo 'selected'?>>
                        <?php echo sprintf('%02d', intval($i / 2)).':'.sprintf('%02d', ($i % 2)*30);?>
                    </option>
                    <?php endfor;?>
                </select>
            </td>
        </tr>
        <tr>
            <th>営業終了時間</th>
            <td>
                <select name="close" style="width: 100px;">
                    <?php for($i = 0; $i <= 48; $i++):?>
                    <option value="<?php echo ($i / 2);?>" <?php if($day->get('close_time') == ($i / 2)) echo 'selected'?>>
                        <?php echo sprintf('%02d', intval($i / 2)).':'.sprintf('%02d', ($i % 2)*30);?>
                    </option>
                    <?php endfor;?>
                </select>
            </td>
        </tr>
    </table>
    <?php // ECHO ?>
    <p class="description">営業時間を変更するには、現在承認されている予約をキャンセルしてください。</p>
    <table class="form-table">
        <tr>
            <th>営業開始時間</th>
            <td>
                <?php $val = sprintf('%02d', intval($day->get('open_time'))).':'.sprintf('%02d', (($day->get('open_time') * 10) % 10) * 6);?>
                <input type="text" value="<?php echo $val;?>" style="width: 100px;" readonly>
            </td>
        </tr>
        <tr>
            <th>営業終了時間</th>
            <td>
                <?php $val = sprintf('%02d', intval($day->get('close_time'))).':'.sprintf('%02d', (($day->get('close_time') * 10) % 10) * 6);?>
                <input type="text" value="<?php echo $val;?>" style="width: 100px;" readonly>
            </td>
        </tr>
    </table>

    <input type="submit" class="button button-primary rerebf-store" value="変更を保存する">
</form>

<?php else:?>

<div>エラーです</div>

<?php endif;