<?php
    foreach($data_array as $ymd => $flag) {
        $ymd = intval($ymd);
        if(100000000 <= $ymd || $ymd < 10000000) continue;
        $y = intval($ymd / 10000);
        $md = intval($ymd % 10000);
        $m = intval($md / 100);
        $d = intval($md % 100);
        // Day Object を 作成
        $day = new rerebfDay($y, $m, $d);
        $day->data['is_open'] = ($flag === '1');    // 開店ステータスをTRUE
        $op_restaurant_setting = get_option('rerebf_restaurant', []);   // レストラン Setting
        $day->data['open_time'] = floatval($op_restaurant_setting['open_time']);
        $day->data['close_time'] = floatval($op_restaurant_setting['close_time']);
        $day->write();
    }