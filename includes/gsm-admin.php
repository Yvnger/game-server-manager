<?php
class GSM_Admin {
    public function __construct() {
        add_action('admin_menu', array($this, 'add_menu_pages'));
    }

    public function add_menu_pages() {
        // Здесь добавьте страницы меню в админ-панель, используя функцию `add_menu_page()`
    }

    public function display_servers_list_page() {
        // Здесь отобразите страницу со списком серверов, используя функции и данные из gsm-functions.php
    }

    public function display_server_add_page() {
        // Здесь отобразите страницу добавления сервера и обработайте отправку формы
    }

    public function display_server_edit_page() {
        // Здесь отобразите страницу редактирования сервера и обработайте отправку формы
    }

    public function display_server_view_page() {
        // Здесь отобразите страницу просмотра сервера с подробной информацией
    }
}
