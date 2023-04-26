<?php
/*
Plugin Name: Game Server Manager
Description: A plugin for managing game servers in WordPress.
Version: 1.0
Author: yvnger.
*/

// Выход, если файл вызывается напрямую
if (!defined('ABSPATH')) {
    exit;
}

// Подключение всех нужных файлов
require_once plugin_dir_path(__FILE__) . 'includes/gsm-activator.php';
require_once plugin_dir_path(__FILE__) . 'includes/gsm-deactivator.php';
require_once plugin_dir_path(__FILE__) . 'includes/gsm-admin.php';
require_once plugin_dir_path(__FILE__) . 'includes/gsm-widget.php';
require_once plugin_dir_path(__FILE__) . 'includes/gsm-api.php';
require_once plugin_dir_path(__FILE__) . 'includes/gsm-functions.php';

// Регистрация активации и деактивации плагина
register_activation_hook(__FILE__, 'gsm_activate_plugin');
register_deactivation_hook(__FILE__, 'gsm_deactivate_plugin');

// Создание экземпляра административного класса
$gsm_admin = new GSM_Admin();

// Создание экземпляра виджета
$gsm_widget = new GSM_Widget();

// Создание экземпляра API
$gsm_api = new GSM_API();