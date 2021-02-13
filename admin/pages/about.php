<?php
    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

    // トップページ
    function rerebf_addpage_about() {
?>
        <div class="wrap">
            <h1>Restaurant Reservations By FULFILLs</h1>
            <h2>■<?php _e('About this plugin', 'rerebf');?></h2>
            <p>
                <?php _e('This plugin is developed by FULFILLs, an organization of volunteers.', 'rerebf');?><br>
                <a href="https://fulfills.jp">https://fulfills.jp</a>
            </p>
        </div>
<?php
    }