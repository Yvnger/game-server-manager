<?php
class GSM_Widget extends WP_Widget {
    public function __construct() {
        parent::__construct(
            'gsm_widget',
            'Game Server Manager',
            array('description' => 'A widget to display game server information.')
        );
        add_action('widgets_init', array($this, 'register_gsm_widget'));
    }

    public function register_gsm_widget() {
        register_widget('GSM_Widget');
    }

    public function widget($args, $instance) {
        echo $args['before_widget'];

        $servers = gsm_get_servers();

        if (!empty($servers)) {
            echo $args['before_title'] . 'Game Servers' . $args['after_title'];
            echo '<ul>';

            foreach ($servers as $server) {
                $formatted_server_data = gsm_format_server_data($server);

                echo '<li>';
                echo 'Name: ' . $formatted_server_data['name'] . '<br>';
                echo 'Status: ' . $formatted_server_data['status'] . '<br>';
                echo 'Game: ' . $formatted_server_data['game'] . '<br>';
                echo 'Players: ' . $formatted_server_data['players_count'];
                echo '</li>';
            }

            echo '</ul>';
        } else {
            echo 'No servers found.';
        }

        echo $args['after_widget'];
    }
}

$gsm_widget = new GSM_Widget();
