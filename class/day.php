<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    // CREATE TABLE FOR Day Class
    if(is_admin()) {
        $GLOBALS['wpdb']->query("
            CREATE TABLE IF NOT EXISTS {$GLOBALS['wpdb']->prefix}rerebf_day(
                year int NOT NULL,
                month int NOT NULL,
                day int NOT NULL,
                is_open int,
                open_time int,
                close_time int,
                PRIMARY KEY(year, month, day)
            )
        ");
    }

    class rerebfDay {
        public $data = [
            'year' => 0,        // 年
            'month' => 0,       //月
            'day' => 0,         // 日
            'is_open' => 0, // 0（休業），1（開店）
            'open_time' => 0,   // 30分間隔（開店時間 1.5など）
            'close_time' => 24, // 30分間隔（閉店時間 1.5など）
        ];
        private $exist_flag = false; // false（存在しない），true（存在する）

        public function __construct($year = NULL, $month = NULL, $day = NULL) {
            $this->data['year'] = intval($year);
            $this->data['month'] = intval($month);
            $this->data['day'] = intval($day);
            $this->read();
        }

        private function read() {
            $new_data = $GLOBALS['wpdb']->get_row("SELECT * FROM {$GLOBALS['wpdb']->prefix}rerebf_day WHERE year={$this->data['year']} AND month={$this->data['month']} AND day={$this->data['day']} ", ARRAY_A);
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
            return $GLOBALS['wpdb']->replace("{$GLOBALS['wpdb']->prefix}rerebf_day", $this->data, '%d');
        }
    }

    