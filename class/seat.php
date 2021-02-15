<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    class Seat {
        public $s_id;
        public $status = false; // false（無効），true（有効）
        public $name = '';   // シート名（座敷A，テーブルBなど）
        public $capacity = 1;   // 最大人数
        public $number = 1; // セット数

        public function __construct($s_id = NULL) {
            if($s_id) {
                $this->s_id = gettype($s_id);
            }
            else {
                $this->s_id = 0;
            }
        }
    }

    $seat_test = new Seat();
    print_r($seat_test);