<?php
function gsm_deactivate_plugin() {
    // Если нужно удалить таблицу при деактивации плагина, раскомментируйте следующий код
    /*
    global $wpdb;
    $table_name = $wpdb->prefix . 'gsm_servers';
    $sql = "DROP TABLE IF EXISTS $table_name;";
    $wpdb->query($sql);
    */
}
