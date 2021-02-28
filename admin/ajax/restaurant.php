<?php
    if( floatval($data_array['open_time']) >= floatval($data_array['close_time']) ) {
        echo '営業開始時間は営業終了時間より前に設定してください。';
        wp_die();
    }
    update_option('rerebf_restaurant', $data_array);