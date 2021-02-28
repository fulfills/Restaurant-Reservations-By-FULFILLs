<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    // トップページ
    function rerebf_addpage_restaurant() {
        $op = get_option('rerebf_restaurant', []);
?>
        <div class="wrap" id="rerebf-restaurant">
            <h1><?php _e('Restaurant Setting', 'rerebf');?> - Restaurant Reservations By FULFILLs</h1>
            <form class="rerebf-store" rerebf="restaurant">
                <h3>営業時間【デフォルト】</h3>
                <table class="form-table">
                    <tr>
                        <th>営業開始時間【デフォルト】</th>
                        <td>
                            <select name="open_time" style="width: 100px;">
                                <?php for($i = 0; $i <= 48; $i++):?>
                                <option value="<?php echo ($i / 2);?>" <?php if($op['open_time'] == ($i / 2)) echo 'selected'?>>
                                    <?php echo sprintf('%02d', intval($i / 2)).':'.sprintf('%02d', ($i % 2)*30);?>
                                </option>
                                <?php endfor;?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>営業終了時間【デフォルト】</th>
                        <td>
                            <select name="close_time" style="width: 100px;">
                                <?php for($i = 0; $i <= 48; $i++):?>
                                <option value="<?php echo ($i / 2);?>" <?php if($op['close_time'] == ($i / 2)) echo 'selected'?>>
                                    <?php echo sprintf('%02d', intval($i / 2)).':'.sprintf('%02d', ($i % 2)*30);?>
                                </option>
                                <?php endfor;?>
                            </select>
                        </td>
                    </tr>
                </table>

                <input type="submit" class="button button-primary rerebf-store" value="変更を保存する">
            </form>
        </div>
<?php
    }