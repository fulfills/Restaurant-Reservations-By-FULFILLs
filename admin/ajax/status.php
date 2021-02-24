<?php
    foreach($data_array as $ymd => $flag) {
        $ymd = intval($ymd);
        if(100000000 <= $ymd || $ymd < 10000000) continue;
        $y = intval($ymd / 10000);
        $md = intval($ymd % 10000);
        $m = intval($md / 100);
        $d = intval($md % 100);
        $day = new rerebfDay($y, $m, $d);
        $day->data['is_open'] = ($flag === '1');
        $day->write();
    }