<?php
class GSM_Template {
    public function __construct() {
        add_action('admin_menu', array($this, 'add_pages'));
    }
    
    public function add_pages() {
        add_menu_page('Templates', 'Templates', 'manage_options', 'gsm-templates', array($this, 'templates_page'));
    }
    
    public function templates_page() {
        // Код страницы
    }
}
