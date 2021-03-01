<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    // CREATE TABLE FOR Day Class
    if(is_admin()) {
        $GLOBALS['wpdb']->query("
            CREATE TABLE IF NOT EXISTS {$GLOBALS['wpdb']->prefix}rerebf_seat(
                s_id int NOT NULL,
                status int,
                name varchar,
                capacity int,
                number int,
                PRIMARY KEY(s_id)
            )
        ");
    }

    class rerebfSeat {
        public $data = [
            's_id' => 0,
            'status' => 0,    // false（無効），true（有効）
            'name' => '',   // シート名（座敷A，テーブルBなど）
            'capacity' => 0,    // 最大人数
            'number' => 0,  // セット数
        ];

        private $exist_flag = false; // false（存在しない），true（存在する）

        public function __construct($s_id = NULL) {
            if($s_id) $this->s_id = intval($s_id);
            else $this->s_id = 0;
            $this->read();
        }

        private function read() {
            $new_data = $GLOBALS['wpdb']->get_row("SELECT * FROM {$GLOBALS['wpdb']->prefix}rerebf_seat WHERE s_id={$this->data['s_id']}", ARRAY_A);
            if(!$new_data || is_null($new_data)) {
                $this->exist_flag = false;
            }
            else {
                $this->data = $new_data;
                $this->exist_flag = true;
            }
        }

        public function write() {
            $this->exist_flag = true;
            return $GLOBALS['wpdb']->replace("{$GLOBALS['wpdb']->prefix}rerebf_seat", $this->data, ['%d','%d','%s','%d','%d']);
        }

        public function get($data_name) {
            return intval($this->data[$data_name]);
        }
    }

    $test_seat = new rerebfSeat();
    var_dump($test_seat);